<?php
include_once '../model/sign_inModel.php';

$userName = $_POST['user_name'];
$userPassword = $_POST['user_password'];

$dataUser = [
            "user_name"=>$userName, 
            "user_password"=>md5($userPassword)
            ];


$signInModel = new SignInMoldel($dataUser);

$respouse = $signInModel->getDataUser();

if(empty($respouse)){

    echo json_encode(array("respounse"=>"failed"));

}else{

    $userId = $respouse[0]["user_id"];
    session_start();
    $_SESSION['user_id'] = $userId;
    $_SESSION['user_name'] = $userName;
    echo json_encode(array("respounse"=>"success"));

}
