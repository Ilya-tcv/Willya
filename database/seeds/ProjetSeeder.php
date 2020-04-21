<?php

use Illuminate\Database\Seeder;
use App\Projet;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projets')->insert([
            "nom" => "",
            "description" => "",
            "created_at" => now(),
        ]);
    }
}
