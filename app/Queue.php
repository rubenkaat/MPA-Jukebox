<?php
namespace App;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Song;

class Queue{
    public $playlist = [];

    public function __construct($request){
        if($request->session()->has('playlist')){
            $this->playlist = $request->session()->get('playlist');
        }else{
            $this->playlist = [];
        }
    }
    public function getPlaylist(){
        $playlist = session()->get('playlist');
        return $playlist;
    }
    public function addToPlaylist($songId){
        $song = Song::findOrFail($songId);
       session()->push('playlist', $song);
    }
    public function deleteFromPlaylist($songId){
        $song = Song::findOrFail($songId);

        unset(session('playlist')[$songId]);
    }
}
?>