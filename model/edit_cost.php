<?php

include_once 'queries.php';

class editCost{
    private $table;
    private $connection;

    function __construct($dataUser){
        
        $this->dataUser = $dataUser;
        $this->connection = new Connection();
        $this->table = "users";
    }
}