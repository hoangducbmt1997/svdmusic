<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $table = 'song';
    protected $fillable = ['name_song','image_song','image_bannersong','playlist_id','top100_id','area_id','category_id','artist_id','link_lyrics','link_mp3','status','prioty','view'];
    // JOIN 1-1
    public function cate()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
    public function artist()
    {
        return $this->hasOne(Artist::class,'id','artist_id');
    }
    public function area()
    {
        return $this->hasOne(Area::class,'id','area_id');
    }
    public function top100()
    {
        return $this->hasOne(Top100::class,'id','top100_id');
    }

    // local scope
    public function scopeSearch($query)
    {
        if($key = request()->key){
            $key = strtolower($key);
            $query = $query->where('name_song','like','%'.$key.'%');
        }
        return $query;
    }
}
