<?php


namespace App\Repositories;
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
class ReservationRepository {
    //put your code here
    protected  $nom;
    protected  $tel;
    protected  $email;
    protected  $menu;
    protected $nbpersonne;
    protected $horaire;

    public function __construct($nom, $tel,  $email, $menu,  $nbpersonne,  $horaire){
      $this->nom = $nom;
      $this->tel = $tel;
      $this->email = $email;
      $this->menu = $menu;
      $this->nbpersonne = $nbpersonne;
      $this->horaire = $horaire;
    }

    public function getNom(){
      return $this->nom;
    }
    public function getTel(){
      return $this->tel;
    }
    public function getEmail(){
      return $this->email;
    }
    public function getMenu(){
      return $this->menu;
    }
    public function getNbPersonne(){
      return $this->nbpersonne;
    }
    public function getHoraire(){
      return $this->horaire;
    }
}
