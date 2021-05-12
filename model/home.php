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

    public function insertValues(){

        if($this->data['type_value'] == 'incomes'){
            $query = new Queries('values_incomes');
            $inserValuesIncomes = [
                "value_income"=>$this->data['value'],
                "id_income"=>$this->data['id_type'],
                "value_income_record_date"=>$this->data['record_date']
            ];

            $res = $query->insertDatos($inserValuesIncomes);

            return $res;

        }else{
            $query = new Queries('values_costs');
            $inserValuesCost = [
                "value_cost"=>$this->data['value'],
                "id_cost"=>$this->data['id_type'],
                "value_cost_record_date"=>$this->data['record_date']
            ];

            $res = $query->insertDatos($inserValuesCost);

            return $res;
        }
    }
}