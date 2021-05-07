<?php

include_once 'queries.php';

class EditCost{
    private $table = 'types_costs';
    private $query;

    function __construct($dataCost){
        $this->dataCost = $dataCost;
        $this->query = new Queries($this->table);
    }

    public function returnDataCost(){
        $row = $this->query;
        $arrayCost = ["column"=>"id_cost",
                    "value"=>$this->dataCost['id_cost']
        ];

        $rtaDataCost = $row->searchRowSimple($arrayCost);

        return $rtaDataCost;
    }

    public function returnRespounse(){
        $rtaRowCost = $this->callRowIfExist();
        if($rtaRowCost){
            if($rtaRowCost[0]['type_cost'] != $this->dataCost['type_cost'] && $rtaRowCost[0]['id_cost'] == $this->rtaRowCost['id_cost']){
                if(empty($this->updateDataCost())){
                    return false;
                }else{
                    return true;
                }
            }else{
                return false;
            }
        }else{
            if(empty($this->updateDataCost())){
                return false;
            }else{
                return true;
            }
        }
    }

    private function callRowIfExist(){

        $arrayDataCost = [
            "columnOne"=>"description_cost",
            "valueOne"=>$this->dataCost['description_cost'],
            "columnTwo"=>"user_id",
            "valueTwo"=>$this->dataCost['user_id']
        ];

        $row = $this->query;
        $respounseCallRowIfExist = $row->serachDataWithAnd($arrayDataCost);

        return $respounseCallRowIfExist;

    }

    private function updateDataCost(){

        $where = "`id_cost`= {$this->dataCost['id_cost']}";
        $dataCost = [
            "description_cost"=> "{$this->dataCost['description_cost']}",
            "type_cost" =>"{$this->dataCost['type_cost']}"
        ];
        $row = $this->query;
        $respounseUpdate = $row->updateData($dataCost, $where);

        return $respounseUpdate;
    }
}