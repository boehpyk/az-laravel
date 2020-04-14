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
            'name' => 'AZ admin',
            'email' => 'example@example.com',
            'type'  => 'admin',
            'password' => bcrypt(''),
        ]);

//        DB::table('widgets')->insert([
//            'description' => '',
//        ]);
    }
}
