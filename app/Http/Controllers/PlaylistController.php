<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playlist;
use App\Models\Song;

class PlaylistController extends Controller
{
    public function index(Request $request){
        $playlist = new Playlist($request);
        $allsongs = $playlist->getPlaylist();
        return view ('playlist', ['playlist' => $allsongs]);
    }
    public function addSongToPlaylist(request $request, $song){
        $playlist = new Playlist($request);
        $songtest = Song::findOrFail($song);
        $playlist->addToPlaylist($songtest);
        $playlist->saveSession($request);
        return back();
    }
    public function deleteSongFromPlaylist(Request $request,  $song){
        $playlist = new Playlist($request);
        $playlist->deleteFromPlaylist($song);
        $playlist->saveSession($request);
        return back();
    }
}