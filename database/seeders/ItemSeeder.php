<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("items")->insert([
            "name" => "Guido",
        ]);

        DB::table("items")->insert([
            "name" => "David",
        ]);

        DB::table("items")->insert([
            "name" => "Niels",
        ]);

        DB::table("items")->insert([
            "name" => "Daniel",
        ]);
    }
}
