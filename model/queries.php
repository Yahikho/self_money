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
        $this->clearSqlQuery();
        return $sth->fetchAll(PDO::FETCH_ASSOC);

    }

    public function insertDatos($arrayData){

        $columns = implode("`, `", array_keys($arrayData));
        $values = ":".implode(", :", array_keys($arrayData));
        $this->sqlQuery = "INSERT INTO {$this->table} (`{$columns}`) VALUES ({$values})";
        $this->executeQuery($arrayData);
        return $this->connection->lastInsertId();
      
    }

    public function updateData($arrayData, $where){
        $cells = '';
        foreach($arrayData as $key => $value){
            $cells .= "`$key`=:$key,";
        }   
        $cells = rtrim($cells, ',');

        $this->sqlQuery = "UPDATE {$this->table} SET {$cells} WHERE {$where}";

        //return $this->sqlQuery;

        return $this->executeQuery($arrayData);

    }



    private function clearSqlQuery(){

        $this->sqlQuery = null;

    }

    public function listData(){
        $sql = "SELECT * FROM `{$this->table}`";
        $sth = $this->connection->prepare($sql);
        $sth->execute();
        $this->clearSqlQuery();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteData($infoDelete){

        $this->sqlQuery = "DELETE FROM {$this->table} WHERE {$infoDelete['column']} = {$infoDelete['value']}";
        $rows = $this->executeQuery();
        return $rows;
        // $sql = "DELETE FROM {$this->table} WHERE {$infoDelete['column']} = {$infoDelete['value']}";
        // return $sql;

    }

    private function executeQuery($arrayData = null){

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
}