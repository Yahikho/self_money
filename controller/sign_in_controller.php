<?php

include_once '../model/sign_inModel.php';
//include_once '../includes/connection_db.php';

$userName = $_POST['userName'];
$userPassword = $_POST['userPassword'];


$signInModel = new SignInMoldel($userName, $userPassword);
$signInModel->getDataUser();

print_r( $signInModel);

if(!empty($signInModel)){
    echo json_encode($signInModel);
}else{
    echo json_encode(array("response"=>"failed"));
}
