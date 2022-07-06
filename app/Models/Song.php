<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Playlist;

class Song extends Model
{   
    /**
     * defines the relation between songs and playlists
     */
    public function playlist(){
        return $this->belongsToMany(Playlist::class);
    }
}
