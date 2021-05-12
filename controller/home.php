<?php
include_once '../model/home.php';
session_start();
$userId = $_SESSION['user_id'];
$typeValue = file_get_contents('php://input');

if($typeValue){

    $dataValueToSearch = ["user_id"=>$userId,"type_value"=>$typeValue];

     $modelHome = new Home($dataValueToSearch);
     $listData = $modelHome->repounse();
     if($typeValue == 'incomes'){
        foreach($listData as $data){
            echo "<option value=".$data['id_income'].">".$data['description_income']." - ".$data['type_income']."</option>";
        }
     }else{
        foreach($listData as $data){
            echo "<option value=".$data['id_cost'].">".$data['description_cost']." - ".$data['type_cost']."</option>";
        }
     }
}else{

    if(isset($_POST['txtValue']) && isset($_POST['type_value']) && isset($_POST['select_type']) && isset($_POST['record_date']) && isset($_POST['record_time'])){
        
        if(is_numeric($_POST['txtValue']) && $_POST['txtValue'] > 0){
            $txtValue = $_POST['txtValue'];
            $type_value = $_POST['type_value'];
            $select_type = $_POST['select_type'];
            $record_date = $_POST['record_date']." ".$_POST['record_time'];

            $dataValuesIncome = [
                "value"=>$txtValue,
                "id_type"=>$select_type,
                "record_date"=>$record_date,
                "type_value"=>$type_value
            ];

            $insertValues = new Home($dataValuesIncome);
            $res = $insertValues->insertValues();
            if($res){
                echo json_encode(array('respouse'=>'success'));
            }else{
                echo json_encode(array('respouse'=>'Failed'));
            }
        }else{
            echo json_encode(array('respouse'=>'not_numeric'));
        }
        
    }else{
        echo json_encode(array('respouse'=>'inputs_empty'));
    }
}

