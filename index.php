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
    <!--for toast-->
    <link rel="stylesheet" href="kamran_tos/src/jquery.toast.css">



</head>
<body>


<div class="container">

    <div class="row justify-content-center">





        <div class="col-sm-8" style="border: 13px solid #dcdcdc;">

            <div class="row grey-background justify-content-center padding-top-bottom">






                <div class="col-12">

                    <div class="row justify-content-center">

                        <input type="button"  name="language" class="btn language btn-yes-no btn-outline-secondary no-border-radius btn-sm col-4 col-md-3 col-lg-2 background-yellow" value="ENGLISH"/>

                        <input type="button"  name="language"  class="btn language  btn-yes-no btn-outline-secondary no-border-radius btn-sm  col-4 col-md-3  col-lg-2" value="বাংলা" />


                    </div>


                </div>





            </div>

            <!--start of marrital status-->

            <div class="row grey-background justify-content-center padding-top-bottom">




                <div class="col-12 text-center married-status-text title-margin">
                    <span ><b class="marital_status">Marital Status </b></span>
                </div>

                <div class="col-12">


                    <div class="row justify-content-center">

                        <button type="button"  name="married" class="btn married btn-outline-secondary no-border-radius single-btn btn-sm col-4 col-md-3 col-lg-2 background-yellow" value="SINGLE">SINGLE</button>

                        <button type="button"  name="married"  class="btn married  btn-outline-secondary no-border-radius btn-sm married-btn col-4 col-md-3  col-lg-2" value="MARRIED" >MARRIED</button>

                        <button type="button"  name="married"  class="btn married  btn-outline-secondary no-border-radius btn-sm separated-btn col-4 col-md-3  col-lg-2" value="SEPARATED" >SEPARATED</button>
                    </div>


                </div>





            </div>

            <!--end of marrital status-->

            <!--age area-->

            <div class="row justify-content-center padding-top-bottom age-div " >

                    <div class=" col-12 text-center married-status-text title-margin">
                        <span ><b class="age-head">AGE</b></span>
                    </div>

                <div class="col-11">

                    <div class="row justify-content-center">

                        <div class="col-10">
                            <input type="range" min="16" max="56"  value="16" class="slider age-range" id="myRange">
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
                        <span class="title-margin"><b class="years-of-education">Years Of Education </b></span>
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
                        <span ><b class="ielts_status_question">Have You given IELTS?</b></span>
                    </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <button type="button" class="btn btn-outline-secondary no-border-radius  btn-sm ielts_status_btn_yes ielts_status_btn  col-5 btn-yes-no" value="YES">YES</button>
                        <button type="button" class="btn btn-outline-secondary no-border-radius  btn-sm ielts_status_btn_no  ielts_status_btn  col-5 btn-yes-no" value="NO">NO</button>
                    </div>


                </div>




            </div>

            <!--end of ielts button area-->

            <!--ielts result  area-->

            <div class="row justify-content-center padding-top-bottom grey-background ielts_results ielts_remove" >


                <div class="col-12 text-center married-status-text  title-margin">
                    <span ><b class="ielts_text ielts_result_text" id="done">Your Results of IELTS</b></span>
                </div>

                <!--listening-->
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-2">

                            <p style="font-size: .8rem"><b class="listening_text_bangla">Listening</b></p>

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

                            <p style="font-size: .8rem"><b class="reading_text_bangla">Reading</b></p>

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

                            <p style="font-size: .8rem"><b class="writing_text_bangla">writing</b></p>

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

                            <p style="font-size: .8rem"><b class="speaking_text_bangla">Speaking</b></p>

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
                    <span ><b class="tef_text_bangla">Have You given TEF?</b></span>
                </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <button type="button" class="btn btn-outline-secondary no-border-radius btn-sm tef_status_btn_yes tef_status_btn col-5 btn-yes-no" value="YES">YES</button>
                        <button type="button" class="btn btn-outline-secondary no-border-radius btn-sm tef_status_btn_no tef_status_btn col-5 btn-yes-no" value="NO">NO</button>
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

                            <p style="font-size: .8rem"><b class="listening_text_bangla">Listening</b></p>

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

                            <p style="font-size: .8rem"><b class="reading_text_bangla">Reading</b></p>

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

                            <p style="font-size: .8rem"><b class="writing_text_bangla">writing</b></p>

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

                            <p style="font-size: .8rem"><b class="speaking_text_bangla">Speaking</b></p>

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
                    <span ><b class="work_trade_text">Work Experience and Trade</b></span>
                </div>
                <div class="col-12 mb-2">
                    <div class="row">
                        <div class="col-4">

                            <p style="font-size: .7rem"><b class="work_ex_canada">Canadian Work Experience</b></p>

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

                            <p style="font-size: .7rem"><b class="work_foreign">Foreign work Experience</b></p>

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

                            <p style="font-size: .7rem"><b class="trade_canada">Canadian trade certificate</b></p>

                        </div>

                        <div class="col-6">
                            <div class="row justify-content-center ">
                                <button type="button" class="btn btn-outline-secondary no-border-radius  btn-sm canadian_trade_btn_yes canadian_trade_btn col-5 btn-yes-no" value="YES">YES</button>
                                <button type="button" class="btn btn-outline-secondary no-border-radius  btn-sm canadian_trade_btn_no  canadian_trade_btn col-5 btn-yes-no" value="NO">NO</button>

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
                        <span class="title-margin"><b class="spouse_text_bangla">Spouse / common-law partner </b></span>
                    </div>

                </div>

                <div class="col-12 mb-2 ">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b class="spouse_education_text_bangla">Spouse Education</b></p>

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
                        <p style="font-size: .7rem"><b class="spouse_canadian_work_bangla">Canadian Work Experience</b></p>

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
                    <span ><b class="spouse_ielts_text_bangla">Have Your spouse given IELTS?</b></span>
                </div>
                <div class="col-12 ">
                    <div class="row justify-content-center ">
                        <button type="button" class="btn btn-outline-secondary  btn-sm no-border-radius spouse_ielts_btn_yes spouse_ielts_btn col-5 btn-yes-no" value="YES">YES</button>
                        <button type="button" class="btn btn-outline-secondary  btn-sm no-border-radius spouse_ielts_btn_no spouse_ielts_btn col-5 btn-yes-no" value="NO">NO</button>
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

                            <p style="font-size: .8rem"><b class="listening_text_bangla">Listening</b></p>

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

                            <p style="font-size: .8rem"><b class="reading_text_bangla">Reading</b></p>

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

                            <p style="font-size: .8rem"><b class="writing_text_bangla">writing</b></p>

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

                            <p style="font-size: .8rem"><b class="speaking_text_bangla" >Speaking</b></p>

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
                    <span ><b class="addition_points_text">Additional points</b></span>
                </div>


                <!--provincial nomication -->
                <div class="col-12 mb-2 grey-background padding-top-bottom-additional">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b class="provincial_nomi_status">Provincial nomination?</b></p>

                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="row justify-content-center ">
                                <button type="button" class="btn btn-outline-secondary no-border-radius provincial_btn_yes provincial_btn  btn-sm  col-5 btn-yes-no" value="YES">YES</button>
                                <button type="button" class="btn btn-outline-secondary no-border-radius provincial_btn_no provincial_btn btn-sm col-5 btn-yes-no" value="NO">NO</button>

                            </div>

                        </div>



                    </div>








                </div>

                <!--end of provincial nomination-->

                <!--work offer -->

                <div class="col-12 mb-2 padding-top-bottom-additional">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b class="offer_canada_text">offer of employment in Canada</b></p>

                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="row justify-content-center ">
                                <button type="button" class="btn btn-outline-secondary no-border-radius offer_canada_btn_no offer_canada_btn btn-sm  col-2 btn-yes-no" value="NO">NO</button>
                                <button type="button" class="btn btn-outline-secondary no-border-radius offer_canada_btn_nox offer_canada_btn btn-sm col-4 btn-yes-no" value="NOC OOX">NOC OOX</button>
                                <button type="button" class="btn btn-outline-secondary no-border-radius offer_canada_btn_noc offer_canada_btn btn-sm col-4 btn-yes-no" value="NOC O/A/B">NOC O/A/B</button>

                            </div>

                        </div>



                    </div>








                </div>

                <!--end work offer-->

                <!--family in canada -->

                <div class="col-12 mb-2 grey-background padding-top-bottom-additional">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b class="family_canada_text">family in canada?</b></p>

                    </div>
                    <div class="row">

                        <div class="col-12">
                            <div class="row justify-content-center ">
                                <input type="button" class="btn btn-outline-secondary no-border-radius family_canada_btn_yes family_canada_btn btn-sm  col-5 btn-yes-no" value="YES">
                                <input type="button" class="btn btn-outline-secondary no-border-radius family_canada_btn_no family_canada_btn btn-sm col-5 btn-yes-no" value="NO">

                            </div>

                        </div>



                    </div>








                </div>

                <!--end family in canada -->

                <!--education in canada -->

                <div class="col-12 mb-2 padding-top-bottom-additional">
                    <div class="col-12 text-center">
                        <p style="font-size: .7rem"><b class="education_canada_head">Education in canada</b></p>

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

                <div class="modal fade modal-first_screen" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered modal-dialog-style" role="document" id="modal_id">
                        <div class="modal-content modal-content-style">

                            <div class="modal-body mt-2" style="line-height: .9rem">


                                <div class="text-center" style="font-size: smaller">

                                    <p style="color:#78e4ea;font-size: 18px">Online CRS Report</p>

                                    <p>Canada Immigration isn't just about your eligibility - now you need to be submitted to an express
                                        entry pool as well where you compete against a global applicant pool</p>

                                    <p>Get your CRS score delivered directly to your via online</p>


                                </div>



                                <form class="">
                                    <div class="form-group">

                                        <input type="text" class="form-control name-input-filed input-field top-left-right" placeholder="Enter your Full name" id="recipient-name" required>
                                    </div>


                                    <div class="form-group">

                                        <input type="tel" class="form-control phone-input-filed input-field top-left-right" placeholder="Phone" id="message-text" required>
                                    </div>


                                    <div class="form-group">

                                        <input type="email" class="form-control email-input-filed input-field top-left-right" placeholder="Email" id="message-text1" required>
                                    </div>



                                    <input type="button" class="btn btn-primary modal-button-css send-button btn-block mt-3 send-button" style="border-radius: 0px; background-color: #FEEF1C;color: black;outline: #FEEF1C" value="Get your CRS Score">


                                </form>


                            </div>


                        </div>
                    </div>
                </div>

