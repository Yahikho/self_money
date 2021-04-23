<?php
include_once 'queries.php';

class insertIncomeModel {
    private $table = 'types_incomes';
    private $query;

    function __construct($dataIncome){
        $this->dataIncome = $dataIncome;
        $this->query = new Queries($this->table);
    }

    public function returnRespounseInsert(){

        if(empty($this->callRowIfExist())){
            if(empty($this->insertIncome())){
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
            "column"=>"description_income",
            "value"=>$this->dataIncome['description_income']
        ];

        $row = $this->query;
        $respounseCallRowIfExist = $row->searchRowSimple($arrayDataUsers);

        return $respounseCallRowIfExist;

    }

    private function insertIncome(){

        $insertUser = $this->query;
        $insertUser->insertDatos($this->dataIncome);

    }
}