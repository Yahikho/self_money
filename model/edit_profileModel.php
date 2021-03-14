<?php

include_once 'queries.php';

class EditProfileModel extends Queries{

    private $table = 'users';
    private $query;

    function __construct($dataUser){

        $this->dataUser = $dataUser;
        $this->query = new Queries($this->table);

    }

    public function callRowUserNewUser(){

        $arrayDataUser = [
            "column"=>"user_name",
            "value"=>$this->dataUser['new_user_name']
        ];
        $row = $this->query;
        $respounseCallRowIfExist = $row->searchRowSimple($arrayDataUser);
        
        return $respounseCallRowIfExist;
    }

    public function callRowUserPassword(){

        $arrayDataUser = [
            "column"=>"user_name",
            "value"=>$this->dataUser['user_name']
        ];
        $row = $this->query;
        $respounseCallRowIfExist = $row->searchRowSimple($arrayDataUser);
        
        return $respounseCallRowIfExist;
    }

    public function updateUser($idUser){

        $where = "`user_id`= {$idUser}";
        $dataUser = [
            "user_name"=> "{$this->dataUser['new_user_name']}",
            "user_password" =>"{$this->dataUser['new_user_password']}"
        ];
        $row = $this->query;
        $respounseUpdate = $row->updateData($dataUser, $where);

        return $respounseUpdate;
    }
}