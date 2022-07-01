<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playlist;

class PlaylistController extends Controller
{
    public function index(request $request){
        $playlist = new Playlist($request);
        $playlist->getPlaylist();
        return view ('playlist', compact('playlist'));
    }
}
