<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;
    //relacion de uno a muchos inversa de Team
    public function team(){
        return $this->belongsTo('App\Models\team');
    }

    public function goal(){
        return $this->hasMany('App\Models\goal');
    }
}
