<?php

include_once '../model/insert_costModel.php';

$typeCost = $_POST['type_cost'];
$descriptionTypeCost = $_POST['description_cost'];

$idTypeDelete = file_get_contents('php://input');

$dataIncome = [
    "description_cost" => $descriptionTypeCost,
    "type_cost" => $typeCost
];

if(empty($idTypeDelete)){

    if(empty($typeCost) || empty($descriptionTypeCost)){

        echo json_encode(array("respounse"=>"empty"));
    
    }else{
    
        $insertCostModel = new insertCostModel($dataIncome);
        $respounse = $insertCostModel->returnRespounseInsert();
    
        if($respounse){
    
            echo json_encode(array("respounse"=>"success"));
    
        }else{
            
            echo json_encode(array("respounse"=>"failed"));
    
        }
    
    }

}else{

    include_once '../model/queries.php';

    $infoDelete = ["column"=>"id_cost",
                    "value"=> $idTypeDelete
                ];

    $queries = new Queries('types_costs');
    $funDelete = $queries->deleteData($infoDelete);

    if($funDelete){

        echo "deleted";
    }

}