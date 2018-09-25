<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/crs.css">
</head>
<body>


<div class="container">


    <div class="row justify-content-center">

        <div class="col-sm-8">

            <!--start of marrital status-->

            <div class="row grey-background justify-content-center padding-top-bottom">




                <div class="col-12 text-center married-status-text title-margin">
                    <span ><b>Marrital Status </b></span>
                </div>

                <div class="col-12">


                    <div class="row justify-content-center">

                            <input type="button"  name="married" class="btn married btn-outline-secondary no-border-radius btn-sm col-4 col-md-3 col-lg-2" value="SINGLE"/>

                            <input type="button"  name="married"  class="btn married  btn-outline-secondary no-border-radius btn-sm  col-4 col-md-3  col-lg-2" value="MARRIED" />

                            <input type="button"  name="married"  class="btn married  btn-outline-secondary no-border-radius btn-sm  col-4 col-md-3  col-lg-2" value="SEPARATED" />
                    </div>


                </div>





            </div>

            <!--end of marrital status-->

            <!--age area-->

            <div class="row justify-content-center padding-top-bottom age-div " >




                    <div class=" col-12 text-center married-status-text title-margin">
                        <span class=""><b>AGE</b></span>
                    </div>



                <div class="col-11">
                    <input type="range" min="16" max="56" value="16" class="slider" id="myRange">
                </div>

            </div>

            <!--end age arae-->


            <!--education area-->

            <div class="row justify-content-center padding-top-bottom grey-background education-div" >




                    <div class=" col-12 text-center married-status-text title-margin">
                        <span class="title-margin"><b>Years Of Education </b></span>
                    </div>




                <div class="col-11 text-center">
                    <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                    <p style="font-size: .65rem"><span class="grey-color-text" >You Selected:</span><b>Two Year Post Secondary Credentials</b></p>
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
                        <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm  col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm col-5 btn-yes-no" value="NO">
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
                            <input type="range" min="4" step=".5" max="9" value="4" class="slider" id="myRange" data-show-value="true">

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
                            <input type="range" min="3" max="9" step=".5" value="3" class="slider" id="myRange">

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
                            <input type="range" min="3.5" max="9" step=".5" value="3.5" class="slider" id="myRange">

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
                            <input type="range" min="3.5" max="9" step=".5" value="3.5" class="slider" id="myRange">

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
                        <input type="button" class="btn btn-outline-secondary no-border-radius btn-sm  col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary no-border-radius btn-sm col-5 btn-yes-no" value="NO">
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
                            <input type="range" min="144" step="1" max="415" value="144" class="slider" id="myRange" data-show-value="true">

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
                            <input type="range" min="120" max="415" step="1" value="120" class="slider" id="myRange">

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
                            <input type="range" min="180" max="415" step="1" value="180" class="slider" id="myRange">

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
                            <input type="range" min="180" max="415" step="1" value="180" class="slider" id="myRange">

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
                            <input type="range" min="0" step="1" max="7" value="0" class="slider" id="myRange" data-show-value="true">

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
                            <input type="range" min="0" max="5" step="1" value="0" class="slider" id="myRange">

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
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm  col-5 btn-yes-no" value="YES">
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm col-5 btn-yes-no" value="NO">

                        </div>





                    </div>



                </div>








            </div>

            <!--end of tef result  area-->

        </div>

            <!--end of work experience-->


            <!--spouse area-->


            <!--spouse education-->

            <div class="row justify-content-center padding-top-bottom grey-background education-div" >

                <div class="row">

                    <div class=" col-12 text-center married-status-text title-margin">
                        <span class="title-margin"><b>Spouse / common-law partner </b></span>
                    </div>

                </div>

                <div class="col-12 mb-2 ">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b>Education in canada</b></p>

                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="row justify-content-center ">

                                <div class="col-11 text-center">


                                    <input type="range" min="0" step="1" max="7" value="0" class="slider" id="myRange" data-show-value="true">
                                    <p style="font-size: .65rem"><span class="grey-color-text" >You Selected:</span><b>Two Year Post Secondary Credentials</b></p>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>

                <!--canadian work experience-->

                <div class="col-12 mb-2 ">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b>Canadian Work Experience</b></p>

                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="row justify-content-center ">

                                <div class="col-11 text-center">


                                    <input type="range" min="0" step="1" max="7" value="0" class="slider" id="myRange" data-show-value="true">

                                </div>

                            </div>

                        </div>



                    </div>








                </div>

                <!--end canadian work experience-->

                <div>
                </div>

            </div>

            <!--end of spouse education-->

            <!--ielts button area-->

            <div class="row justify-content-center padding-top-bottom  education-div" >


                <div class="col-12 text-center married-status-text title-margin">
                    <span ><b>Have Your spouse given IELTS?</b></span>
                </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <input type="button" class="btn btn-outline-secondary  btn-sm no-border-radius col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary  btn-sm no-border-radius col-5 btn-yes-no" value="NO">
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
                            <input type="range" min="4" step=".5" max="9" value="4" class="slider" id="myRange" data-show-value="true">

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
                            <input type="range" min="3" max="9" step=".5" value="3" class="slider" id="myRange">

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
                            <input type="range" min="3.5" max="9" step=".5" value="3.5" class="slider" id="myRange">

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
                            <input type="range" min="3.5" max="9" step=".5" value="3.5" class="slider" id="myRange">

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
                        <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm  col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm col-5 btn-yes-no" value="NO">
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
                            <input type="range" min="144" step="1" max="415" value="144" class="slider" id="myRange" data-show-value="true">

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
                            <input type="range" min="120" max="415" step="1" value="120" class="slider" id="myRange">

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
                            <input type="range" min="180" max="415" step="1" value="180" class="slider" id="myRange">

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
                            <input type="range" min="180" max="415" step="1" value="180" class="slider" id="myRange">

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

            <div class="row justify-content-center padding-top-bottom education-div" >


                <div class="col-12 text-center married-status-text  title-margin">
                    <span ><b>Additional points</b></span>
                </div>


                <!--provincial nomication -->
                <div class="col-12 mb-2 grey-background padding-top-bottom-additional">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b>Provincial nomination?</b></p>

                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="row justify-content-center ">
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm  col-5 btn-yes-no" value="YES">
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm col-5 btn-yes-no" value="NO">

                            </div>

                        </div>



                    </div>








                </div>

                <!--end of provincial nomination-->

                <!--work offer -->

                <div class="col-12 mb-2 padding-top-bottom-additional">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b>offer of employment in Canada</b></p>

                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="row justify-content-center ">
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm  col-2 btn-yes-no" value="NO">
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm col-4 btn-yes-no" value="NOC OOX">
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm col-4 btn-yes-no" value="NOC O/A/B">

                            </div>

                        </div>



                    </div>








                </div>

                <!--end work offer-->

                <!--family in canada -->

                <div class="col-12 mb-2 grey-background padding-top-bottom-additional">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b>family in canada?</b></p>

                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="row justify-content-center ">
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm  col-5 btn-yes-no" value="YES">
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm col-5 btn-yes-no" value="NO">

                            </div>

                        </div>



                    </div>








                </div>

                <!--end family in canada -->

                <!--education in canada -->

                <div class="col-12 mb-2 padding-top-bottom-additional">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b>Education in canada</b></p>

                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="row justify-content-center ">

                                <div class="col-11 text-center">


                                <input type="range" min="0" step="1" max="7" value="1" class="slider" id="myRange" data-show-value="true">
                                <p style="font-size: .65rem"><span class="grey-color-text" >You Selected:</span><b>Two Year Post Secondary Credentials</b></p>
                                </div>

                            </div>

                        </div>



                    </div>








                </div>

                <!--end education in canada->



            </div>






            <!--end category additional -->







    </div>

            <!--end category additional-->






</div>


<!--jquery start-->

<script src="bootstrap/js/jquery.js"></script>

<!--jquery end-->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script>

    $(document).ready(function () {


            $('.married').click(function () {
                $(this).addClass('background-yellow') ;
                $(this).siblings().removeClass('background-yellow');

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