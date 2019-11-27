<?php

use Illuminate\Database\Seeder;

class PeopleDirectMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_direct_movies')->insert([
            'id_person' => '1',
            'id_movie' => '2',
        ]);

        DB::table('people_direct_movies')->insert([
            'id_person' => '1',
            'id_movie' => '3',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '3',
            'id_movie' => '1',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '4',
            'id_movie' => '5',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '5',
            'id_movie' => '5',
        ]);
    }
}
