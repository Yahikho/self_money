<?php

include_once '../model/edit_cost.php';

$idCost = file_get_contents('php://input');


$dataCost = ["id_cost"=>$idCost];

$editCostModel = new EditCost($dataCost);

$getDataCostToId = $editCostModel->returnDataCost();

echo json_encode($getDataCostToId);
