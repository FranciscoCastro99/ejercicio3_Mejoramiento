<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;
    //relacion de uno a muchos
    public function goal(){
        return $this->hasMany('App\Models\goal');
    }

    //relacion de muchos a muchos
       public function teams(){
        return $this->belongsToMany('App\Models\team');
    }
}
