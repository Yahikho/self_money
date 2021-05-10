<?php

include_once 'queries.php';

class Home{
    function __construct($data){
        $this->data = $data;
    }
    
    public function repounse(){
        return $this->callRowIfExist();
    }

    private function callRowIfExist(){
        $arrayData = [
            "column"=>"user_id",
            "value"=>$this->data['user_id']
        ];
        if($this->data['type_value'] == 'incomes'){
            $query = (new Queries('types_incomes'))->searchRowSimple($arrayData);
            $repounseQuery = $query;
            return $repounseQuery;
        }else{
            $query = (new Queries('types_costs'))->searchRowSimple($arrayData);
            $repounseQuery = $query;
            return $repounseQuery;
        }
    }
}