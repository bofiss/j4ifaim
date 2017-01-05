<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liers extends Model
{
    public function menu(){
        return this.belongToMany('App\Menus');
    }
    public function reservation(){
        return this.belongToMany('App\Reservations');
    }
}
