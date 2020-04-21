<?php

use Illuminate\Database\Seeder;
use App\Tache;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taches')->insert([
            "nom" => "",
            "description" => "",
            "created_at" => now(),
        ]);
    }
}
