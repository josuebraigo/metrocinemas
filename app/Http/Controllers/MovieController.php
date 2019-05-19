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

    public function genresMovie($slug) {
        $genres = Genre::all();
        $genre = Genre::where('slug', '=', $slug)->firstOrFail();
        $id_genre = $genre->id;
        $movies = Movie::whereHas('genres', function ($query) use($id_genre) {
            $query->where('genre_id', '=', $id_genre);
        })->paginate(9);


        return view('cartelera', compact('movies', 'genres'));
    }
}
