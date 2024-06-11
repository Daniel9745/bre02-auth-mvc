<?php
require "./controllers/AuthController.php";

class Router {
    public function __construct() {
    }
        public function handleRequest(array $get) : void {
            if(isset($get["route"]) &&  $get["route"] === "connexion") {
                $auth = new AuthController();
                $auth->connexion();
            }
            else if(isset($get["route"]) && $get["route"] === "inscription") {
                $auth = new AuthController();
                $auth->inscrition();
            }
            else if(isset($get["route"]) && $get["route"] === "espace-perso") {
                $auth = new AuthController();
                $auth->espacePerso();
            }
            else if(isset($get["route"]) && $get["route"] === "check-connexion") {
                $auth = new AuthController();
                $auth->checkConnexion();
            }
            // else if(!isset($get["route"])){
            //     $auth = new AuthController();
            //     $auth->home();
            // }
            
        }
}