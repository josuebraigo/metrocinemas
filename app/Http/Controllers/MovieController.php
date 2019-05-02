<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Funcion;
use Illuminate\Support\Arr;

class MovieController extends Controller
{

	public function cartelera() {
    	$movies = Movie::all();
    	$genres = Genre::all();
    	return view('cartelera', compact('movies', 'genres'));
    }

    public function show($slug) {

        $movie = Movie::where('slug', '=', $slug)->firstOrFail();

        return view('pelicula', compact('movie', json_encode($movie->trailer, true)));

    }

    public function search() {
    	$query = htmlentities($_GET['q']);
        $movies = Movie::search($query)->get();
        // dump($designers);
        $movies = collect($movies);

        return view('cartelera', compact('query', 'movies'));
    }

    public function functions() {
        $functions = Funcion::all();
        $movies = array();
        foreach($functions as $function) {
            $flag = Arr::has($movies, $function->movie->id);
            if(!$flag){ 
                $movies[] = Movie::find($function->movie->id);
            }
        }

        return view('funciones', compact('functions', 'movies'));
    }

    public function functionsMovie($slug) {
        $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        $functions = Funcion::all();

        return view('funciones-pelicula', compact('functions', 'movie'));
    }
}
