<?php
include_once '../model/queries.php';

$respounse = new Queries('types_costs');
$rta = $respounse->listData();


foreach($rta as $data){
    echo "<tr>
            <td>". $data['description_cost']. "</td>
            <td>". $data['type_cost']. "</td>
            <td> 
              <button type='button' class='btnDeleteType' onclick=deleteTypeCost('". $data['id_cost']."')>Delete</button<</td>
              <button type='button' class='btnDeleteType' onclick=updateTypeCost('". $data['id_cost']."')>Update</button<</td>
          </tr>  
    ";
}


//echo json_encode($rta);
