<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Funcion;
use App\Models\FunctionSeat;
use Illuminate\Support\Arr;

class MovieController extends Controller
{

	public function cartelera() {
    	$movies = Movie::paginate(9);
    	$genres = Genre::all();
    	return view('cartelera', compact('movies', 'genres'));
    }

    public function show($slug) {
        $movie = Movie::where('slug', '=', $slug)->firstOrFail();
		$genres = $movie->genres->all();
		$actors = $movie->actors->all();
        return view('pelicula', compact('movie', json_encode($movie->trailer, true), 'genres', 'actors'));
    }

    public function search() {
    	$query = htmlentities($_GET['q']);
        $movies = Movie::where('name', 'like', '%'.$query.'%')->paginate(9);
        $genres = Genre::all();
        return view('cartelera', compact('movies', 'genres'));
    }

    public function functions() {
        $functions = Funcion::all();

        $movies = Movie::has('funcion')->get();
        // $movies = array();
        // foreach($functions as $function) {
        //     $flag = Arr::get($movies, $function->movie->id);
        //     if(!$flag){
        //         $movies[] = Movie::find($function->movie->id);
        //         echo $function->movie->name;
        //     }
        // }

        $functions = $functions->sortBy('schedule');

        return view('funciones', compact('functions', 'movies'));
    }

    public function functionsMovie($slug) {
        $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        $functions = Funcion::all();
        $functions = $functions->sortBy('schedule');

        return view('funciones-pelicula', compact('functions', 'movie'));
    }

    public function genresMovie($slug) {
        $genres = Genre::all();
        $genre = Genre::where('slug', '=', $slug)->firstOrFail();
        $id_genre = $genre->id;
        $movies = Movie::whereHas('genres', function ($query) use($id_genre) {
            $query->where('genre_id', '=', $id_genre);
        })->paginate(9);

        return view('cartelera', compact('movies', 'genres'));
    }

		public function seatsFunction($function, $id){
            // dd($id);
			$seats = FunctionSeat::where('function_id', $id)->get();
			/*foreach ($seats as $key => $seat) {
				dump(json_decode($seat->seats));
			}*/
            $movie = Movie::where('slug',$function)->firstOrFail();

			return view('seats', compact('seats', 'movie'));
		}

		public function asignarAsientos(Request $request){
			$functionSeat = FunctionSeat::where('function_id', $request->function)->update(['seats' => json_encode($request->seats)]);
            $function = Funcion::where('id', $request->function)->firstOrFail();
            $seleccionados = $request->selected;
            // $letra = $seleccionados[0] % 10;

            /////////////////////////////////////////Generar asientos
            $arr = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
            $letra = 0;
            $numero = 0;
            for($i = 0; $i < sizeof($seleccionados); $i++) {
                $letra = $arr[$seleccionados[$i] / 10];
                $numero = ($seleccionados[$i] % 10) + 1;
                $seleccionados[$i] = $letra.$numero;
            }
            ///////////////////////////////////////////////////

            //////////////////////////////////////////Generar código

            $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
            srand((double)microtime()*1000000); 
            $i = 0; 
            $pass = '' ; 

            while ($i <= 7) { 
                $num = rand() % 33; 
                $tmp = substr($chars, $num, 1); 
                $pass = $pass . $tmp; 
                $i++; 
            } 

            //////////////////////////////////////////////

            ////////////////////////////////////////////////Crear Ticket

            $ticket = new \App\Ticket;
            $ticket->function_id = $request->function;
            $ticket->seats = json_encode($seleccionados);
            $ticket->code = $pass;
            // dd($ticket);

            $ticket->save();

            ///////////////////////////////////////////////////////

            
            return $pass;
		}

        public function ticket($code) {
            $ticket = \App\Ticket::where('code', $code)->firstOrFail();
            $function = Funcion::where('id', $ticket->function_id)->firstOrFail();
            $seleccionados = json_decode($ticket->seats, true);


            return view('ticket', compact('ticket', 'function', "seleccionados"));

        }
}
