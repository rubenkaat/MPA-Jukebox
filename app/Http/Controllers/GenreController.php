<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function getGenres(){
        $genres = Genre::all();
        return view('genre', compact('genres'));
    }
}
