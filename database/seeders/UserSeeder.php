<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Moniruzzaman Saikat",
                "email" => "saikat@gmail.com",
                "password" => Hash::make("saikat"),
            ],
            [
                "name" => "Lance Morrison",
                "email" => "egestas.blandit.nam@yahoo.com",
                "password" => Hash::make("12345"),
            ],
            [
                "name" => "Suki Butler",
                "email" => "est.arcu.ac@icloud.couk",
                "password" => Hash::make("12345"),
            ],
            [
                "name" => "Molly Evans",
                "email" => "at.fringilla@icloud.org",
                "password" => Hash::make("12345"),
            ],
            [
                "name" => "Giselle Parks",
                "email" => "quisque.varius.nam@outlook.com",
                "password" => Hash::make("12345"),
            ],
        ]);
    }
}
