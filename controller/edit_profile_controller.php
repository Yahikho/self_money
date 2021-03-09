<?php

session_start();

$userName = $_SESSION['user_name'];

$newUserName = $_POST['new_user_name'];
$userPassword = $_POST['user_password'];
$newUserPassword = $_POST['new_user_password'];





echo json_encode(array("response"=>"success"));
