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

        $arrayDataCost = [
            "columnOne"=>"user_id",
            "valueOne"=>$this->dataIncome['user_id'],
            "columnTwo"=>"description_cost",
            "valueTwo"=>$this->dataIncome['description_cost']
        ];

        $row = $this->query;
        $respounseCallRowIfExist = $row->serachDataWithAnd($arrayDataCost);
        return $respounseCallRowIfExist;

    }

    private function insertCost(){

        $insertUser = $this->query;
        $insertUser->insertDatos($this->dataIncome);

    }
}