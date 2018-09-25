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
        .btn-yes-no:hover{
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
            width: 18px;
            height: 18px;
            background: #FEEF1C;
            cursor: pointer;
            border-radius: 0px;
        }
        input[type=range]::-moz-range-track {
            width: 93%;
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
        .grey-color-text{
            color: #CDCDCD;
        }

        /*switch*/

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 25px;
        }

        .switch input {display:none;}

        .slider-switch {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider-switch:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 0px;
            bottom: 0px;
            background-color: yellow;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider-switch {
            background-color: #2196F3;
        }

        input:focus + .slider-switch {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider-switch:before {
            -webkit-transform: translateX(30px);
            -ms-transform: translateX(30px);
            transform: translateX(30px);
        }

        /* Rounded sliders */
        .slider-switch.round {
            border-radius: 34px;
        }

        .slider-switch.round:before {
            border-radius: 50%;
        }




    </style>
</head>
<body>


<div class="container">


    <div class="row justify-content-center">

        <div class="col-sm-8">

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

            <!--end of marrital status-->

            <!--age area-->

            <div class="row justify-content-center padding-top-bottom age-div " >


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


            <!--education area-->

            <div class="row justify-content-center padding-top-bottom grey-background education-div" >


                <div class="row">

                    <div class=" col-12 text-center married-status-text title-margin">
                        <span class="title-margin"><b>Years Of Education </b></span>
                    </div>

                </div>


                <div class="col-12">
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                    <p style="margin-left: 30px;font-size: .65rem"><span class="grey-color-text" >You Selected:</span><b>Two Year Post Secondary Credentials</b></p>
                </div>

            </div>

            <!--end education area-->


            <!--ielts button area-->

            <div class="row justify-content-center padding-top-bottom  education-div" >


                    <div class="col-12 text-center married-status-text title-margin">
                        <span ><b>Have You given IELTS?</b></span>
                    </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <input type="button" class="btn btn-outline-secondary  btn-sm  col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary  btn-sm col-5 btn-yes-no" value="NO">
                    </div>


                </div>




            </div>

            <!--end of ielts button area-->

            <!--ielts result  area-->

            <div class="row justify-content-center padding-top-bottom grey-background education-div" >


                <div class="col-12 text-center married-status-text  title-margin">
                    <span ><b>Your Results of IELTS</b></span>
                </div>

                <!--listening-->
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Listening</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="4.5" step=".5" max="9" value="6.5" class="slider" id="myRange" data-show-value="true">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>
                <!--end listening-->

                <!--reading-->

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Reading</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="3.5" max="9" step=".5" value="6.5" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <!--end reading-->

                <!--writing-->

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>writing</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="4" max="9" step=".5" value="6.5" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>
                <!--end writing-->

                <!--speaking-->

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Speaking</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="4" max="9" step=".5" value="6.5" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <!--end speaking-->






            </div>

            <!--end of ielts result  area-->


            <!--tef button area-->


            <div class="row justify-content-center padding-top-bottom  education-div" >


                <div class="col-12 text-center married-status-text title-margin">
                    <span ><b>Have You given TEF?</b></span>
                </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <input type="button" class="btn btn-outline-secondary  btn-sm  col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary  btn-sm col-5 btn-yes-no" value="NO">
                    </div>


                </div>




            </div>

            <!--end of tef button area-->

            <!--tef result  area-->


            <div class="row justify-content-center padding-top-bottom grey-background education-div" >


                <div class="col-12 text-center married-status-text  title-margin">
                    <span ><b>Your Results of TEF</b></span>
                </div>
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Listening</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="145" step="1" max="415" value="300" class="slider" id="myRange" data-show-value="true">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Reading</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="121" max="415" step="1" value="300" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>writing</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="181" max="415" step="1" value="300" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Speaking</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="181" max="415" step="1" value="300" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>






            </div>

            <!--end of tef result  area-->


            <!--tef result  area-->


            <!--work experience-->

            <div class="row justify-content-center padding-top-bottom education-div" >


                <div class="col-12 text-center married-status-text  title-margin">
                    <span ><b>Work Experience and Trade</b></span>
                </div>
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-4">

                            <p style="font-size: .7rem"><b>Canadian Work Experience</b></p>

                        </div>

                        <div class="col-6">
                            <input type="range" min="0" step="1" max="7" value="300" class="slider" id="myRange" data-show-value="true">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-4">

                            <p style="font-size: .7rem"><b>Foreign work Experience</b></p>

                        </div>

                        <div class="col-6">
                            <input type="range" min="0" max="5" step="1" value="300" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-4">

                            <p style="font-size: .7rem"><b>Canadian trade certificate</b></p>

                        </div>

                        <div class="col-6">
                            <div class="row justify-content-center ">
                                <input type="button" class="btn btn-outline-secondary  btn-sm  col-5 btn-yes-no" value="YES">
                                <input type="button" class="btn btn-outline-secondary  btn-sm col-5 btn-yes-no" value="NO">

                        </div>





                    </div>



                </div>








            </div>

            <!--end of tef result  area-->

        </div>

            <!--end of work experience-->


            <!--spouse area-->

            <div class="row justify-content-center padding-top-bottom grey-background education-div" >

                <div class="row">

                    <div class=" col-12 text-center married-status-text title-margin">
                        <span class="title-margin"><b>Spouse / common-law partner </b></span>
                    </div>

                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-4">

                            <p style="font-size: .7rem"><b>Education</b></p>

                        </div>

                        <div class="col-6">
                            <input type="range" min="0" step="1" max="7" value="300" class="slider" id="myRange" data-show-value="true">
                            <p style="margin-left: 20px;font-size: .65rem"><span class="grey-color-text" >You Selected:</span><b>Two Year Post Secondary Credentials</b></p>

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-4">

                            <p style="font-size: .7rem"><b>Canadian Work Experience</b></p>

                        </div>

                        <div class="col-6">
                            <input type="range" min="0" step="1" max="7" value="300" class="slider" id="myRange" data-show-value="true">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>



                <div>
                </div>

            </div>

            <!--ielts button area-->

            <div class="row justify-content-center padding-top-bottom  education-div" >


                <div class="col-12 text-center married-status-text title-margin">
                    <span ><b>Have Your spouse given IELTS?</b></span>
                </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <input type="button" class="btn btn-outline-secondary  btn-sm  col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary  btn-sm col-5 btn-yes-no" value="NO">
                    </div>


                </div>




            </div>

            <!--end of ielts button area-->

            <!--ielts result  area-->

            <div class="row justify-content-center padding-top-bottom grey-background education-div" >


                <div class="col-12 text-center married-status-text  title-margin">
                    <span ><b>Spouse IELTS Result</b></span>
                </div>

                <!--listening-->
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Listening</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="4.5" step=".5" max="9" value="6.5" class="slider" id="myRange" data-show-value="true">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>
                <!--end listening-->

                <!--reading-->

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Reading</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="3.5" max="9" step=".5" value="6.5" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <!--end reading-->

                <!--writing-->

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>writing</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="4" max="9" step=".5" value="6.5" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>
                <!--end writing-->

                <!--speaking-->

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Speaking</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="4" max="9" step=".5" value="6.5" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <!--end speaking-->






            </div>

            <!--end of ielts result  area-->

            <!--tef button area-->

            <div class="row justify-content-center padding-top-bottom  education-div" >


                <div class="col-12 text-center married-status-text title-margin">
                    <span ><b>Have Your spouse given TEF??</b></span>
                </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <input type="button" class="btn btn-outline-secondary  btn-sm  col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary  btn-sm col-5 btn-yes-no" value="NO">
                    </div>


                </div>




            </div>

            <!--end of tef button area-->

            <!--tef result  area-->

            <div class="row justify-content-center padding-top-bottom grey-background education-div" >


                <div class="col-12 text-center married-status-text  title-margin">
                    <span ><b>Spouse TEF Result</b></span>
                </div>
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Listening</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="145" step="1" max="415" value="300" class="slider" id="myRange" data-show-value="true">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Reading</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="121" max="415" step="1" value="300" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>writing</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="181" max="415" step="1" value="300" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Speaking</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="181" max="415" step="1" value="300" class="slider" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span>0</span></b>

                        </div>




                    </div>



                </div>






            </div>

            <!--end of tef result  area-->



            <!--end spouse area-->



            <!--category additional -->

            <!--end category additional -->







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

            $('.btn-yes-no').click(function () {


                $(this).addClass('background-yellow');
                $(this).siblings().removeClass('background-yellow');
                console.log('fsdf');

            });



    });

</script>

</body>
</html>