<?php
include_once '../model/queries.php';

$respounse = new Queries('types_incomes');
$rta = $respounse->listData();


foreach($rta as $data){
    echo "<tr>
            <td>". $data['description_income']. "</td>
            <td>". $data['type_income']. "</td>
            <td> 
                <button  type='button' class='btnDeleteType' onclick=deleteTypeIncome('". $data['id_income']."')>Delete</button>
                <button  type='button' class='btnDeleteType' onclick=updateTypeIncome('". $data['id_income']."')>Update</button>
            </tr>
    ";
}

//echo json_encode($rta);
