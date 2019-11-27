<?php

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**
     *  php artisan migrate:fresh --seed
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@iescelia.org',
            'password' => '1234',
        ]);

        DB::table('users')->insert([
            'name' => 'Viviana',
            'email' => 'vmackeller0@bbb.org',
            'password' => 'oQNnnI5cW',
        ]);

        DB::table('users')->insert([
            'name' => 'Kimmie',
            'email' => 'ktrunks1@theguardian.com',
            'password' => '5KponlMw',
        ]);

        DB::table('users')->insert([
            'name' => 'Moe',
            'email' => 'mbenmore2@telegraph.co.uk',
            'password' => '0GjBc1Bl5QPj',
        ]);

        DB::table('users')->insert([
            'name' => 'Korey',
            'email' => 'kmaven3@quantcast.com',
            'password' => 'say9rBUTV',
        ]);

        DB::table('users')->insert([
            'name' => 'Martin',
            'email' => 'mconnell4@chicagotribune.com',
            'password' => '06QXwQM',
        ]);

        DB::table('users')->insert([
            'name' => 'Muffin',
            'email' => 'mlampitt5@taobao.com',
            'password' => 'LgJupUa',
        ]);

        DB::table('users')->insert([
            'name' => 'Jimmie',
            'email' => 'jpowney6@amazon.de',
            'password' => 'SriAU9D',
        ]);

        DB::table('users')->insert([
            'name' => 'Ajay',
            'email' => 'agullis7@google.ca',
            'password' => 'pvaq17',
        ]);

        DB::table('users')->insert([
            'name' => 'Martin',
            'email' => 'mhynam8@printfriendly.com',
            'password' => 'Qxw08FtR6pn',
        ]);

        DB::table('users')->insert([
            'name' => 'Twyla',
            'email' => 'tstriker9@people.com.cn',
            'password' => '8z7FJ8a7AERm',
        ]);

        DB::table('users')->insert([
            'name' => 'Brennan',
            'email' => 'bacoma@time.com',
            'password' => 'xKJM0X',
        ]);

        DB::table('users')->insert([
            'name' => 'Allyn',
            'email' => 'akallb@wisc.edu',
            'password' => 'TKQVPSW',
        ]);

        DB::table('users')->insert([
            'name' => 'Philis',
            'email' => 'pbairnsfatherc@blogtalkradio.com',
            'password' => '99auulZQ8l',
        ]);

        DB::table('users')->insert([
            'name' => 'Wallache',
            'email' => 'wemslied@spiegel.de',
            'password' => 'uY8YtnqTPuC2',
        ]);
    }
}
