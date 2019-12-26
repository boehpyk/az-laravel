<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ZP admin',
            'email' => 'zarankin@bk.ru',
            'type'  => 'supaBoss',
            'password' => bcrypt('secretsecret'),
        ]);

//        DB::table('widgets')->insert([
//            'description' => '',
//        ]);
    }
}
