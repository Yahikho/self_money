<?php
include_once '../../model/sign_inModel.php';

$userName = $_POST['user_name'];
$userPassword = $_POST['user_password'];

$dataUser = [
            "user_name"=>$userName, 
            "user_password"=>md5($userPassword)
            ];


$signInModel = new SignInMoldel($dataUser);

$respouse = $signInModel->getDataUser();
$userId = $respouse[0]["user_id"];

if(empty($respouse)){
    echo json_encode(array("respounse"=>"failed"));
}else{
    session_start();

    $_SESSION['user_id'] = $userId;
    $_SESSION['user_name'] = $userName;
    echo json_encode(array("respounse"=>"success"));

}
