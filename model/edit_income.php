<?php

include_once 'queries.php';

class EditIncome{
    private $table = 'types_incomes';
    private $query;

    function __construct($dataIncome){
        $this->dataIncome = $dataIncome;
        $this->query = new Queries($this->table);
    }

    public function returnDataIncome(){
        $row = $this->query;
        $arrayIncome = ["column"=>"id_income",
                    "value"=>$this->dataIncome['id_income']
        ];

        $rtaDataIncome = $row->searchRowSimple($arrayIncome);

        return $rtaDataIncome;
    }

    public function returnRespounse(){
        $rtaRowIncome = $this->callRowIfExist();
        if($rtaRowIncome){
            if($rtaRowIncome[0]['type_income'] != $this->dataIncome['type_income'] && $rtaRowIncome[0]['id_income'] == $this->dataIncome['id_income']){
                if(empty($this->updateDataIncome())){
                    return false;
                }else{
                    return true;
                }
            }else{
                return false;
            }
        }else{
            if(empty($this->updateDataIncome())){
                return false;
            }else{
                return true;
            }
        }
    }

    private function callRowIfExist(){

        $arrayDataIncome = [
            "columnOne"=>"description_income",
            "valueOne"=>$this->dataIncome['description_income'],
            "columnTwo"=>"user_id",
            "valueTwo"=>$this->dataIncome['user_id']
        ];

        $row = $this->query;
        $respounseCallRowIfExist = $row->serachDataWithAnd($arrayDataIncome);

        return $respounseCallRowIfExist;

    }

    private function updateDataIncome(){

        $where = "`id_income`= {$this->dataIncome['id_income']}";
        $dataIncome = [
            "description_income"=> "{$this->dataIncome['description_income']}",
            "type_income" =>"{$this->dataIncome['type_income']}"
        ];
        $row = $this->query;
        $respounseUpdate = $row->updateData($dataIncome, $where);

        return $respounseUpdate;
    }
}