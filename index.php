<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        // -ms-overflow-style: scrollbar;
        // -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }


        input[type='radio']{

        }
        .background-yellow{
            background: #FEEF1C;
        }
        .btn-group .btn{
            border-radius: 0px;
        }
        .btn-group .btn:hover{
            background: #FEEF1C;
            color: #000;
        }
        label{

        }
        .grey-background{
            background: #F3F3F3;
        }
        .married-div{
            padding-bottom: 20px;




        }
        .married-div label{

        }
        .col-6{
            border: 1px; solid black;
        }


        /*range slider*/

        .slidecontainer {
            width: 100%;
        }

        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;

            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            background: #FEEF1C;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #FEEF1C;
            cursor: pointer;
            border-radius: 0px;
        }
        input[type=range]::-moz-range-track {
            width: 90%;
            height: 15px;
            cursor: pointer;

            background: #CDCDCD;
            border-radius: 1.3px;

        }
        .padding-top-bottom{
            padding: 20px 0px;
        }



        /**/

        .title-margin{
            margin-bottom: 10px;
        }




    </style>
</head>
<body>


<div class="container">


    <div class="row justify-content-center">

        <div class="col-sm-6 ">

            <!--start of marrital status-->

            <div class="row grey-background justify-content-center">


            <div class="married-div ">

                <div class="text-center married-status-text title-margin">
                    <span ><b>Marrital Status </b></span>
                </div>

                <div class="row justify-content-center">
                    <div class="btn-group">

                        <div class="btn btn-outline-secondary text-center married-div-1">
                            <input type="radio" id="r1" name="married" value="fsdf" class="married"  style="display: none"  />
                            <label for="r1" class="">SINGLE</label>

                        </div>

                        <div class="btn btn-outline-secondary text-center married-div-1">
                            <input type="radio" id="r2" name="married" class="married"  style="display: none"  />
                            <label for="r2">MARRIED</label>
                        </div>
                        <div class="btn btn-outline-secondary text-center married-div-1">
                            <input type="radio" id="r3" name="married" class="married"  style="display: none"  />
                            <label for="r3">SEPARATED</label>
                        </div>



                    </div>

                </div>



            </div>

            </div>

            <!--age area-->

            <div class="row justify-content-center padding-top-bottom age-div " style="border: 1px solid firebrick">


                <div class="row">

                    <div class=" col-12 text-center married-status-text title-margin">
                        <span class=""><b>AGE</b></span>
                    </div>

                </div>


                <div class="col-12">
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </div>

            </div>

            <!--end age arae-->

            <div class="row justify-content-center padding-top-bottom grey-background education-div" style="border: 1px solid firebrick">


                <div class="row">

                    <div class=" col-12 text-center married-status-text title-margin">
                        <span class="title-margin"><b>Years Of Education </b></span>
                    </div>

                </div>


                <div class="col-12">
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                </div>

            </div>

        </div>




    </div>






</div>


<!--jquery start-->

<script src="bootstrap/js/jquery.js"></script>

<!--jquery end-->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script>

    $(document).ready(function () {


            $('.married').click(function () {
            $(this).parent().addClass('background-yellow') ;
            $(this).parent().siblings().removeClass('background-yellow');

            console.log($(this).val());

            });



    });

</script>

</body>
</html>