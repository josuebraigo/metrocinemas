<?php

use Illuminate\Database\Seeder;
use App\Models\Funcion;

class FunctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $function = new Funcion();
        $function->movie_id = '1';
        $function->room_id = '2';
       	$function->schedule = '10:30:00';
       	$function->save();

       	$function = new Funcion();
        $function->movie_id = '2';
        $function->room_id = '4';
       	$function->schedule = '12:15:00';
       	$function->save();

       	$function = new Funcion();
        $function->movie_id = '1';
        $function->room_id = '2';
       	$function->schedule = '23:30:00';
       	$function->save();

       	$function = new Funcion();
        $function->movie_id = '9';
        $function->room_id = '3';
       	$function->schedule = '15:00:00';
       	$function->save();

    }
}
