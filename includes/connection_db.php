<?php

require_once 'config_db.php';

class Connection{

    private $schema   = SCHEMA;
    private $host     = HOST;
    private $user     = USER;
    private $password = PASSWORD ;
    private $dataBase = DATABASE;
    private $char     = CHART;

    private $connection;

    public function __construct(){
       
    try{

        $this->connection = new PDO("$this->schema:host=".$this->host.";"."dbname=".$this->dataBase,$this->user,$this->password);
        return $this->connection;
        // if($this->connection){
        //     print_r('Success');
        // }else{
        //     print_r('Failed');
        // }

    }catch(Exception $e){

        print_r('Error connection, '. $e->getMessage());
        die();

    }      
        
    }

}