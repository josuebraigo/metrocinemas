<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class BaseController extends Controller
{
    public function index() {

    	$movies = Movie::inRandomOrder()->take(5)->get();
    	return view('index', compact('movies'));

    }
}
