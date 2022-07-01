<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function getSongs($id){
        $songs = Song::where('genre_id', $id)->get();
        return view ('songs', compact('songs'));
    }

    public function showDetails($id){
        $song = Song::where('id', $id)->get();
        return view ('songdetail', compact('song'));
    }
}
