<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
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
            [
                "nom" => "sarra",
                "prenom" => "elghoul",
                "email" => "sarra@gmail.com",
                "numtel" => "12345678",
                "role" => "admin",
                "password" => Hash::make("adminadmin"),
            ],
            [
                "nom" => "chef",
                "prenom" => "chef",
                "email" => "chef@gmail.com",
                "numtel" => "32165498",
                "role" => "admin",
                "password" => Hash::make("adminadmin"),
            ],
            [
                "nom" => "membre",
                "prenom" => "membre",
                "email" => "membre@gmail.com",
                "numtel" => "98765432",
                "role" => "membre",
                "password" => Hash::make("adminadmin"),
            ]
        ]);
    }
}
