<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function clients(){
        return $this->belongsTo('App\Client');
    }
    public function menus(){
        return $this->belongsToMany('App\Menu');
    }
}
