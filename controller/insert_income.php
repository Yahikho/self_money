<?php

include_once '../model/insert_incomeModel.php';

$typeIncome = $_POST['type_income'];
$descriptionTypeIncome = $_POST['description_income'];

$dataIncome = [
    "description_income" => $descriptionTypeIncome
];


if(!empty($typeIncome) || !empty($descriptionTypeIncome)){

    $insertIncomeModel = new insertIncomeModel($dataIncome);
    $respounse = $insertIncomeModel->returnRespounseInsert();

    if($respounse){

        echo json_encode(array("respounse"=>"success"));

    }else{
        
        echo json_encode(array("respounse"=>"failed"));

    }

}else{

    echo json_encode(array("respounse"=>"dataNull"));

}