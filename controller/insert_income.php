<?php

include_once '../model/insert_incomeModel.php';

$typeIncome = $_POST['type_income'];
$descriptionTypeIncome = $_POST['description_income'];

$dataIncome = [
    "description_income" => $descriptionTypeIncome,
    "type_income" => $typeIncome
];

if(empty($typeIncome) || empty($descriptionTypeIncome)){

    echo json_encode(array("respounse"=>"empty"));

}else{

    $insertIncomeModel = new insertIncomeModel($dataIncome);
    $respounse = $insertIncomeModel->returnRespounseInsert();

    if($respounse){

        echo json_encode(array("respounse"=>"success"));

    }else{
        
        echo json_encode(array("respounse"=>"failed"));

    }

}