<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genres = [
            'Fantasy', 'Adventure', 'Action', 'Romance', 'Drama', 'Comedy', 'Mystery',
            'Horror', 'Thriller', 'Sci-Fi', 'Slice of Life', 'Supernatural', 'Historical',
            'Martial Arts', 'Psychological', 'Tragedy', 'Isekai', 'Game', 'Crime', 'Parody'
        ];

        foreach ($genres as $g) {
            DB::table('genres')->insert([
                'name' => $g,
                'slug' => Str::slug($g),
                'description' => "$g stories and themes",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
