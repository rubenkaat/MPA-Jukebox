<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queue;
use App\Models\Song;
use App\Models\Playlist;
use App\Models\PlaylistSong;

class PlaylistController extends Controller
{
    public function index(Request $request){
        $playlist = new Queue($request);
        $allsongs = $playlist->getPlaylist();
        $totalTime = 0;
        if(isset($allsongs)){
            foreach($allsongs as $song){
                $totalTime += $song->duration;
            }
        }
        $totalTime = gmdate("H:i:s", $totalTime);
        return view ('playlist', ['playlist' => $allsongs, 'totalTime' => $totalTime]);
    }
    public function addSongToQueue(request $request, $songId){
        $playlist = new Queue($request);
        $playlist->addToQueue($songId);
        return back();
    }
    public function deleteSongFromQueue(Request $request,  $songId){
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
        $totalTime = 0;
        foreach($playlist[0]->songs as $song){
            $totalTime += $song->duration;
        }
        $totalTime = gmdate("H:i:s", $totalTime);
        $songs = Song::all();
        return view ('playlistdetails', compact('playlist', 'totalTime', 'songs'));
    }
    public function addSongToPlaylist($songId, $playlistId){
        PlaylistSong::create([
            'song_id' => $songId,
            'playlist_id' => $playlistId
        ]);
        return back();
    }
    public function deleteSongFromPlaylist($songId, $playlistId){
        PlaylistSong::where('song_id', $songId)->where('playlist_id', $playlistId)->take(1)->delete();
        return back();
    }
    public function editPlaylistName(){
        $name = $_GET['name'];
        $playlistId = $_GET['playlistId'];
        $playlist = Playlist::where('id', $playlistId)->update(['name' => $name]);
        return back();
    }
}
