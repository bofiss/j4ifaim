<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['titre'];
    public function reservations(){
        return $this->belongsToMany('App\Reservation');
    }
}
