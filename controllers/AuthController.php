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
    public function home(): void {
        $template = "home";
        require "templates/layout.phtml";
    }
    public function checkConnexion(): void{

        if(isset($_POST["email"]) && isset($_POST["password"])){
            $manager = new UserManager();
            $user = $manager->getUserByEmail($_POST["email"]);
        }
        if($user->getId() !== null){
            if (password_verify($_POST["password"], $user->getPassword())) {
                $_SESSION["user"] = $user;
            }
        }
    }

}








