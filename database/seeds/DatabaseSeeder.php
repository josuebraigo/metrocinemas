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
        $this->call(CountriesTableSeeder::class);
        $this->call(DirectorsTableSeeder::class);
        $this->call(FunctionsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
    }
}
