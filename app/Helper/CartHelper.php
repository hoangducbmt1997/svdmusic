<?php

namespace App\Helper;

use App\Models\Artist;

class CartHelper 
{
    public $items = [];
    public function __construct()
    {
        $this->items = session('cart') ? session('cart') : [];
    }
    public function add($song)
    {
        $artist = Artist::find($song->artist_id);
        
        $item = [
            'id'=> $song->id, 
            'name'=> $song->name_song,
            'image'=> $song->image_song,
            'mp3'=> $song->link_mp3,
            'lrc'=> $song->link_lyrics,
            'avatar'=> $song->image_song,
            'banner'=> $song->image_bannersong,
            'artist'=> $artist->name_artist,         
        ];
        $this->items[$song->id]= $item;
        session(['cart'=> $this->items]);
    }
    public function remove($id)
    {
        if(isset($this->items[$id])){
            unset($this->items[$id]);
        }
        session(['cart' => $this->items]);
    }
  
}


?>