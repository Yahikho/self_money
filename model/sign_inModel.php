<?php

//include_once 'user.php';
include_once '../includes/connection_db.php';

class SignInMoldel /*extends User*/{

   // private $user;
   private $connection;


    function __construct($userName, $userPassword){
        
        $this->userName = $userName;
        $this->userPassword = $userPassword;
        $this->connection = new Connection();
        //$user = new User();
        
    }

    public function getDataUser(){
    
        $sql = "SELECT * FROM users WHERE username = :username AND password = :userpassword;";
        $sth = $this->connection->connect()->prepare($sql);
        $sth->bindParam(':username',$this->userName, PDO::PARAM_STR);
        $sth->bindParam(':userpassword',$this->userPassword, PDO::PARAM_STR);
        $sth->execute();
        $rest = $sth->fetchAll(PDO::FETCH_OBJ);
        return $rest;
    }

}