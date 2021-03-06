<?php

include_once '../includes/connection_db.php';
class Queries{

    private $connection;
    private $sqlQuery = null;
    private $table;

    function __construct($table){

        $this->connection = (new Connection())->connect();
        $this->table = $table;

    }

//Busca dentro la base de datos filas que contenga un valor(x) con son una condicion //no tien and ni <> ni or
//Para wheres simples: SELECT * FROM table1 WHERE id = 1;
//values es la condicion, en este ejemplo anterior seria 'id'

    public function searchRowSimple($arrayData){

        $sql = "SELECT * FROM {$this->table} WHERE {$arrayData['column']} = '{$arrayData['value']}'";
        $sth = $this->connection->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_OBJ);

    }

    public function insertDatos($arrayData){

        $columns = implode("`, `", array_keys($arrayData));
        $values = ":".implode(", :", array_keys($arrayData));
        $this->sqlQuery = "INSERT INTO {$this->table} (`{$columns}`) VALUES ({$values})";
        $this->executeQuery($arrayData);
        return $this->connection->lastInsertId();
      
    }

    private function executeQuery($arrayData){

        $sth = $this->connection->prepare($this->sqlQuery);

        foreach($arrayData as $key => &$value){
            if(empty($value)){
                $value = null;
            }
            $sth->bindParam(":$key", $value);
        }

        $sth->execute();
        $this->clearSqlQuery();
        return $sth->rowCount();
    }

    private function clearSqlQuery(){

        $this->sqlQuery = null;

    }

}