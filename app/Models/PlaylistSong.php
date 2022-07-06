<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistSong extends Model
{
    protected $table = 'playlist_song';
    protected $fillable = ['song_id', 'playlist_id'];
    public $timestamps = false;
}
