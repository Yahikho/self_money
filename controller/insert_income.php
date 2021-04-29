<?php

session_start();

include_once '../model/insert_incomeModel.php';

$userId = (int)$_SESSION['user_id'];

$typeIncome = $_POST['type_income'];
$descriptionTypeIncome = $_POST['description_income'];

$idTypeDelete = file_get_contents('php://input');

$dataIncome = [
    "description_income" => $descriptionTypeIncome,
    "type_income" => $typeIncome,
    "user_id" => $userId
];

if(empty($idTypeDelete)){
    
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

}else{

    include_once '../model/queries.php';

    $infoDelete = ["column"=>"id_income",
                    "value"=> $idTypeDelete
                ];

    $queries = new Queries('types_incomes');
    $funDelete = $queries->deleteData($infoDelete);

    if($funDelete){

        echo "deleted";
    }
}