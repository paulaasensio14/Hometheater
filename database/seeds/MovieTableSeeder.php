<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'Cadena Perpetua',
            'year' => '1995',
            'duration' => '182',
            'rating' => '9.3',
            'cover' => 'cadenaperpetua.jpg',
            'filepath' => '/movies/',
            'filename' => 'cadenaperpetua.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0111161/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'La lista de Schindler',
            'year' => '1993',
            'duration' => '195',
            'rating' => '8.9',
            'cover' => 'listadeSchindler.jpg',
            'filepath' => '/movies/',
            'filename' => 'listadeSchindler.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0108052/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'The King',
            'year' => '2019',
            'duration' => '140',
            'rating' => '7.3',
            'cover' => 'king.jpg',
            'filepath' => '/movies/',
            'filename' => 'king.mp4',
            'external_url' => 'https://www.imdb.com/title/tt7984766/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'Terminator: destino oscuro',
            'year' => '2019',
            'duration' => '128',
            'rating' => '6.5',
            'cover' => 'terminatorDestinoOscuro.jpg',
            'filepath' => '/mpvies/',
            'filename' => 'terminatorDestinoOscuro.mp4',
            'external_url' => 'https://www.imdb.com/title/tt6450804/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'Joker',
            'year' => '2019',
            'duration' => '122',
            'rating' => '8.8',
            'cover' => 'joker.jpg',
            'filepath' => '/movies/',
            'filename' => 'joker.mp4',
            'external_url' => 'https://www.imdb.com/title/tt7286456/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'Doctor sleep',
            'year' => '2019',
            'duration' => '153',
            'rating' => '7.7',
            'cover' => 'doctorsleep.jpg',
            'filepath' => '/movies/',
            'filename' => 'doctorsleep.mp4',
            'external_url' => 'https://www.imdb.com/title/tt5606664/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'Steel, un héroe de acero',
            'year' => '1997',
            'duration' => '197',
            'rating' => '2.8',
            'cover' => 'steelheroeacero.jpg',
            'filepath' => '/movies/',
            'filename' => 'steelheroeacero.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0120207/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'Catwoman',
            'year' => '2004',
            'duration' => '104',
            'rating' => '3.3',
            'cover' => 'catwoman.jpg',
            'filepath' => '/movies/',
            'filename' => 'catwoman.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0327554/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'The open house',
            'year' => '2008',
            'duration' => '94',
            'rating' => '3.2',
            'cover' => 'openhouse.jpg',
            'filepath' => '/movies/',
            'filename' => 'openhouse.mp4',
            'external_url' => 'https://www.imdb.com/title/tt7608028/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'La historia interminable III',
            'year' => '1994',
            'duration' => '193',
            'rating' => '6.5',
            'cover' => 'historiainterminable3.jpg',
            'filepath' => '/movies/',
            'filename' => 'historiainterminable3.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0110647/?ref_=nv_sr_3?ref_=nv_sr_3',
        ]);

        DB::table('movies')->insert([
            'title' => 'La vida es bella',
            'year' => '1997',
            'duration' => '116',
            'rating' => '8.6',
            'cover' => 'vidabella.jpg',
            'filepath' => '/movies/',
            'filename' => 'vidabella.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0118799/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'Salvar al soldado Rayan',
            'year' => '1998',
            'duration' => '309',
            'rating' => '8.6',
            'cover' => 'salvarsoldadorayan.jpg',
            'filepath' => '/movies/',
            'filename' => 'salvarsoldadorayan.mp4',
            'external_url' => 'https://www.imdb.com/title/tt0120815/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'Logan',
            'year' => '2017',
            'duration' => '137',
            'rating' => '8.1',
            'cover' => 'logan.jpg',
            'filepath' => '/movies/',
            'filename' => 'logan.mp4',
            'external_url' => 'https://www.imdb.com/title/tt3315342/?ref_=nv_sr_1?ref_=nv_sr_1',
        ]);

        DB::table('movies')->insert([
            'title' => 'The fault in our stars',
            'year' => '2014',
            'duration' => '126',
            'rating' => '7.7',
            'cover' => 'thefaultinourstar.jpg',
            'filepath' => '/movies/',
            'filename' => 'thefaultinourstar.mp4',
            'external_url' => 'https://www.imdb.com/title/tt2582846/?ref_=nv_sr_srsg_0',
        ]);

        DB::table('movies')->insert([
            'title' => 'Padre no hay mas que uno',
            'year' => '2019',
            'duration' => '98',
            'rating' => '6.2',
            'cover' => 'padrenohaymasqueuno.jpg',
            'filepath' => '/movies/',
            'filename' => 'thefaultinourstar.mp4',
            'external_url' => 'https://www.imdb.com/title/tt9427166/?ref_=nv_sr_srsg_0',
        ]);

        DB::table('movies')->insert([
            'title' => 'Los descendientes 3',
            'year' => '2019',
            'duration' => '108',
            'rating' => '6.8',
            'cover' => 'descendientes3.jpg',
            'filepath' => '/movies/',
            'filename' => 'thefaultinourstar.mp4',
            'external_url' => 'https://www.imdb.com/title/tt8022928/?ref_=nv_sr_srsg_5',
        ]);
    }
}
