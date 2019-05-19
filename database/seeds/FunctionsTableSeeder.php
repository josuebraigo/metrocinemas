<?php

use Illuminate\Database\Seeder;
use App\Models\Funcion;
use App\Models\FunctionSeat;

class FunctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seats = array();

        for ($i=0; $i < 100; $i++) {
          $seats[] = false;
        }

        $seats = json_encode($seats);

        $function = new Funcion();
        $function->movie_id = '1';
        $function->room_id = '2';
       	$function->schedule = '10:30:00';
       	$function->save();

        $functionSeat = new FunctionSeat();
        $functionSeat->function_id = '1';
        $functionSeat->seats = $seats;
        $functionSeat->save();

       	$function = new Funcion();
        $function->movie_id = '2';
        $function->room_id = '4';
       	$function->schedule = '12:15:00';
       	$function->save();

        $functionSeat = new FunctionSeat();
        $functionSeat->function_id = '2';
        $functionSeat->seats = $seats;
        $functionSeat->save();

       	$function = new Funcion();
        $function->movie_id = '1';
        $function->room_id = '2';
       	$function->schedule = '23:30:00';
       	$function->save();

        $functionSeat = new FunctionSeat();
        $functionSeat->function_id = '3';
        $functionSeat->seats = $seats;
        $functionSeat->save();

       	$function = new Funcion();
        $function->movie_id = '8';
        $function->room_id = '3';
       	$function->schedule = '15:00:00';
       	$function->save();

        $functionSeat = new FunctionSeat();
        $functionSeat->function_id = '4';
        $functionSeat->seats = $seats;
        $functionSeat->save();

    }
}
