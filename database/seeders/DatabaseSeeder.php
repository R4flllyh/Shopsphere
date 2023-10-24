<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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
            'username' => 'admin',
            'role' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@argon.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'username' => 'user',
            'role' => 'user',
            'firstname' => 'User 1',
            'lastname' => 'User',
            'email' => 'user@argon.com',
            'password' => bcrypt('secret')
        ]);
    }
}
