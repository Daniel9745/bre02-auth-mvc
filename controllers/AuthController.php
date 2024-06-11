<?php

class Authcontroller{
    public function __construct(){
    
    }
    
    public function connexion(): void {
        $route = "connexion";
        require "templates/connexion.phtml";
    }
    public function inscription(): void {
        $route =  "inscription";
        require "templates/layout.phtml";
    }
    public function espacePerso(): void {
        $route = "espace-perso";
        require "templates/layout.phtml";
    }
    public function checkConnexion() {
        
    }


}








