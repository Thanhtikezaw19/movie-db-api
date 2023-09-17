<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade as PDF;

class Movie extends Model
{
    protected $fillable = [
        'title', 'summary', 'cover_image', 'genres', 'author', 'tags', 'imdb_rating', 'pdf_download_link'
    ];

    public function generatePdf()
    {
        // Create a PDF instance
        $pdf = PDF::loadView('pdf.movie', ['movie' => $this]);

        // Generate a unique filename for the PDF
        $filename = 'movie_' . $this->id . '.pdf';

        // Save the PDF to a public directory (you may configure the path as needed)
        $pdf->save(public_path('pdfs/' . $filename));

        // Return the path to the saved PDF
        return 'pdfs/' . $filename;
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
