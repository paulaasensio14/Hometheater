<?php

use Illuminate\Database\Seeder;

class GenreMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres_movies')->insert([
            'id_genres' => '1',
            'id_movies' => '1', 
        ]);

        DB::table('genres_movies')->insert([
            'id_genres' => '4',
            'id_movies' => '3', 
        ]);

        DB::table('genres_movies')->insert([
            'id_genres' => '2',
            'id_movies' => '7', 
        ]);

        DB::table('genres_movies')->insert([
            'id_genres' => '10',
            'id_movies' => '7', 
        ]);

        DB::table('genres_movies')->insert([
            'id_genres' => '4',
            'id_movies' => '7', 
        ]);

        DB::table('genres_movies')->insert([
            'id_genres' => '5',
            'id_movies' => '2', 
        ]);

        DB::table('genres_movies')->insert([
            'id_genres' => '8',
            'id_movies' => '11', 
        ]);

        DB::table('genres_movies')->insert([
            'id_genres' => '9',
            'id_movies' => '14', 
        ]);

        DB::table('genres_movies')->insert([
            'id_genres' => '11',
            'id_movies' => '14', 
        ]);
    }
}
