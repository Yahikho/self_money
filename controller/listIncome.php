<?php
include_once '../model/queries.php';

session_start();
$userId = $_SESSION['user_id'];

$respounse = new Queries('types_incomes');

$dataSerarch = [
    "column"=> "user_id",
    "value" => $userId
];

$rta = $respounse->searchRowSimple($dataSerarch);

foreach($rta as $data){
    echo "<tr>
            <td>". $data['description_income']. "</td>
            <td>". $data['type_income']. "</td>
            <td> 
                <button  type='button' class='btnTypes' onclick=deleteTypeIncome('". $data['id_income']."')>Delete</button>
                <button  type='button' class='btnTypes' onclick=updateTypeIncome('". $data['id_income']."')>Edit</button>
            </tr>
    ";
}

//echo json_encode($rta);
