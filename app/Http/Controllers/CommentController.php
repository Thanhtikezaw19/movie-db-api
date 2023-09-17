<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'body' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Get the movie by its ID
        $movie = Movie::findOrFail($id);

        // Create and save the comment associated with the movie
        $comment = new Comment([
            'commenter_email' => $request->input('email'),
            'body' => $request->input('body'),
        ]);

        $movie->comments()->save($comment); // Associate the comment with the movie and save

        return response()->json(['message' => 'Comment added successfully'], 201);
    }
}
