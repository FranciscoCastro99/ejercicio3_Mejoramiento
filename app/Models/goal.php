<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class goal extends Model
{
    use HasFactory;
    //relación de uno a muchos inversa
    public function player(){
        return $this->belongsTo('App\Models\player');
    }

    //relacion de uno a muchos inversa
    public function game(){
        return $this->belongsTo('App\Models\game');
    }

}
