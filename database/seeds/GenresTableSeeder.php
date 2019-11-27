<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'description' => 'Action',
        ]);

        DB::table('genres')->insert([
            'description' => 'History',
        ]);

        DB::table('genres')->insert([
            'description' => 'Musical',
        ]);

        DB::table('genres')->insert([
            'description' => 'Adventure',
        ]);

        DB::table('genres')->insert([
            'description' => 'Animation',
        ]);

        DB::table('genres')->insert([
            'description' => 'War',
        ]);

        DB::table('genres')->insert([
            'description' => 'Horror',
        ]);

        DB::table('genres')->insert([
            'description' => 'Comedy',
        ]);

        DB::table('genres')->insert([
            'description' => 'Drama',
        ]);

        DB::table('genres')->insert([
            'description' => 'Crime',
        ]);

        DB::table('genres')->insert([
            'description' => 'Romance',
        ]);
    }
}
