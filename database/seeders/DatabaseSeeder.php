<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Hà Đình Việt',
            'numberphone' => '0865028347',
            'email'=> 'haviet123.mtp@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}