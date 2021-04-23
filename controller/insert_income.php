<?php

include_once '../model/insert_incomeModel.php';

$typeIncome = $_POST['type_income'];
$descriptionTypeIncome = $_POST['description_income'];

$dataIncome = [
    "description_income" => $descriptionTypeIncome
];

$insertIncomeModel = new insertIncomeModel($dataIncome);

$respounse = $insertIncomeModel->returnRespounseInsert();

echo json_encode(array($respounse));