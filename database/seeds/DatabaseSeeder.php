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
            'email' => 'info@zeropeople.ru',
            'type'  => 'boss',
            'password' => bcrypt(''),
        ]);

//        DB::table('widgets')->insert([
//            'description' => '',
//        ]);
    }
}
