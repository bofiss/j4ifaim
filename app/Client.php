<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = ['nom', 'tel'];
    public function reservations(){
        return $this->hasMany('App\Reservation');
    }
}
