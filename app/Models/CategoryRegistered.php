<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryRegistered extends Model
{
    use HasFactory;
    protected $table = 'category_registered';
    protected $fillable = ['id','account_id','category_id','status'];
    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
}
