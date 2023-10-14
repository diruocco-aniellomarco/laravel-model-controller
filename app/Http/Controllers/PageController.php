<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class PageController extends Controller
{
    function home() {
        $movies = Movie::all();
        
        return view('home', compact('movies'));
    }
}
