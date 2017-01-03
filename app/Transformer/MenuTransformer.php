<?php

namespace App\Transformer;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuTransformer
 *
 * @author bofiss
 */
class MenuTransformer {
    //put your code here
    public function transform($menu) {
        return [
            'id' => $menu->id,
            'titre' => $menu->titre,
            'created_at' => $menu->created_at
        ];
    }
}
