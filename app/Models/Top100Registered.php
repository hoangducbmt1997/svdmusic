<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top100Registered extends Model
{
    use HasFactory;
    protected $table = 'top100_registered';
    protected $fillable = ['id','account_id','top100_id','status'];
    public function top100()
    {
        return $this->hasOne(Top100::class,'id','top100_id');
    }
}
