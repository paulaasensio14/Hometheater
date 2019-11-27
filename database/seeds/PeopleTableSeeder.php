<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name' => 'Morgan Freeman',
            'photo' => 'morganfreeman.jpg',
            'external_url' => 'https://www.imdb.com/name/nm0000151/?ref_=tt_cl_t2',
        ]);

        DB::table('people')->insert([
            'name' => 'Zoey Deutch',
            'photo' => 'zoeydeutch.jpg',
            'external_url' => 'https://www.imdb.com/name/nm3614913/',
        ]);

        DB::table('people')->insert([
            'name' => 'Joaquin Phoenix',
            'photo' => 'joaquinphoenix.jpg',
            'external_url' => 'https://www.imdb.com/name/nm0001618',
        ]);

        DB::table('people')->insert([
            'name' => 'Leonardo DiCaprio',
            'photo' => 'leonardodicaprio.jpg',
            'external_url' => 'https://www.imdb.com/name/nm0000138',
        ]);

        DB::table('people')->insert([
            'name' => 'Dafne Keen',
            'photo' => 'dafnekeen.jpg',
            'external_url' => 'https://www.imdb.com/name/nm6748436',
        ]);

        DB::table('people')->insert([
            'name' => 'Jennifer Aniston',
            'photo' => 'jenniferaniston.jpg',
            'external_url' => 'https://www.imdb.com/name/nm0000098',
        ]);

        DB::table('people')->insert([
            'name' => 'Ewan McGregor',
            'photo' => 'ewanmcgregor.jpg',
            'external_url' => 'https://www.imdb.com/name/nm0000191',
        ]);

        DB::table('people')->insert([
            'name' => 'Emma Stone',
            'photo' => 'emmastone.jpg',
            'external_url' => 'https://www.imdb.com/name/nm1297015',
        ]);

        DB::table('people')->insert([
            'name' => 'Robert De Niro',
            'photo' => 'robertdeniro.jpg',
            'external_url' => 'https://www.imdb.com/name/nm0000134',
        ]);

        DB::table('people')->insert([
            'name' => 'Matthew Noszka',
            'photo' => 'matthewnoczka.jpg',
            'external_url' => 'https://www.imdb.com/name/nm8251059',
        ]);

        DB::table('people')->insert([
            'name' => 'Ryan Gosling',
            'photo' => 'ryangosling.jpg',
            'external_url' => 'https://www.imdb.com/name/nm0331516',
        ]);

        DB::table('people')->insert([
            'name' => 'Lucas Black',
            'photo' => 'lucasblack.jpg',
            'external_url' => 'https://www.imdb.com/name/nm0085407',
        ]);

        DB::table('people')->insert([
            'name' => 'Chris Evans',
            'photo' => 'chrisevans.jpg',
            'external_url' => 'https://www.imdb.com/name/nm0262635',
        ]);

        DB::table('people')->insert([
            'name' => 'Ansel Elgort',
            'photo' => 'anselelgort.jpg',
            'external_url' => 'https://www.imdb.com/name/nm5052065/?ref_=tt_ov_st_sm',
        ]);

        DB::table('people')->insert([
            'name' => 'Shailene Woodley',
            'photo' => 'shailenewoodley.jpg',
            'external_url' => 'https://www.imdb.com/name/nm0940362/?ref_=tt_ov_st_sm',
        ]);

        DB::table('people')->insert([
            'name' => 'Josh Boone',
            'photo' => 'joshboone.jpg',
            'external_url' => 'https://www.imdb.com/name/nm1837748/?ref_=tt_ov_dr',
        ]);
    }
}
