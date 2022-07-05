<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queue;
use App\Models\Song;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function index(Request $request){
        $playlist = new Queue($request);
        $allsongs = $playlist->getPlaylist();
        return view ('playlist', ['playlist' => $allsongs]);
    }
    public function addSongToPlaylist(request $request, $songId){
        $playlist = new Queue($request);
        $playlist->addToPlaylist($songId);
        return back();
    }
    public function deleteSongFromPlaylist(Request $request,  $songId){
        $playlist = new Queue($request);
        $playlist->deleteFromPlaylist($songId);
        return redirect()->route('playlist');
    }
    public function savePlaylist(){
        $name = $_GET['name'];
        $playlist = new Playlist();
        $playlist->savePlaylist($name);
        return back();
    }
    public function getPlaylists(){
        $playlists = Playlist::all()->where('user_id', auth()->id());
        return view ('playlists', ['playlists' => $playlists]);
    }
    public function getPlaylistDetails($id){
        $playlist = Playlist::where('id', $id)->get();
        return view ('playlistdetails', compact('playlist'));
    }
}
