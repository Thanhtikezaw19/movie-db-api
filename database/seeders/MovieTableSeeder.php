<?php

namespace Database\Seeders;

use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Define some sample genres, authors, and tags
        $genres = ['Action', 'Comedy', 'Drama', 'Sci-Fi', 'Horror'];
        $authors = ['John Doe', 'Jane Smith', 'Michael Johnson', 'Emily Davis', 'Robert Wilson'];
        $tags = ['Adventure', 'Romance', 'Thriller', 'Fantasy', 'Mystery'];

        // Seed the "movies" table with sample data
        for ($i = 0; $i < 20; $i++) {
            DB::table('movies')->insert([
                'title' => $faker->sentence(3),
                'summary' => $faker->paragraph(3),
                'cover_image' => $faker->imageUrl(640, 480, 'movies', true),
                'genres' => $faker->randomElement($genres),
                'author' => $faker->randomElement($authors),
                'tags' => implode(',', $faker->randomElements($tags, 3)),
                'imdb_rating' => $faker->randomFloat(1, 1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
