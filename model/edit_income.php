<?php

include_once 'queries.php';

class EditIncome{
    private $table = 'types_incomes';
    private $query;

    function __construct($dataCost){
        $this->dataCost = $dataCost;
        $this->query = new Queries($this->table);
    }

    public function returnDataIncome(){
        $row = $this->query;
        $arrayCost = ["column"=>"id_income",
                    "value"=>$this->dataCost['id_income']
        ];

        $rtaDataCost = $row->searchRowSimple($arrayCost);

        return $rtaDataCost;
    }
}