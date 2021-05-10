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
}
