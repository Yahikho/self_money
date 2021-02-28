<?php

include_once 'queries.php';

class SignUpMoldel  extends Queries{

    private $table = 'users';
    private $query;
    

    function __construct($dataUser){
        
        $this->dataUser = $dataUser;
        $this->query = new Queries($this->table);
           
    }

    public function returnRespounse(){

        if(empty($this->callRowIfExist())){
            if(empty($this->insertUser())){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    
    }

    private function callRowIfExist(){

        $arrayDataUsers = [
            "column"=>"user_name",
            "value"=>$this->dataUser['user_name']
        ];

        $row = $this->query;
        $respounseCallRowIfExist = $row->searchRowSimple($arrayDataUsers);

        return $respounseCallRowIfExist;

    }

    private function insertUser(){

        $insertUser = $this->query;
        $insertUser->insertDatos($this->dataUser);

    }



}