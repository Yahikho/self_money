<?php

require_once '../includes/connection_db.php';

class SignUpModel{

    public $user;
    public $email;
    public $password;

    private $connection;

    function __construct(){

        $this->user = '';
        $this->email = '';
        $this->password = '';

        $this->connection = new Connection();

    }

    public function createUser(){
        $sql = "INSERT INTO users (username, email, password) VALUES (:$this->user, :$this->email, :$this->password)";
        $createUser = $this->connection->connect()->prepare($sql);
        $createUser->execute();
    }
}