<?php

include_once '../includes/connection_db.php';

class SignInMoldel  {

    private $table;
    private $connection;
    

    function __construct($dataUser){
        
        $this->dataUser = $dataUser;
        $this->connection = new Connection();
        $this->table = "users";
           
    }


    public function getDataUser(){

    
        $sql = "SELECT * FROM {$this->table} WHERE user_name = :user_name AND user_password = :user_password;";
        $sth = $this->connection->connect()->prepare($sql);

        foreach($this->dataUser as $key => &$value){
            $sth->bindParam(":$key", $value);
        }

        // $sth->bindParam(':username',$this->dataUser['username'], PDO::PARAM_STR);
        // $sth->bindParam(':userpassword',$this->dataUser['password'], PDO::PARAM_STR);

        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }



}