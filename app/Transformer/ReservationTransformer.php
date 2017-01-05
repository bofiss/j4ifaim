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
class ReservationTransformer {
    //put your code here
    public function transform($reservation) {
        return [
            'nom' => $reservation->getNom(),
            'tel' => $reservation->getTel(),
            'email'=> $reservation->getEmail(),
            'menu'=> $reservation->getMenu(),
            'heure_reservation' => $reservation->getHoraire(),
            'nombre_de_personne' => $reservation->getNbPersonne()
        ];
    }
}
