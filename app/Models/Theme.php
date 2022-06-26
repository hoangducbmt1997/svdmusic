<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    protected $fillable = ['name_theme','image_theme','prioty','status'];
    protected $table = 'theme';
    public function scopeSearch($query)
    {
        if($key = request()->key){
            $query = $query->where('name_theme','like','%'.$key.'%');
        }
        return $query;
    }
}
