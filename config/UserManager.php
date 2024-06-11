<?php
require 'AbstractManager.php';
class UserManager extends AbstractManager{

    public function __construct(){
        
    }
    public function getUserEmail($email){
        $query = $this->db->prepare('SELECT * FROM users WHERE email = :email');
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
    }
}