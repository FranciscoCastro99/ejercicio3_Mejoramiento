<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class president extends Model
{
    use HasFactory;
    //relacion uno a uno
    public function team(){
        return $this->hasOne('App\Models\team');
    }
}
