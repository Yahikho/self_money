<?php

include_once '../model/edit_income.php';

$idIncome = file_get_contents('php://input');


$dataIncome = ["id_income"=>$idIncome];

$editIncomeModel = new EditIncome($dataIncome);

$getDataIncomeToId = $editIncomeModel->returnDataIncome();

echo json_encode($getDataIncomeToId);
