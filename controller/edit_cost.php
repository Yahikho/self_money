<?php

include_once '../model/edit_cost.php';
session_start();
$userId = $_SESSION['user_id'];

$idCost = file_get_contents('php://input');

if(!empty($idCost)){

    $dataCost = ["id_cost"=>$idCost];
    $editCostModel = new EditCost($dataCost);
    $getDataCostToId = $editCostModel->returnDataCost();
    echo json_encode($getDataCostToId);

}else{

    $editCost = [
        "id_cost"=>$_POST['id_cost'],
        "description_cost"=>$_POST['edit_description_cost'],
        "type_cost"=>$_POST['edit_type_cost'],
        "user_id"=>$userId
    ];

    $changeDataCost = new EditCost($editCost);
    $getRespouseEditCost = $changeDataCost->returnRespounse();

    if($getRespouseEditCost){
        echo json_encode(array('respounse'=>'success'));
    }else{
        echo json_encode(array('respounse'=>'failed'));
    }
    
}

