<?php

require_once 'config_db.php';

class Connection{

    private $schema;
    private $host;
    private $user;
    private $password;
    private $dataBase;
    private $char;

    private $connection;

    public function __construct(){
       
         $this->schema   = SCHEMA;
         $this->host     = HOST;
         $this->user     = USER;
         $this->password = PASSWORD ;
         $this->dataBase = DATABASE;
         $this->char     = CHART;
    
         $this->connection;
        
    }

    function connect(){
        try{

            $this->connection = new PDO("$this->schema:host=".$this->host.";"."dbname=".
            $this->dataBase,$this->user,$this->password);
            
            return $this->connection;
    
        }catch(Exception $e){
    
            print_r('Error connection, '. $e->getMessage());
            die();
    
        } 
    }

}