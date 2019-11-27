<?php

use Illuminate\Database\Seeder;

class PeopleActMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_act_movies')->insert([
            'id_person' => '1',
            'id_movie' => '4',
        ]);

        DB::table('people_act_movies')->insert([
            'id_person' => '2',
            'id_movie' => '3',
        ]);
        DB::table('people_act_movies')->insert([
            'id_person' => '3',
            'id_movie' => '1',
        ]);
        DB::table('people_act_movies')->insert([
            'id_person' => '3',
            'id_movie' => '2',
        ]);
        DB::table('people_act_movies')->insert([
            'id_person' => '4',
            'id_movie' => '1',
        ]);
        DB::table('people_act_movies')->insert([
            'id_person' => '4',
            'id_movie' => '5',
        ]);
        DB::table('people_act_movies')->insert([
            'id_person' => '5',
            'id_movie' => '2',
        ]);
        DB::table('people_act_movies')->insert([
            'id_person' => '5',
            'id_movie' => '1',
        ]);
        DB::table('people_act_movies')->insert([
            'id_person' => '5',
            'id_movie' => '3',
        ]);
        DB::table('people_act_movies')->insert([
            'id_person' => '1',
            'id_movie' => '1',
        ]);
        DB::table('people_act_movies')->insert([
            'id_person' => '2',
            'id_movie' => '2',
        ]);
    }
}
