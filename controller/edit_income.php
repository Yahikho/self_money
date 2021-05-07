<?php

include_once '../model/edit_income.php';

session_start();
$userId = $_SESSION['user_id'];

$idIncome = file_get_contents('php://input');


if(!empty($idIncome)){

    $dataIncome = ["id_income"=>$idIncome];
    $editIncomeModel = new EditIncome($dataIncome);
    $getDataIncomeToId = $editIncomeModel->returnDataIncome();
    echo json_encode($getDataIncomeToId);

}else{

    $editIncome = [
        "id_income"=>$_POST['id_income'],
        "description_income"=>$_POST['edit_description_income'],
        "type_income"=>$_POST['edit_type_income'],
        "user_id"=>$userId
    ];

    $changeDataIncome = new EditIncome($editIncome);
    $getRespouseEditIncome = $changeDataIncome->returnRespounse();

    if($getRespouseEditIncome){
        echo json_encode(array('respounse'=>'success'));
    }else{
        echo json_encode(array('respounse'=>'failed'));
    }
    
}

