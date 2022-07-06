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
    /**
     * adding/deleting songs to/from queue
     */
    public function addToQueue($songId){
        $song = Song::findOrFail($songId);
       session()->push('playlist', $song);
    }
    public function deleteFromQueue($songId){
        $session = session()->get('playlist');
        foreach($session as $index => $song){
            if($song->id == $songId){
                unset($session[$index]);
                session()->forget('playlist');
                $session = array_values($session);
                foreach($session as $newSession){
                    session()->push('playlist', $newSession);
                }
                return;
            }
        }
        

    }
}
?>