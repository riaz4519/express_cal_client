<?php

include "connect.php";

?>


<?php


if (isset($_POST['total_sum'])){

    $total_sum = $_POST['total_sum'];

    $query = "SELECT * FROM client_info";

    if ($connect->query($query)->num_rows > 0){
       $total_people = $connect->query($query)->num_rows;

       $query_people_under = "SELECT id from client_info WHERE total_sum <='$total_sum'";

       if ($connect->query($query_people_under)->num_rows > 0){

          $total_under = $connect->query($query_people_under)->num_rows;

         echo better_then_people_calculation($total_people,$total_under);


       }
    }



}

function better_then_people_calculation($total_people,$total_under){


    return ceil(($total_under * 100) / $total_people);



}



?>

