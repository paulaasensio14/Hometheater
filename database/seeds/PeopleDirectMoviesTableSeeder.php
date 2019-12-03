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
        DB::table('people_direct_movies')->insert([
            'id_person' => '16',
            'id_movie' => '14',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '5',
            'id_movie' => '4',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '16',
            'id_movie' => '6',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '10',
            'id_movie' => '7',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '3',
            'id_movie' => '8',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '1',
            'id_movie' => '9',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '7',
            'id_movie' => '10',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '11',
            'id_movie' => '11',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '9',
            'id_movie' => '12',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '13',
            'id_movie' => '13',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '12',
            'id_movie' => '14',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '11',
            'id_movie' => '15',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '5',
            'id_movie' => '16',
        ]);
        DB::table('people_direct_movies')->insert([
            'id_person' => '6',
            'id_movie' => '16',
        ]);
    }
}
