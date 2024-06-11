<?php

class Authcontroller{
    public function __construct(){
    
    }
    
    public function connexion(): void {
        $template = "connexion";
        require "templates/layout.phtml";
    }
    public function inscription(): void {
        $template =  "inscription";
        require "templates/layout.phtml";
    }
    public function espacePerso(): void {
        $template = "espace-perso";
        require "templates/layout.phtml";
    }
    public function checkConnexion() {
        
    }


}








