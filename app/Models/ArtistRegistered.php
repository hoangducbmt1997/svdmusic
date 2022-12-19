<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistRegistered extends Model
{
    use HasFactory;
    protected $table = 'artist_registered';
    protected $fillable = ['id','account_id','artist_id','status'];
    public function artist()
    {
        return $this->hasOne(Artist::class,'id','artist_id');
    }
}
