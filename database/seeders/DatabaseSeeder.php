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
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user1@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'User3',
            'email' => 'user3@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'user4',
            'email' => 'user4@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'User5',
            'email' => 'user5@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'user6',
            'email' => 'user6@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'User7',
            'email' => 'user7@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'user8',
            'email' => 'user8@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'User9',
            'email' => 'user9@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'user10',
            'email' => 'user10@email.com',
            'password' => Hash::make('password'),

        ]);

        DB::table('users')->insert([
            'name' => 'User11',
            'email' => 'user11@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'user12',
            'email' => 'user12@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'User13',
            'email' => 'user13@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'user14',
            'email' => 'user14@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'User15',
            'email' => 'user15@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'user16',
            'email' => 'user16@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'User17',
            'email' => 'user17@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'user18',
            'email' => 'user18@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'User19',
            'email' => 'user19@email.com',
            'password' => Hash::make('password'),

        ]);
        DB::table('users')->insert([
            'name' => 'user20',
            'email' => 'user20@email.com',
            'password' => Hash::make('password'),

        ]);
    }
}
