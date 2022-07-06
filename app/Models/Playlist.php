<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use App\Queue;
use App\Models\PlaylistSong;

class Playlist extends Model
{
    protected $table = 'playlist';
    public $timestamps = false;

    /**
     * defines the relation between playlists and songs
     */
    public function songs(){
        return $this->belongsToMany(Song::class);
    }
    public function savePlaylist($name){
        $this->insert([
            'user_id' => auth()->user()->id,
            'name' =>  $name 
        ]);
        $playlist = $this->all()->where('user_id', auth()->user()->id)->last();
        
        $session = Queue::getPlaylist();
        $playlistSong = new PlaylistSong();
        foreach($session as $song){    
            $playlistSong->insert([
                'playlist_id' => $playlist->id,
                'song_id' => $song->id
            ]);
        }
    }
}