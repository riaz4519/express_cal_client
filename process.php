
<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'crs_mobile';

$connect = new mysqli($host,$user,$pass,$db);




?>


<?php

if (isset($_POST['students'])){

    $ans = $_POST['students'];
    $column = '';
    $value = '';
    for ($i=0;$i<=32;$i++){



        if ($i==32){
            $column .= $ans[$i][0];
            $value .= "'".$ans[$i][1]."'";
        }
        else{

            $column .= $ans[$i][0].',';
            $value .= "'".$ans[$i][1]."'".',';
        }


    }



    $query = "INSERT INTO client_info ($column)VALUES ($value)";

    if ($connect->query($query)){

        echo 'you points have been sent to your phone & email';

    }else{
        echo 'wrong';
    }


}

?>

