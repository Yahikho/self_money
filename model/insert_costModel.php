<?php
include_once 'queries.php';

class insertCostModel {
    private $table = 'types_costs';
    private $query;

    function __construct($dataCosts){
        $this->dataIncome = $dataCosts;
        $this->query = new Queries($this->table);
    }


    public function returnRespounseInsert(){

        if(empty($this->callRowIfExist())){
            if(empty($this->insertCost())){
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
            "column"=>"description_cost",
            "value"=>$this->dataIncome['description_cost']
        ];

        $row = $this->query;
        $respounseCallRowIfExist = $row->searchRowSimple($arrayDataUsers);

        return $respounseCallRowIfExist;

    }

    private function insertCost(){

        $insertUser = $this->query;
        $insertUser->insertDatos($this->dataIncome);

    }
}