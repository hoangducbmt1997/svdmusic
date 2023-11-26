<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistRegistered extends Model
{
    use HasFactory;
    protected $table = 'playlist_registered';
    protected $fillable = ['id','account_id','playlist_id','status'];
    public function playlist()
    {
        return $this->hasOne(Playlist::class,'id','playlist_id');
    }
}
