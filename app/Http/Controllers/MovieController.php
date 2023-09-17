<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade as PDF;


class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('comments')->paginate(10);

        // Modify each movie to include the PDF download link
        $movies->transform(function ($movie) {
            $movie->pdf_download_link = url('api/movies/' . $movie->id . '/download-pdf');
            return $movie;
        });

        return response()->json($movies);
    }

    public function show($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['error' => 'Movie not found'], 404);
        }

        return response()->json($movie);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'summary' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'genres' => 'required',
            'author' => 'required',
            'tags' => 'required',
            'imdb_rating' => 'nullable|numeric|min:0|max:10',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $coverImage = $request->file('cover_image');
        $coverImageName = time() . '.' . $coverImage->getClientOriginalExtension();
        // I've set the path under the public
        $coverImage->move(public_path('uploads'), $coverImageName);

        $movie = Movie::create([
            'title' => $request->input('title'),
            'summary' => $request->input('summary'),
            'cover_image' => $coverImageName,
            'genres' => $request->input('genres'),
            'author' => $request->input('author'),
            'tags' => $request->input('tags'),
            'imdb_rating' => $request->input('imdb_rating'),
        ]);

        return response()->json($movie, 201);
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['error' => 'Movie not found'], 404);
        }

        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image');
            $coverImageName = time() . '.' . $coverImage->getClientOriginalExtension();
            $coverImage->move(public_path('uploads'), $coverImageName);
            $movie->cover_image = $coverImageName;
        }

        $movie->title = $request->input('title');
        $movie->summary = $request->input('summary');
        $movie->genres = $request->input('genres');
        $movie->author = $request->input('author');
        $movie->tags = $request->input('tags');
        $movie->imdb_rating = $request->input('imdb_rating');


        $movie->save();

        return response()->json($movie, 200);
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            return response()->json(['error' => 'Movie not found'], 404);
        }

        $movie->delete();

        return response()->json(['message' => 'Movie deleted'], 204);
    }

    public function getRelatedMovies($id)
    {
        //Get the current movie
        $current_movie = Movie::findOrFail($id);

        // Define the criteria for related movies
        $criteria = [
            'author' => $current_movie->author,
            'genres' => $current_movie->genres,
            'tags' => $current_movie->tags,
        ];

        // Fetch related movies using the criteria
        $related_movie = Movie::where(function ($query) use ($criteria, $current_movie) {
            // Exclude the current movie
            $query->where('id', '<>', $current_movie->id);

            // Use OR logic to match any of the criteria
            foreach ($criteria as $field => $value) {
                if ($value) {
                    $query->orWhere($field, $value);
                }
            }
        })
        ->orderByDesc('imdb_rating')
        ->limit(7)
        ->get();

        return $related_movie;
    }

    public function downloadPdf($id)
    {
        $movie = Movie::findOrFail($id);

        // Generate the PDF and get the download link
        $pdfLink = $movie->generatePdf();

        // Create a response with the download link
        $response = [
            'id' => $movie->id,
            'pdf_download_link' => url($pdfLink),
        ];

        return response()->json($response);
    }
}
