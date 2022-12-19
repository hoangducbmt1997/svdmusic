<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top100 extends Model
{
    use HasFactory;
    protected $fillable = ['name_top100','image_top100','image_gif_top100','prioty','status','area_id','created_at','updated_at'];
    protected $table = 'top100';

    public function songs()
    {
        return $this->hasMany(Song::class,'top100_id','id');
    }
    public function area()
    {
        return $this->hasOne(Area::class,'id','area_id');
    }
    public function scopeSearch($query)
    {
        if($key = request()->key){
            $query = $query->where('name_top100','like','%'.$key.'%');
        }
        return $query;
    }
}
