<?php

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = new Room();
        $rooms->name = "DeLorean";
        $rooms->save();

        $rooms = new Room();
        $rooms->name = "Asgard";
        $rooms->save();

        $rooms = new Room();
        $rooms->name = "Wakanda";
        $rooms->save();

        $rooms = new Room();
        $rooms->name = "Halcón Milenario";
        $rooms->save();
    }
}
