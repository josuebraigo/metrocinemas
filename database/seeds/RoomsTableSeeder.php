<?php

use Illuminate\Database\Seeder;
use App\Models\Rooms;

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
        $rooms->seats = "null";
        $rooms->save();

        $rooms = new Room();
        $rooms->name = "Asgard";
        $rooms->seats = "null";
        $rooms->save();

        $rooms = new Room();
        $rooms->name = "Wakanda";
        $rooms->seats = "null";
        $rooms->save();

        $rooms = new Room();
        $rooms->name = "Halcón Milenario";
        $rooms->seats = "null";
        $rooms->save();
    }
}
