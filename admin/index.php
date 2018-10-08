<?php
session_start();



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>



<div class="container">

    <?php include 'admin_nav.php'; ?>



    <br>

    <div class="table-search row">


        <div class="input-group col">
            <div class="input-group-prepend">
                <span class="input-group-text " id="basic-addon1">Start</span>
            </div>
            <input type="date"  class="start-date form-control">
        </div>

        <div class="input-group  col">
            <div class="input-group-prepend">
                <span class="input-group-text " id="basic-addon1">End</span>
            </div>
            <input type="date" class="end-date form-control">
        </div>
        <div class="input-group input-group  col">

            <input type="button" class="form-control btn btn-info get-data-button" value="GET DATA">
        </div>




    </div>
    <br>


    <div class="table-for-result ">


        <table class="table table-bordered" id="ibody">

            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">File</th>
                <th scope="col" class="text-center">Download</th>
                <th scope="col" class="text-center">Delete</th>
            </tr>
            </thead>
            <tbody >

            <?php

            $dir = 'csv/';
            $files = scandir($dir,1);

            ?>

            <?php

            for ($i=0;$i<count($files)-2;$i++){

                ?>

                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td><?php echo  $files[$i]; ?></td>
                    <td class="text-center"><a href="csv/<?php echo $files[$i];?>" download="" class="btn btn-success">Download</a></td>
                    <td class="text-center"><button  class="btn btn-danger btn-delete" value="<?php echo $files[$i]; ?>">Delete</button></td>
                </tr>


                <?php
            }

            ?>


            </tbody>
        </table>

    </div>

</div>




<script src="../bootstrap/js/jquery.js"></script>

<!--jquery end-->
<script src="../bootstrap/js/bootstrap.min.js"></script>

<script>

    $(document).ready(function () {

        $('.get-data-button').on('click',function () {

            var start_date = $('.start-date').val();
            var end_date = $('.end-date').val();

            var data = [];

            data[0] = start_date;
            data[1] = end_date;



            if (start_date.length > 0 && end_date.length >0){
                $.ajax({
                    type: "POST",
                    url: 'csv.php',
                    data: {query :data},
                    cache: false,
                    success: function(result){


                        location.reload();

                    }
                });


            }









        });

        $('.btn-delete').on('click',function () {

            var delete_value = $(this).val();

            $.ajax({
                type: "POST",
                url: 'csv.php',
                data: {delete :delete_value},
                cache: false,
                success: function(result){
                    location.reload();


                }
            });

        });



    });

</script>
</body>
</html>