<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    //relacion de uno a uno
    public function president(){
        return $this->hasOne('App\Models\president');
    }

    //relacion de uno a muchos

    public function players(){
        return $this->hasMany('App\Models\player');
    }

    //relacion de muchos a muchos
    public function games(){
        return $this->belongsToMany('App\Models\game');
    }

}
