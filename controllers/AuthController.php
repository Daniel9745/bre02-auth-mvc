<?php

class Authcontroller{
    public function __construct(){
    
    }
    
    public function connexion(): void {
        $route = "connexion";
        require "templates/layout.phtml";
    }
    public function inscription(): void {
        $route =  "inscription";
        require "templates/layout.phtml";
    }
    public function espacePerso(): void {
        $route = "espace-perso";
        require "templates/layout.phtml";
    }


}








// if ($route === "home") {
//     require "templates/home.phtml";
// }
// elseif ($route === "connexion") {
//     require "templates/connexion.phtml";
// }
// elseif ($route === "inscrption.phtml") {
//     require "templates/inscription.phtml";
// }