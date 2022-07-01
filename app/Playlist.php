<?php
namespace App;

use App\Http\Controllers;

class Playlist{
    public $playlist = [];

    public function __construct($request){
        dd($request);
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
    public function saveSession(){

    }
    public function addToPlaylist($song){
        $this->playlist->push($song);
        return back();
    }
}
?>