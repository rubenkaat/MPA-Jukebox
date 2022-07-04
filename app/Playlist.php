<?php
namespace App;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Song;

class Playlist{
    private $playlist = [];

    public function __construct($request){
        if($request->session()->has('playlist')){
            $this->playlist = $request->session()->get('playlist');
        }else{
            $this->playlist = [];
        }  
    }
    public function getPlaylist(){
        $playlist = $this->playlist;
        return $playlist;
    }

    public function addToPlaylist($song){
        if(empty($this->playlist)){
            $this->playlist[0] = $song;
        }
        
        array_push($this->playlist, $song);
    }
    public function deleteFromPlaylist($song){
        unset($this->playlist[$song->id]);
    }
    public function saveSession($request){
        $request->session()->forget('playlist');
        foreach($this->playlist as $song){
            $request->session()->put('playlist', $song); 
        }
    }
}
?>