<!--                <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <div class="modal-body">
                                <form >
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Email:</label>
                                        <input type="email" class="form-control email-input-filed input-field" id="recipient-name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Phone:</label>
                                        <input type="tel" class="form-control phone-input-filed input-field" id="message-text" required>
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

                <button type="button" class="btn btn-primary modal-button-css btn-block col-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Complete</button>-->


                <!--end of modal-->

            </div>

            <!--end of modal-->

            <!--show answer modal-->
            <div class="row justify-content-center mb-2">

                <!--code fore modal start-->

                <div class="modal fade modal-second-screen" id="exampleModalanswer" tabindex="-1" role="dialog" data-backdrop="static"   aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content modal-content-style">

                            <div class="modal-body text-center">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <div class="answer-modal">




                                </div>


                            </div>


                        </div>
                    </div>
                </div>



                <!--end of modal-->

            </div>
            <!--end answer modal-->


            <!--show email name and everything-->

            <!--end show email name and everything-->

            <!--sticky node-->

               <!-- <div class="position-sticky fixed-bottom justify-content-center navbar navbar-dark already_better" style="background: #F7D714;color:black;font-weight: bold">WElCOME</div>-->



            <!--stickey node-->
            <div class="row justify-content-center mb-2">
                <div class="col-12">
                    <button class="btn btn-success btn-send-score btn_send_score_text btn-block">Get your final CRS Score</button>
                </div>



            </div>


        </div>

            <!--end category additional-->


    </div>

</div>

<!--jquery start-->

<script src="bootstrap/js/jquery.js"></script>

<!--jquery end-->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="kamran_tos/src/jquery.toast.js"></script>

<script src="bootstrap/js/crs.js"></script>

</body>
</html>