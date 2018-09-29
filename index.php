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

                            <input type="button"  name="married" class="btn married btn-outline-secondary no-border-radius btn-sm col-4 col-md-3 col-lg-2 background-yellow" value="SINGLE"/>

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

                    <div class="row justify-content-center">

                        <div class="col-10">
                            <input type="range" min="16" max="56" value="16" class="slider age-range" id="myRange">
                        </div>
                        <div class="col-1">

                            <b><span class="age-change">0</span></b>
                        </div>

                    </div>

                </div>

            </div>

            <!--end age arae-->


            <!--education area-->

            <div class="row justify-content-center padding-top-bottom grey-background " >




                <div class=" col-12 text-center married-status-text title-margin">
                        <span class="title-margin"><b>Years Of Education </b></span>
                    </div>

                <div class="col-10 text-center">
                    <input type="range" min="0" max="8" value="0" class="slider education-range" id="myRange">
                    <p style="font-size: .65rem"><span class="grey-color-text" >You Selected:</span><b class="education-change">Two Year Post Secondary Credentials</b></p>
                </div>

            </div>

            <!--end education area-->


            <!--ielts button area-->

            <div class="row justify-content-center padding-top-bottom  " >


                    <div class="col-12 text-center married-status-text title-margin">
                        <span ><b>Have You given IELTS?</b></span>
                    </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm ielts_status_btn  col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm ielts_status_btn  col-5 btn-yes-no" value="NO">
                    </div>


                </div>




            </div>

            <!--end of ielts button area-->

            <!--ielts result  area-->

            <div class="row justify-content-center padding-top-bottom grey-background ielts_results ielts_remove" >


                <div class="col-12 text-center married-status-text  title-margin">
                    <span ><b class="ielts_text">Your Results of IELTS</b></span>
                </div>

                <!--listening-->
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Listening</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="3" step=".5" max="9" value="3"  class="slider ielts_listening_range" id="myRange" data-show-value="true">

                        </div>
                        <div class="col-1">

                            <b><span class="ielts_listening_value">0</span></b>

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
                            <input type="range" min="3" max="9" step=".5" value="3" class="slider ielts_reading_range" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span class="ielts_reading_value">0</span></b>

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
                            <input type="range" min="3.5" max="9" step=".5" value="3.5" class="slider ielts_writing_range" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span class="ielts_writing_value">0</span></b>

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
                            <input type="range" min="3.5" max="9" step=".5" value="3.5" class="slider ielts_speaking_range" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span class="ielts_speaking_value">0</span></b>

                        </div>




                    </div>



                </div>

                <!--end speaking-->

            </div>

            <!--end of ielts result  area-->


            <!--tef button area-->


            <div class="row justify-content-center padding-top-bottom " >


                <div class="col-12 text-center married-status-text title-margin">
                    <span ><b>Have You given TEF?</b></span>
                </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <input type="button" class="btn btn-outline-secondary no-border-radius btn-sm tef_status_btn col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary no-border-radius btn-sm tef_status_btn col-5 btn-yes-no" value="NO">
                    </div>


                </div>




            </div>

            <!--end of tef button area-->

            <!--tef result  area-->


            <div class="row justify-content-center padding-top-bottom grey-background tef_results ielts_remove" >


                <div class="col-12 text-center married-status-text  title-margin">
                    <span ><b class="tef_text">Your Results of TEF</b></span>
                </div>
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Listening</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="140" step="1" max="415" value="140" class="slider tef_listening_range" id="myRange" data-show-value="true">

                        </div>
                        <div class="col-1">

                            <b><span class="tef_listening_value">0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Reading</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="120" max="415" step="1" value="120" class="slider tef_reading_range" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span class="tef_reading_value">0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>writing</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="180" max="415" step="1" value="180" class="slider tef_writing_range" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span class="tef_writing_value">0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Speaking</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="180" max="415" step="1" value="180" class="slider tef_speaking_range" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span class="tef_speaking_value">0</span></b>

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
                            <input type="range" min="0" step="1" max="7" value="0" class="slider canadian_work_ex_range" id="myRange" data-show-value="true">

                        </div>
                        <div class="col-1">

                            <b><span class="canadian_work_ex_value">0</span></b>

                        </div>




                    </div>



                </div>

                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-4">

                            <p style="font-size: .7rem"><b>Foreign work Experience</b></p>

                        </div>

                        <div class="col-6">
                            <input type="range" min="0" max="5" step="1" value="0" class="slider foreign_work_range" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span class="foreign_work_value">0</span></b>

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
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm canadian_trade_btn col-5 btn-yes-no" value="YES">
                                <input type="button" class="btn btn-outline-secondary no-border-radius  btn-sm canadian_trade_btn col-5 btn-yes-no" value="NO">

                        </div>





                    </div>



                </div>








            </div>

            <!--end of tef result  area-->

        </div>

            <!--end of work experience-->


            <!--spouse area-->


            <!--spouse education-->

            <div class="row justify-content-center padding-top-bottom grey-background spouse-remove spouse" >

                <div class="row">

                    <div class=" col-12 text-center married-status-text title-margin">
                        <span class="title-margin"><b>Spouse / common-law partner </b></span>
                    </div>

                </div>

                <div class="col-12 mb-2 ">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b>Spouse Education</b></p>

                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="row justify-content-center ">

                                <div class="col-11 text-center">


                                    <input type="range" min="0" step="1" max="8" value="0" class="slider spouse_education_range" id="myRange" data-show-value="true">
                                    <p style="font-size: .65rem"><span class="grey-color-text" >You Selected:</span><b class="spouse_education_text">Two Year Post Secondary Credentials</b></p>
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

                                <div class="col-10 text-center">


                                    <input type="range" min="0" step="1" max="7" value="0" class="slider spouse_canadian_work_ex_range" id="myRange" data-show-value="true">

                                </div>
                                <div class="col-1">
                                    <b><span class="spouse_canadian_work_ex_value">0</span></b>

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

            <div class="row justify-content-center padding-top-bottom  spouse-remove spouse" >


                <div class="col-12 text-center married-status-text title-margin">
                    <span ><b>Have Your spouse given IELTS?</b></span>
                </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <input type="button" class="btn btn-outline-secondary  btn-sm no-border-radius spouse_ielts_btn col-5 btn-yes-no" value="YES">
                        <input type="button" class="btn btn-outline-secondary  btn-sm no-border-radius spouse_ielts_btn col-5 btn-yes-no" value="NO">
                    </div>


                </div>




            </div>

            <!--end of ielts button area-->

            <!--ielts result  area-->

            <div class="row justify-content-center padding-top-bottom grey-background spouse_ielts_show ielts_remove spouse" >


                <div class="col-12 text-center married-status-text  title-margin">
                    <span ><b class="spouse_ielts_text">Spouse IELTS Result</b></span>
                </div>
                <!--listening-->
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b>Listening</b></p>

                        </div>

                        <div class="col-8">
                            <input type="range" min="3" step=".5" max="9" value="3"  class="slider spouse_ielts_listening_range" id="myRange" data-show-value="true">

                        </div>
                        <div class="col-1">

                            <b><span class="spouse_ielts_listening_value">0</span></b>

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
                            <input type="range" min="3" max="9" step=".5" value="3" class="slider spouse_ielts_reading_range" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span class="spouse_ielts_reading_value">0</span></b>

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
                            <input type="range" min="3.5" max="9" step=".5" value="3.5" class="slider spouse_ielts_writing_range" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span class="spouse_ielts_writing_value">0</span></b>

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
                            <input type="range" min="3.5" max="9" step=".5" value="3.5" class="slider spouse_ielts_speaking_range" id="myRange">

                        </div>
                        <div class="col-1">

                            <b><span class="spouse_ielts_speaking_value">0</span></b>

                        </div>




                    </div>



                </div>

                <!--end speaking-->





            </div>

            <!--end of ielts result  area-->





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
                                <input type="button" class="btn btn-outline-secondary no-border-radius provincial_btn  btn-sm  col-5 btn-yes-no" value="YES">
                                <input type="button" class="btn btn-outline-secondary no-border-radius  provincial_btn btn-sm col-5 btn-yes-no" value="NO">

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
                                <input type="button" class="btn btn-outline-secondary no-border-radius offer_canada_btn btn-sm  col-2 btn-yes-no" value="NO">
                                <input type="button" class="btn btn-outline-secondary no-border-radius offer_canada_btn btn-sm col-4 btn-yes-no" value="NOC OOX">
                                <input type="button" class="btn btn-outline-secondary no-border-radius offer_canada_btn btn-sm col-4 btn-yes-no" value="NOC O/A/B">

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
                                <input type="button" class="btn btn-outline-secondary no-border-radius family_canada_btn btn-sm  col-5 btn-yes-no" value="YES">
                                <input type="button" class="btn btn-outline-secondary no-border-radius family_canada_btn btn-sm col-5 btn-yes-no" value="NO">

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


                                <input type="range" min="0" step="0" max="2" value="0" class="slider canada_education_range" id="myRange" data-show-value="true">
                                <p style="font-size: .65rem"><span class="grey-color-text" >You Selected:</span><b class="canada_education_text">None</b></p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!--end education in canada-->

            </div>

            <!--end category additional -->
            <!--code fore modal start-->



            <div class="row justify-content-center mb-2">

                <!--code fore modal start-->

                <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <form action="dfsf.php">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Email:</label>
                                        <input type="text" class="form-control input-field" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Phone:</label>
                                        <input class="form-control input-field" id="message-text">
                                    </div>
                                    <div class="row justify-content-center">
                                        <button type="button" class="btn btn-secondary modal-button-css mr-2" data-dismiss="modal">Close</button>
                                        <input type="button" class="btn btn-primary modal-button-css send-button" value="Send Message">

                                    </div>
                                </form>


                            </div>


                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary modal-button-css btn-block col-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Complete</button>


                <!--end of modal-->

            </div>
            <!--end of modal-->


        </div>

            <!--end category additional-->


    </div>

</div>

<!--jquery start-->

<script src="bootstrap/js/jquery.js"></script>

<!--jquery end-->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="bootstrap/js/crs.js"></script>

</body>
</html>