<?php

include_once '../model/edit_profileModel.php';

session_start();
$userName = $_SESSION['user_name'];

$newUserName = $_POST['new_user_name'];
$userPassword = $_POST['user_password'];
$newUserPassword = $_POST['new_user_password'];


$dataUser = [
    "user_name" => $userName,
    "new_user_name" => $newUserName,
    "user_password" => $userPassword,
    "new_user_password" => md5($newUserPassword)
];

$editProfileModel = new EditProfileModel($dataUser);

$respouseUserExist = $editProfileModel->callRowUserNewUser();
$respousePassword = $editProfileModel->callRowUserPassword();


if(!empty($newUserName || !empty($newUserPassword)) || !empty($userPassword)){

    if($newUserName == $userName || empty($respouseUserExist)){

        if(strlen($newUserName) > 20 && strlen($newUserPassword > 20)){
    
            echo json_encode(array("respounse"=>"dataTypeLong"));

        }else{

            if(substr_count($newUserName, '.') != 1 || strripos($newUserName,'.') < 3 || substr($newUserName, -1) == '.'){

                echo json_encode(array("respounse"=>"problemPoints"));

            }else{

                $dataOnlyLetters = str_replace('.','',$newUserName);

                if(!ctype_alpha($dataOnlyLetters)){

                    echo json_encode(array("respounse"=>"noLetters"));

                }else{

                    if(md5($userPassword) == $respousePassword[0]['user_password']){

                        $respouseUpdateUser = $editProfileModel->updateUser($respousePassword[0]['user_id']);

                        if(!empty($respouseUpdateUser)){

                            echo json_encode(array("respounse"=>"success"));
                            unset($_SESSION['user_name']);

                        }else{

                            echo json_encode(array("respounse"=>"failed"));

                        }

                    }else{

                        echo json_encode(array("respounse"=>"passwordError"));

                    }

                }

            }

        }
    
    }else{
    
        echo json_encode(array("respounse"=>"userExist")); 
    
    }

}else{

    echo json_encode(array("respounse"=>"dataNull"));

}
