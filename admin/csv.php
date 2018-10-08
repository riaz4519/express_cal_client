<?php include '../connect.php'?>



<?php


if (isset($_POST['query'])){

    $date = $_POST['query'];

   export($connect,$date[0],$date[1]);
}
if (isset($_POST['delete'])){

    delete($_POST['delete']);

}



?>


<?php



     function export($connect,$start_date,$end_date){

        $query = "SELECT * from client_info WHERE date BETWEEN '$start_date' AND '$end_date'";

        $run = $connect->query($query);
        if ($run->num_rows > 0){

           $fineName = 'csv/csv_('.$start_date.')-('.$end_date.')-'.date('h - i - sa').".csv";
           $fileWrite = fopen($fineName,'w');

           $array_column = ['id','email','phone','ip','marital_status','age_value ','education_value','ielts_status',
           'ielts_value_listening','ielts_value_reading','ielts_value_writing','ielts_value_speaking','tef_status',
           'tef_value_listening','tef_value_reading','tef_value_writing','tef_value_speaking','work_canada','work_foreign',
           'canadian_trade','spouse_edu','spouse_work','spouse_ielts_status','spouse_ielts_listening','spouse_ielts_reading',
           'spouse_ielts_writing','spouse_ielts_speaking','language_edu','canada_work_ex_edu_level','language_foreign_ex',
           'canada_foreign_ex','trade_status','language_trade','pro_nomination','offer_of_employment','canadian_education',
           'siblings_canada','total_sum','city','name','name'];

           fputcsv($fileWrite,$array_column);

           while ($row = $run->fetch_array(MYSQLI_NUM)){
               if (fputcsv($fileWrite,$row)){

               }
           }
           fclose($fileWrite);


        }else{
            echo 'none';
        }



    }

    function delete($delete){

         unlink('csv/'.$delete);

    }





    ?>

