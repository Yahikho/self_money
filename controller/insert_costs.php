<?php

include_once '../model/insert_costModel.php';

$typeCost = $_POST['type_cost'];
$descriptionTypeCost = $_POST['description_cost'];

$dataIncome = [
    "description_cost" => $descriptionTypeCost,
    "type_cost" => $typeCost
];

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