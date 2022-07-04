<?php
namespace App;

use App\Http\Controllers;
use Illuminate\Http\Request;

class Playlist{
    public $playlist = [];

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
        session()->push('playlist', $song);
    }
}
?>