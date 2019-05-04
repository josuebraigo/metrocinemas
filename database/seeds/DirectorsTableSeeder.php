<?php

use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $director = new Director();
        $director->name = "The Russo Brothers";
        $director->save();

        $director = new Director();
        $director->name = "James Cameron";
        $director->save();

        $director = new Director();
        $director->name = "Steven Spielberg";
        $director->save();

        $director = new Director();
        $director->name = "Quentin Tarantino";
        $director->save();
    }
}
