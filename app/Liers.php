<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liers extends Model
{
    public function menus(){
        return this.belongToMany('App\Menus');
    }
    public function reservations(){
        return this.belongToMany('App\Reservations');
    }
}
