<?php
include_once '../model/queries.php';

session_start();
$userId = $_SESSION['user_id'];

$respounse = new Queries('types_costs');

$dataSerarch = [
    "column"=> "user_id",
    "value" => $userId
];

$rta = $respounse->searchRowSimple($dataSerarch);


foreach($rta as $data){
    echo "<tr>
            <td>".$data['description_cost']."</td>
            <td>". $data['type_cost']."</td>
            <td> 
              <button type='button' class='btnDeleteType' onclick=deleteTypeCost('". $data['id_cost']."')>Delete</button>
              <button type='button' class='btnDeleteType' onclick=updateTypeCost('".$data['id_cost']."')>Edit</button>
            </td>
          </tr>  
    ";
}

//<td>". $data['description_cost']. "</td>

//echo json_encode($rta);
