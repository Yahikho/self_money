<?php
include_once '../model/sign_upModel.php';

$userName = $_POST['user_name'];
$userPassword = $_POST['user_password'];

$dataUsers = [
    "user_name"=> $userName,
    "user_password" => md5($userPassword)
];


if(!empty($userName) || !empty($userPassword)){

    if(strlen($userName) > 20 || strlen($userPassword) > 20){

        echo json_encode(array("respounse"=>"dataTypeLong"));

    }else{

        if(substr_count($userName, '.') != 1 || strripos($userName,'.') < 3 || substr($userName, -1) == '.'){

            echo json_encode(array("respounse"=>"problemPoints"));

        }else{

            $dataOnlyLetters = str_replace('.','',$userName);


            if(!ctype_alpha($dataOnlyLetters)){

                echo json_encode(array("respounse"=>"noLetters"));

            }else{

                $signUpModel = new SignUpMoldel($dataUsers);
                $respounse = $signUpModel->returnRespounse();

                if($respounse){

                    echo json_encode(array("respounse"=>"success"));

                }else{

                    echo json_encode(array("respounse"=>"failed"));

                }

            }

        }

    }

}else{

    echo json_encode(array("respounse"=>"dataNull"));

}

