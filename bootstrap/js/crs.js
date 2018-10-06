/**
 * Created by User on 9/25/2018.
 */
$(document).ready(function () {





    var crs_calculate_object = {

        marital_status:'SINGLE',

        age_value:0,

        education_value:0,
        ielts_status:'NULL',

        ielts_value:{
                        listening:0,

                        reading:0,

                        writing:0,

                        speaking:0
                    },
        tef_status:'NULL',
        tef_value:{
                    listening:0,

                    reading:0,

                    writing:0,

                    speaking:0
                   },
        work_canada:0,

        work_foreign:0,

        canadian_trade:0,

        spouse_edu:0,

        spouse_work:0,

        spouse_ielts_status:'NULL',

        spouse_ielts:{
                        listening:0,

                        reading:0,

                        writing:0,

                        speaking:0
                     },
        language_edu:0,

        canada_work_ex_edu_level:0,

        language_foreign_ex:0,

        canada_foreign_ex:0,

        trade_status:'NULL',

        language_trade:0,

        pro_nomination:0,

        offer_of_employment:0,

        canadian_education:0,

        siblings_canada:0,

        total_sum:" ",

        ip:'NULL',

        email:'NULL',

        phone:'NULL',
        city:'NULL',
        name:'NULL'



    };





    /*for married status change*/
    $('.married').click(function () {

        $(this).addClass('background-yellow') ;
        $(this).siblings().removeClass('background-yellow');
        if($(this).val() == 'MARRIED' ){

            crs_calculate_object.marital_status = $(this).val();

           console.log(crs_calculate_object.marital_status);

            $($('.spouse')).removeClass('spouse-remove');

        }else {
            crs_calculate_object.marital_status = $(this).val();

            $($('.spouse')).addClass('spouse-remove');

            console.log(crs_calculate_object.marital_status);
        }


        marrital_ielts_change();


    });

    function marrital_ielts_change() {
        age_value();
        education_value();
        ielts_listening_change();
        ielts_reading_change();
        ielts_writing_change();
        ielts_speaking_change();
        canadian_work_ex_change();

        foreign_work_change();

        score_board();



    }

    /*end of married status change*/



    function age_value() {

        var age = $('.age-range').val();
        $('.age-change').text(age);

        if (crs_calculate_object.marital_status == 'SINGLE' || crs_calculate_object.marital_status == 'SEPARATED'){
            if (age <= 17) {

                crs_calculate_object.age_value = 0;

            }
            else if (age == 18) {

                crs_calculate_object.age_value = 99;


            }
            else if (age == 19) {

                crs_calculate_object.age_value = 105;


            }
            else if (age >= 20 && age <= 29) {

                crs_calculate_object.age_value = 110;


            }
            else if (age == 30) {

                crs_calculate_object.age_value = 105;


            }
            else if (age == 31) {

                crs_calculate_object.age_value = 99;


            }
            else if (age == 32) {

                crs_calculate_object.age_value = 94;


            } else if (age == 33) {

                crs_calculate_object.age_value = 88;


            } else if (age == 34) {

                crs_calculate_object.age_value = 83;

            }
            else if (age == 35) {

                crs_calculate_object.age_value = 77;


            }
            else if (age == 36) {

                crs_calculate_object.age_value = 72;


            }
            else if (age == 37) {

                crs_calculate_object.age_value = 66;


            }
            else if (age == 38) {

                crs_calculate_object.age_value = 61;


            }
            else if (age == 39) {

                crs_calculate_object.age_value = 55;


            }
            else if (age == 40) {

                crs_calculate_object.age_value = 50;


            }
            else if (age == 41) {

                crs_calculate_object.age_value = 39;


            }
            else if (age == 42) {

                crs_calculate_object.age_value = 28;


            }
            else if (age == 43) {

                crs_calculate_object.age_value = 17;


            }
            else if (age == 44) {

                crs_calculate_object.age_value = 6;


            }
            else if (age >= 45) {

                crs_calculate_object.age_value = 0;


            }

        }
        else{

            if (age <= 17) {

                crs_calculate_object.age_value = 0;


            }
            else if (age == 18) {

                crs_calculate_object.age_value = 90;


            }
            else if (age == 19) {

                crs_calculate_object.age_value = 95;

            }
            else if (age >= 20 && age <= 29) {

                crs_calculate_object.age_value = 100;


            }
            else if (age == 30) {

                crs_calculate_object.age_value = 95;


            }
            else if (age == 31) {

                crs_calculate_object.age_value = 90;


            }
            else if (age == 32) {

                crs_calculate_object.age_value = 85;


            } else if (age == 33) {

                crs_calculate_object.age_value = 80;


            } else if (age == 34) {

                crs_calculate_object.age_value = 75;


            }
            else if (age == 35) {

                crs_calculate_object.age_value = 70;


            }
            else if (age == 36) {

                crs_calculate_object.age_value = 65;


            }
            else if (age == 37) {

                crs_calculate_object.age_value = 60;


            }
            else if (age == 38) {

                crs_calculate_object.age_value = 55;


            }
            else if (age == 39) {

                crs_calculate_object.age_value = 50;


            }
            else if (age == 40) {

                crs_calculate_object.age_value = 40;


            }
            else if (age == 41) {

                crs_calculate_object.age_value = 35;


            }
            else if (age == 42) {

                crs_calculate_object.age_value = 25;


            }
            else if (age == 43) {

                crs_calculate_object.age_value = 15;


            }
            else if (age == 44) {

                crs_calculate_object.age_value = 5;


            }
            else if (age >= 45) {

                crs_calculate_object.age_value = 0;


            }

        }

        console.log('age value : ' +crs_calculate_object.age_value);
        score_board();

    }

    /*for the age*/

    $('.age-range').on('input',function () {


        age_value();

    });


    /*end of for the age*/


    /*education function*/

    function education_value() {
        var education_function = $('.education-range').val();

        if (crs_calculate_object.marital_status == 'SINGLE' || crs_calculate_object.marital_status == 'SEPARATED'){

            if (education_function <=1){

                crs_calculate_object.education_value = 0;
                $('.education-change').text('Less than secondary school (high school)');

            }
            else if(education_function == 2){
                crs_calculate_object.education_value = 30;
                $('.education-change').text('Secondary diploma (high school graduation)');

            }
            else if(education_function == 3){
                crs_calculate_object.education_value = 90;
                $('.education-change').text('One-year degree, diploma or certificate from  a university, college, trade or technical school, or other institute');

            }
            else if(education_function == 4){
                crs_calculate_object.education_value = 98;
                $('.education-change').text('Two-year program at a university, college, trade or technical school, or other institute');

            }
            else if(education_function == 5){
                crs_calculate_object.education_value = 120;
                $('.education-change').text('Bachelor’s degree OR  a three or more year program at a university, college, trade or technical school, or other institute');

            }
            else if(education_function == 6){
                crs_calculate_object.education_value = 128;
                $('.education-change').text('Two or more certificates, diplomas, or degrees. One must be for a program of three or more years');

            }
            else if(education_function == 7){
                crs_calculate_object.education_value = 135;
                $('.education-change').text('Master’s degree, OR professional degree needed to practice in a licensed profession (For “professional degree,” the degree program must have been in: medicine, veterinary medicine, dentistry, optometry, law, chiropractic medicine, or pharmacy.)');

            }
            else if(education_function == 8){
                crs_calculate_object.education_value = 150;
                $('.education-change').text('Doctoral level university degree (Ph.D.))');

            }

        }
        else{

            if (education_function <=1){

                crs_calculate_object.education_value = 0;
                $('.education-change').text('Less than secondary school (high school)');

            }
            else if(education_function == 2){
                crs_calculate_object.education_value = 28;
                $('.education-change').text('Secondary diploma (high school graduation)');

            }
            else if(education_function == 3){
                crs_calculate_object.education_value = 84;
                $('.education-change').text('One-year degree, diploma or certificate from  a university, college, trade or technical school, or other institute');

            }
            else if(education_function == 4){
                crs_calculate_object.education_value = 91;
                $('.education-change').text('Two-year program at a university, college, trade or technical school, or other institute');

            }
            else if(education_function == 5){
                crs_calculate_object.education_value = 112;
                $('.education-change').text('Bachelor’s degree OR  a three or more year program at a university, college, trade or technical school, or other institute');

            }
            else if(education_function == 6){
                crs_calculate_object.education_value = 119;
                $('.education-change').text('Two or more certificates, diplomas, or degrees. One must be for a program of three or more years');

            }
            else if(education_function == 7){
                crs_calculate_object.education_value = 126;
                $('.education-change').text('Master’s degree, OR professional degree needed to practice in a licensed profession (For “professional degree,” the degree program must have been in: medicine, veterinary medicine, dentistry, optometry, law, chiropractic medicine, or pharmacy.)');

            }
            else if(education_function == 8){
                crs_calculate_object.education_value = 140;
                $('.education-change').text('Doctoral level university degree (Ph.D.))');

            }

        }

        console.log('education : '+crs_calculate_object.education_value);
        education_language_trans();
        canadian_work_education();
        score_board();


    }

    /*end of education function*/

    $('.education-range').on('input',function () {

             education_value();

    });


    /*ielts button*/
    $('.ielts_status_btn').on('click',function () {

       if ($(this).val() == 'YES'){
           crs_calculate_object.ielts_status = $(this).val();

           $('.ielts_results').slideDown('slow');
           language_change_bangla();

       }
       else{
           crs_calculate_object.ielts_status = $(this).val();
           $('.ielts_results').slideDown('slow');
           $('.ielts_text').text('Your predicted Results of IELTS');
       }

    });

    /*ielts button*/


    /*function ilets listening*/

    function ielts_listening_change() {

        var listening = $('.ielts_listening_range').val();
        $('.ielts_listening_value').text(listening);


        if (crs_calculate_object.marital_status == 'MARRIED'){
            if(listening <4.5){

                crs_calculate_object.ielts_value.listening = 0;
            }
            else if(listening >=4.5 && listening<= 5){
                crs_calculate_object.ielts_value.listening = 6;
            }
            else if(listening ==5.5){
                crs_calculate_object.ielts_value.listening = 8;
            }
            else if(listening >= 6.5 && listening <=7.0){
                crs_calculate_object.ielts_value.listening = 16;
            }
            else if(listening == 7.5){
                crs_calculate_object.ielts_value.listening = 22;
            }
            else if(listening == 8.0){
                crs_calculate_object.ielts_value.listening = 29;
            }
            else if(listening >= 8.5 && listening <=9){
                crs_calculate_object.ielts_value.listening = 32;
            }
            console.log(crs_calculate_object.ielts_value.listening);

        }
        else{

            if(listening <4.5){

                crs_calculate_object.ielts_value.listening = 0;
            }
            else if(listening >=4.5 && listening<= 5){
                crs_calculate_object.ielts_value.listening = 6;
            }
            else if(listening ==5.5){
                crs_calculate_object.ielts_value.listening = 9;
            }
            else if(listening >= 6.5 && listening <=7.0){
                crs_calculate_object.ielts_value.listening = 17;
            }
            else if(listening == 7.5){
                crs_calculate_object.ielts_value.listening = 23;
            }
            else if(listening == 8.0){
                crs_calculate_object.ielts_value.listening = 31;
            }
            else if(listening >= 8.5 && listening <=9){
                crs_calculate_object.ielts_value.listening = 34;
            }
            console.log(crs_calculate_object.ielts_value.listening);



        }
        education_language_trans();
        foreign_work_language();
        trade_language();
        score_board();


    }

    /*end function ilets listening*/


    /*ielts listening */

    $('.ielts_listening_range').on('input',function () {

        ielts_listening_change();

    });

    /*end of itelst listening*/



    /*function ilets reading*/

    function ielts_reading_change() {

        var reading = $('.ielts_reading_range').val();
        $('.ielts_reading_value').text(reading);


        if (crs_calculate_object.marital_status == 'MARRIED'){
            if(reading <3.5){

                crs_calculate_object.ielts_value.listening = 0;
            }
            else if(reading >=3.5 && reading<= 4.5){
                crs_calculate_object.ielts_value.reading = 6;
            }
            else if(reading >= 5 && reading <= 5.5){
                crs_calculate_object.ielts_value.reading = 8;
            }
            else if(reading == 6){
                crs_calculate_object.ielts_value.reading = 16;
            }
            else if(reading == 6.5){
                crs_calculate_object.ielts_value.reading = 22;
            }
            else if(reading == 7.0){
                crs_calculate_object.ielts_value.reading = 29;
            }
            else if(reading >= 7.5 && reading <=9){
                crs_calculate_object.ielts_value.reading = 32;
            }
            console.log(crs_calculate_object.ielts_value.reading);

        }
        else{

            if(reading <3.5){

                crs_calculate_object.ielts_value.listening = 0;
            }
            else if(reading >=3.5 && reading<= 4.5){
                crs_calculate_object.ielts_value.reading = 6;
            }
            else if(reading >= 5 && reading <= 5.5){
                crs_calculate_object.ielts_value.reading = 9;
            }
            else if(reading == 6){
                crs_calculate_object.ielts_value.reading = 17;
            }
            else if(reading == 6.5){
                crs_calculate_object.ielts_value.reading = 23;
            }
            else if(reading == 7.0){
                crs_calculate_object.ielts_value.reading = 31;
            }
            else if(reading >= 7.4 && reading <=9){
                crs_calculate_object.ielts_value.reading = 34;
            }

        }
        console.log('ielts_reading : '+crs_calculate_object.ielts_value.reading);
        education_language_trans();
        foreign_work_language();
        trade_language();
        score_board();

    }

    /*end function ilets reading*/


    /*ielts reading */
    $('.ielts_reading_range').on('input',function () {

        ielts_reading_change();

    });
    /*end of ielts reading*/


    function ielts_writing_change(){

        var writing = $('.ielts_writing_range').val();
        $('.ielts_writing_value').text(writing);


        if (crs_calculate_object.marital_status == 'MARRIED'){
            if(writing <4){

                crs_calculate_object.ielts_value.writing = 0;
            }
            else if(writing >=4 && writing<= 5){
                crs_calculate_object.ielts_value.writing = 6;
            }
            else if( writing == 5.5){
                crs_calculate_object.ielts_value.writing = 8;
            }
            else if(writing == 6){
                crs_calculate_object.ielts_value.writing = 16;
            }
            else if(writing == 6.5){
                crs_calculate_object.ielts_value.writing = 22;
            }
            else if(writing == 7.0){
                crs_calculate_object.ielts_value.writing = 29;
            }
            else if(writing >= 7.5 && writing <=9){
                crs_calculate_object.ielts_value.writing = 32;
            }
            console.log(crs_calculate_object.ielts_value.writing);

        }
        else{

            if(writing <4){

                crs_calculate_object.ielts_value.writing = 0;
            }
            else if(writing >=4 && writing<= 5){
                crs_calculate_object.ielts_value.writing = 6;
            }
            else if( writing == 5.5){
                crs_calculate_object.ielts_value.writing = 9;
            }
            else if(writing == 6){
                crs_calculate_object.ielts_value.writing = 17;
            }
            else if(writing == 6.5){
                crs_calculate_object.ielts_value.writing = 23;
            }
            else if(writing == 7.0){
                crs_calculate_object.ielts_value.writing = 31;
            }
            else if(writing >= 7.5 && writing <=9){
                crs_calculate_object.ielts_value.writing = 34;
            }




        }
        console.log('ielts writing : '+crs_calculate_object.ielts_value.writing);
        education_language_trans();
        foreign_work_language();
        trade_language();
        score_board();

    }

    /*ielts writing*/
    $('.ielts_writing_range').on('input',function () {

        ielts_writing_change();

    });

    /*end ielts writing**/



    function ielts_speaking_change(){

        var speaking = $('.ielts_speaking_range').val();
        $('.ielts_speaking_value').text(speaking);
        trade_language();


        if (crs_calculate_object.marital_status == 'MARRIED'){
            if(speaking <4){

                crs_calculate_object.ielts_value.speaking = 0;
            }
            else if(speaking >=4 && speaking<= 5){
                crs_calculate_object.ielts_value.speaking = 6;
            }
            else if( speaking == 5.5){
                crs_calculate_object.ielts_value.speaking = 8;
            }
            else if(speaking == 6){
                crs_calculate_object.ielts_value.speaking = 16;
            }
            else if(speaking == 6.5){
                crs_calculate_object.ielts_value.speaking = 22;
            }
            else if(speaking == 7.0){
                crs_calculate_object.ielts_value.speaking = 29;
            }
            else if(speaking >= 7.5 && speaking <=9){
                crs_calculate_object.ielts_value.speaking = 32;
            }
            console.log(crs_calculate_object.ielts_value.speaking);

        }
        else{

            if(speaking <4){

                crs_calculate_object.ielts_value.speaking = 0;
            }
            else if(speaking >=4 && speaking<= 5){
                crs_calculate_object.ielts_value.speaking = 6;
            }
            else if( speaking == 5.5){
                crs_calculate_object.ielts_value.speaking = 9;
            }
            else if(speaking == 6){
                crs_calculate_object.ielts_value.speaking = 17;
            }
            else if(speaking == 6.5){
                crs_calculate_object.ielts_value.speaking = 23;
            }
            else if(speaking == 7.0){
                crs_calculate_object.ielts_value.speaking = 31;
            }
            else if(speaking >= 7.5 && speaking <=9){
                crs_calculate_object.ielts_value.speaking = 34;
            }




        }
        console.log('ielts speaking : '+crs_calculate_object.ielts_value.speaking);
        education_language_trans();
        foreign_work_language();
        score_board();

    }
    /*ielts speaking*/
    $('.ielts_speaking_range').on('input',function () {

        ielts_speaking_change();

    });

    /*end ielts speaking**/


    /*tef button*/
    $('.tef_status_btn').on('click',function () {

        if ($(this).val() == 'YES'){
            crs_calculate_object.tef_status = $(this).val();

            $('.tef_results').slideDown('slow');
            language_change_bangla();

        }
        else{
            crs_calculate_object.tef_status = $(this).val();
            $('.tef_results').slideUp('slow');
            //$('.tef_text').text('Your predicted Results of TEF');
        }

    });

    /*end of tef button*/



    function tef_listening_change() {

        var listening = $('.tef_listening_range').val();
        $('.tef_listening_value').text(listening);
        if (listening < 181){

            crs_calculate_object.tef_value.listening = 0;
        }
        else if (listening >=180 && listening <=248){

            crs_calculate_object.tef_value.listening = 1;

        }
        else if (listening >=249 && listening <=297){

            crs_calculate_object.tef_value.listening = 3;

        }
        else if (listening >=298 && listening <=415){

            crs_calculate_object.tef_value.listening = 6;

        }
        console.log('tef lis : '+crs_calculate_object.tef_value.listening);

        score_board();


    }
    /*tef listening*/

    $('.tef_listening_range').on('input',function () {

        tef_listening_change();

    });
    /*end tef listening*/


    function tef_reading_change() {

        var reading = $('.tef_reading_range').val();
        $('.tef_reading_value').text(reading);
        if (reading < 150){

            crs_calculate_object.tef_value.reading = 0;
        }
        else if (reading >=150 && reading <=206){

            crs_calculate_object.tef_value.reading = 1;

        }
        else if (reading >=207 && reading <=247){

            crs_calculate_object.tef_value.reading = 3;

        }
        else if (reading >=248 && reading <=415){

            crs_calculate_object.tef_value.reading = 6;

        }
        console.log('tef read : '+crs_calculate_object.tef_value.reading);
        score_board();


    }

    /*tef reading */
    $('.tef_reading_range').on('input',function () {

        tef_reading_change();
    });

    /*end of tef reading*/

    function tef_writing_change() {

        var writing = $('.tef_writing_range').val();
        $('.tef_writing_value').text(writing);
        if (writing < 226){

            crs_calculate_object.tef_value.writing = 0;
        }
        else if (writing >=226 && writing <=309){

            crs_calculate_object.tef_value.writing = 1;

        }
        else if (writing >=310 && writing <=370){

            crs_calculate_object.tef_value.writing = 3;

        }
        else if (writing >=371 && writing <=415){

            crs_calculate_object.tef_value.writing = 6;

        }
        console.log('tef writing : '+crs_calculate_object.tef_value.writing);
        score_board();


    }
    /*tef writing*/
    $('.tef_writing_range').on('input',function () {

        tef_writing_change();
    });

    /*end of tef writing*/


    function tef_speaking_change() {

        var speaking = $('.tef_speaking_range').val();
        $('.tef_speaking_value').text(speaking);
        if (speaking < 226){

            crs_calculate_object.tef_value.speaking = 0;
        }
        else if (speaking >=226 && speaking <=309){

            crs_calculate_object.tef_value.speaking = 1;

        }
        else if (speaking >=310 && speaking <=370){

            crs_calculate_object.tef_value.speaking = 3;

        }
        else if (speaking >=371 && speaking <=415){

            crs_calculate_object.tef_value.speaking = 6;

        }
        console.log('tef speaking : '+crs_calculate_object.tef_value.speaking);

        score_board();


    }
    /*tef speaking*/
    $('.tef_speaking_range').on('input',function () {

        tef_speaking_change();
    });

    /*end of tef speaking*/



    function canadian_work_ex_change() {
        var canadian_work = $('.canadian_work_ex_range').val();
        $('.canadian_work_ex_value').text(canadian_work+"y");


        if (crs_calculate_object.marital_status == 'MARRIED'){

            if (canadian_work <1){
                crs_calculate_object.work_canada = 0;
            }
            else if(canadian_work == 1){
                crs_calculate_object.work_canada = 35;
            }
            else if(canadian_work == 2){
                crs_calculate_object.work_canada = 46;
            }
            else if(canadian_work == 3){
                crs_calculate_object.work_canada = 56;
            }
            else if(canadian_work == 4){
                crs_calculate_object.work_canada = 63;
            }
            else if(canadian_work >=5){
                crs_calculate_object.work_canada = 70;
            }

        }
        else{

            if (canadian_work <1){
                crs_calculate_object.work_canada = 0;
            }
            else if(canadian_work == 1){
                crs_calculate_object.work_canada = 40;
            }
            else if(canadian_work == 2){
                crs_calculate_object.work_canada = 53;
            }
            else if(canadian_work == 3){
                crs_calculate_object.work_canada = 64;
            }
            else if(canadian_work == 4){
                crs_calculate_object.work_canada = 72;
            }
            else if(canadian_work >=5){
                crs_calculate_object.work_canada = 80;
            }


        }
        console.log('canadian work + '+crs_calculate_object.work_canada);
        canadian_work_education();
        foreign_canadian_work();
        score_board();

    }
    /*canadian work experience  */
    $('.canadian_work_ex_range').on('input',function () {



        canadian_work_ex_change();

    });
    /*end canadian work experience*/


    /*education and language*/

    function education_language_trans() {

        var under7 = 0;
        var under9 = 0;

        /*console.log(typeof (crs_calculate_object.ielts_value));*/





        /*finding the how many are under 7 and how many are under 9*/
        for(var prop in crs_calculate_object.ielts_value){
            var value = crs_calculate_object.ielts_value[prop];
            if (value >= 16 && value <=28){
                under7++;
            }
            else if(value >=29 && value<=34){
                under9++;
            }
        }

        /*end find*/

        /*eudcatrion value*/
        var education = crs_calculate_object.education_value;

        /*decision making*/
        if(under7 + under9 == 4){

            var startpoint13 = 0;
            var endpoints13 = 0;
            var startpoint25 = 0;
            var endpoints25 = 0;
            if (crs_calculate_object.marital_status == 'MARRIED'){
                startpoint13 = 84;
                endpoints13 = 112;
                startpoint25 = 119;
                endpoints25 = 140;



            }else {
                startpoint13 = 90;
                endpoints13 = 120;
                startpoint25 = 128;
                endpoints25 = 150;

                console.log('here');

            }

            if (under7 >=1){
                if (education >= startpoint13 && education <=endpoints13){
                    crs_calculate_object.language_edu = 13;
                }
                else if (education >= startpoint25 && education <=endpoints25){
                    crs_calculate_object.language_edu = 25;
                }
                else{
                    crs_calculate_object.language_edu = 0;
                }
            }
            else{

                if (education >= startpoint13 && education <=endpoints13){
                    crs_calculate_object.language_edu = 25;
                }
                else if (education >= startpoint25 && education <=endpoints25){
                    crs_calculate_object.language_edu = 50;
                }
                else{
                    crs_calculate_object.language_edu = 0;
                }


            }

        }
        /*decision making*/

        console.log('language education : '+crs_calculate_object.language_edu);

        score_board();




    }

    /*end of education and language*/



    /*canadian experience and education level trans*/
    function canadian_work_education() {


        var startpoint13 = 0;
        var endpoints13 = 0;
        var startpoint125 = 0;
        var endpoints25 = 0;
        if (crs_calculate_object.marital_status == 'MARRIED'){
            startpoint13 = 84;
            endpoints13 = 112;
            startpoint125 = 119;
            endpoints25 = 140;



        }else {
            startpoint13 = 90;
            endpoints13 = 120;
            startpoint125 = 128;
            endpoints25 = 150;

        }

        var canadian_work_value = crs_calculate_object.work_canada;
        var education_value = crs_calculate_object.education_value;

        if(canadian_work_value >= 35 && canadian_work_value <= 40){

            if (education_value >= startpoint13 && education_value <=endpoints13){
                crs_calculate_object.canada_work_ex_edu_level = 13;
            }
            else if (education_value >= startpoint125 && education_value <=endpoints25){
                crs_calculate_object.canada_work_ex_edu_level = 25;
            }
            else{
                crs_calculate_object.canada_work_ex_edu_level = 0;
            }


        }
        else if(canadian_work_value >= 46 && canadian_work_value <= 80){

            if (education_value >= startpoint13 && education_value <=endpoints13){
                crs_calculate_object.canada_work_ex_edu_level = 25;
            }
            else if (education_value >= startpoint125 && education_value <=endpoints25){
                crs_calculate_object.canada_work_ex_edu_level = 50;
            }
            else{
                crs_calculate_object.canada_work_ex_edu_level = 0;
            }


        }
        console.log('work canada edu : '+crs_calculate_object.canada_work_ex_edu_level);
        score_board();

    }

    /*end of canadian experience and education level*/




    function foreign_work_change() {

        var foreign_work_value = $('.foreign_work_range').val();
        $('.foreign_work_value').text(foreign_work_value+"y");
        crs_calculate_object.work_foreign = foreign_work_value;

        console.log('foreign : '+foreign_work_value);
        foreign_work_language();
        foreign_canadian_work();



    }

    /*foreign work experience*/

    $('.foreign_work_range').on('input',function () {

        foreign_work_change();

    });

    /*end of foreign work experience*/


    /*foreign work and language*/

    function foreign_work_language() {

        var work_foreing_value = crs_calculate_object.work_foreign;

        var under7 = 0;
        var under9 = 0;


        for(var prop in crs_calculate_object.ielts_value){
            var value = crs_calculate_object.ielts_value[prop];
            if (value >= 16 && value <=28){
                under7++;
            }
            else if(value >=29 && value<=34){
                under9++;
            }
        }

        /*education value*/
        var education = crs_calculate_object.education_value;

        /*decision making*/
        if(under7 + under9 == 4){

            if (under7 >=1){
                if (work_foreing_value <1){
                    crs_calculate_object.language_foreign_ex = 0;
                }
                else if (work_foreing_value >=1 && work_foreing_value <=2){
                    crs_calculate_object.language_foreign_ex = 13;
                }
                else if (work_foreing_value >=3){
                    crs_calculate_object.language_foreign_ex = 25;
                }
            }
            else{

                if (work_foreing_value <1){
                    crs_calculate_object.language_foreign_ex = 0;
                }
                else if (work_foreing_value >=1 && work_foreing_value <=2){
                    crs_calculate_object.language_foreign_ex = 25;
                }
                else if (work_foreing_value >=3){
                    crs_calculate_object.language_foreign_ex = 50;
                }

            }

        }
        /*decision making*/

        console.log('foreign  and language : '+crs_calculate_object.language_foreign_ex);
        score_board();

    }

    /*end of foreign and language */

    /*foreign work and canadian work trans*/

    function foreign_canadian_work() {

        var canadian_work_value = crs_calculate_object.work_canada;
        var foreign_work_value = crs_calculate_object.work_foreign;

        if (canadian_work_value == 40){

            if (foreign_work_value >=1 && foreign_work_value <= 2){
                crs_calculate_object.canada_foreign_ex = 13;
            }
            else if (foreign_work_value >=3){

                crs_calculate_object.canada_foreign_ex = 25;
            }
            else{
                crs_calculate_object.canada_foreign_ex = 0;
            }
        }
        else if(canadian_work_value >40){

            if (foreign_work_value >=1 && foreign_work_value <= 2){
                crs_calculate_object.canada_foreign_ex = 25;
            }
            else if (foreign_work_value >=3){

                crs_calculate_object.canada_foreign_ex = 50;
            }
            else{
                crs_calculate_object.canada_foreign_ex = 0;
            }
        }

        console.log('foreing  cana : '+crs_calculate_object.canada_foreign_ex);



    }

    /*end of foreign work and canadian wrok trans*/


    function trade_language() {

        var under7 = 0;
        var under9 = 0;
        var under5 = 0;
        var button_status = crs_calculate_object.trade_status;


        if (button_status == 'YES'){


            for(var prop in crs_calculate_object.ielts_value){
                var value = crs_calculate_object.ielts_value[prop];

                if (value >= 6 && value <=15){
                    under5++;
                }
                else if (value >= 16 && value <=28){
                    under7++;
                }
                else if(value >=29 && value<=34){
                    under9++;
                }

            }


            if (under5 + under7 + under9 == 4){

                if (under5 >=1){
                    crs_calculate_object.language_trade = 25;
                }
                else{
                    crs_calculate_object.language_trade = 50;
                }
            }
            else{
                crs_calculate_object.language_trade = 0;
            }

        }
        else{
            crs_calculate_object.language_trade = 0;
        }
        console.log('trade'+crs_calculate_object.language_trade);
        score_board();

    }

    /*trade button click value calculation*/

    $('.canadian_trade_btn').on('click',function () {


        var button_value = $(this).val();

        if (button_value == 'YES'){
            crs_calculate_object.trade_status = button_value;
            trade_language();
        }
        else{
            crs_calculate_object.trade_status = button_value;
            crs_calculate_object.language_trade = 0;
            trade_language();

        }


    });

    /*end of trade*/


    /*spouse area*/


    /*spouse education */

    $('.spouse_education_range').on('input',function () {

        var education_function = $(this).val();

        if (education_function <=1){

            crs_calculate_object.spouse_edu = 0;
            $('.spouse_education_text').text('Less than secondary school (high school)');

        }
        else if(education_function == 2){
            crs_calculate_object.spouse_edu = 2;
            $('.spouse_education_text').text('Secondary diploma (high school graduation)');

        }
        else if(education_function == 3){
            crs_calculate_object.spouse_edu = 6;
            $('.spouse_education_text').text('One-year degree, diploma or certificate from  a university, college, trade or technical school, or other institute');

        }
        else if(education_function == 4){
            crs_calculate_object.spouse_edu = 7;
            $('.spouse_education_text').text('Two-year program at a university, college, trade or technical school, or other institute');

        }
        else if(education_function == 5){
            crs_calculate_object.spouse_edu = 8;
            $('.spouse_education_text').text('Bachelor’s degree OR  a three or more year program at a university, college, trade or technical school, or other institute');

        }
        else if(education_function == 6){
            crs_calculate_object.spouse_edu = 9;
            $('.spouse_education_text').text('Two or more certificates, diplomas, or degrees. One must be for a program of three or more years');

        }
        else if(education_function == 7){
            crs_calculate_object.spouse_edu = 10;
            $('.spouse_education_text').text('Master’s degree, OR professional degree needed to practice in a licensed profession (For “professional degree,” the degree program must have been in: medicine, veterinary medicine, dentistry, optometry, law, chiropractic medicine, or pharmacy.)');

        }
        else if(education_function == 8){
            crs_calculate_object.spouse_edu = 10;
            $('.spouse_education_text').text('Doctoral level university degree (Ph.D.))');

        }

        console.log('edu_spouse'+crs_calculate_object.spouse_edu);

    });

    /*end of spouse education*/


    function spouse_canadian_work_change() {

        var spouse_canadian_work_ex_value = $('.spouse_canadian_work_ex_range').val();

        $('.spouse_canadian_work_ex_value').text(spouse_canadian_work_ex_value+'y');



            if (spouse_canadian_work_ex_value <1){
                crs_calculate_object.spouse_work = 0;
            }
            else if(spouse_canadian_work_ex_value == 1){
                crs_calculate_object.spouse_work = 5;
            }
            else if(spouse_canadian_work_ex_value == 2){
                crs_calculate_object.spouse_work = 7;
            }
            else if(spouse_canadian_work_ex_value == 3){
                crs_calculate_object.spouse_work = 8;
            }
            else if(spouse_canadian_work_ex_value == 4){
                crs_calculate_object.spouse_work = 9;
            }
            else if(spouse_canadian_work_ex_value >=5){
                crs_calculate_object.spouse_work = 10;
            }

            console.log('spouse work : '+crs_calculate_object.spouse_work);

            score_board();

    }

    /*spouse canadian experience*/

    $('.spouse_canadian_work_ex_range').on('input',function () {


        spouse_canadian_work_change();

    });

    /*end of  spouse canadian experience*/


    /* spouse ielts button*/
    $('.spouse_ielts_btn').on('click',function () {

        if ($(this).val() == 'YES'){
            crs_calculate_object.spouse_ielts_status = $(this).val();

            $('.spouse_ielts_show').slideDown('slow');
            language_change_bangla();

        }
        else{
            crs_calculate_object.spouse_ielts_status = $(this).val();
            $('.spouse_ielts_show').slideDown('slow');
            $('.spouse_ielts_text').text('spouse predicted Results of IELTS');
        }

    });

    /*spouse ielts button*/

    /*spouse ielts listening*/

    function spouse_ielts_listening_change() {

        var listening = $('.spouse_ielts_listening_range').val();
        $('.spouse_ielts_listening_value').text(listening);



            if(listening <=4.5){

                crs_calculate_object.spouse_ielts.listening = 0;
            }
            else if(listening >=5 && listening<= 5.5){
                crs_calculate_object.spouse_ielts.listening = 1;
            }
            else if(listening >=6 && listening <= 7.5){
                crs_calculate_object.spouse_ielts.listening = 3;
            }
            else if(listening >=8){
                crs_calculate_object.spouse_ielts.listening = 5;
            }

            console.log('spouse listening : '+crs_calculate_object.spouse_ielts.listening);
            score_board();

        }

    $('.spouse_ielts_listening_range').on('input',function () {

        spouse_ielts_listening_change();

    });

    /*end spouse ielts listening*/

    /*spouse ielts reading*/

    function spouse_ielts_reading_change() {

        var reading = $('.spouse_ielts_reading_range').val();
        $('.spouse_ielts_reading_value').text(reading);



        if(reading <=3.5){

            crs_calculate_object.spouse_ielts.reading = 0;
        }
        else if(reading >=4 && reading<= 5.5){
            crs_calculate_object.spouse_ielts.reading = 1;
        }
        else if(reading >=6 && reading <= 6.5){
            crs_calculate_object.spouse_ielts.reading = 3;
        }
        else if(reading >=7){
            crs_calculate_object.spouse_ielts.reading = 5;
        }

        console.log('spouse reading : '+crs_calculate_object.spouse_ielts.reading);
        score_board();

    }

    $('.spouse_ielts_reading_range').on('input',function () {

        spouse_ielts_reading_change();

    });

    /*end spouse ielts reading*/

    /*spouse ielts writing*/

    function spouse_ielts_writing_change() {

        var writing = $('.spouse_ielts_writing_range').val();
        $('.spouse_ielts_writing_value').text(writing);



        if(writing <=4.5){

            crs_calculate_object.spouse_ielts.writing = 0;
        }
        else if(writing >=5 && writing<= 5.5){
            crs_calculate_object.spouse_ielts.writing = 1;
        }
        else if(writing >=6 && writing <= 6.5){
            crs_calculate_object.spouse_ielts.writing = 3;
        }
        else if(writing >=7){
            crs_calculate_object.spouse_ielts.writing = 5;
        }

        console.log('spouse writing : '+crs_calculate_object.spouse_ielts.writing);

    }

    $('.spouse_ielts_writing_range').on('input',function () {

        spouse_ielts_writing_change();

    });

    /*end spouse ielts writing*/

    /*spouse ielts speaking*/

    function spouse_ielts_speaking_change() {

        var speaking = $('.spouse_ielts_speaking_range').val();
        $('.spouse_ielts_speaking_value').text(speaking);



        if(speaking <=4.5){

            crs_calculate_object.spouse_ielts.speaking = 0;
        }
        else if(speaking >=5 && speaking<= 5.5){
            crs_calculate_object.spouse_ielts.speaking = 1;
        }
        else if(speaking >=6 && speaking <= 6.5){
            crs_calculate_object.spouse_ielts.speaking = 3;
        }
        else if(speaking >=7){
            crs_calculate_object.spouse_ielts.speaking = 5;
        }

        console.log('spouse writing : '+crs_calculate_object.spouse_ielts.speaking);
        score_board();

    }

    $('.spouse_ielts_speaking_range').on('input',function () {

        spouse_ielts_speaking_change();

    });

    /*end spouse ielts speaking/





    /*end of spouse area*/




    /*Provincial nomination?*/

    $('.provincial_btn').on('click',function () {

        var provincial_btn_value = $(this).val();
        if(provincial_btn_value == 'YES'){

            crs_calculate_object.pro_nomination = 600;
        }
        else{
            crs_calculate_object.pro_nomination = 0;
        }

        console.log('nomi : '+crs_calculate_object.pro_nomination);
        score_board();

    });

    /*end Provincial nomination?*/

    /*offer of employment in Canada*/

    $('.offer_canada_btn').on('click',function () {

        var offer_canada_value = $(this).val();
        console.log(offer_canada_value);

        if (offer_canada_value == "NOC OOX"){

            crs_calculate_object.offer_of_employment = 200;

        }
        else if (offer_canada_value == 'NOC O/A/B'){

            crs_calculate_object.offer_of_employment = 50;
        }
        else{
            crs_calculate_object.offer_of_employment = 0;

        }
        console.log('offer canada : '+crs_calculate_object.offer_of_employment);
        score_board();

    });

    /*end offer of employment in Canada*/


    /*family in canada*/

    $('.family_canada_btn').on('click',function () {

        var family_btn_value = $(this).val();

        if (family_btn_value == 'YES'){
            crs_calculate_object.siblings_canada = 15;

        }
        else{
            crs_calculate_object.siblings_canada = 0;
        }
        console.log('sibling : '+crs_calculate_object.siblings_canada);
        score_board();

    });

    /*end of family in canada*/


    /*education in canada*/

    $('.canada_education_range').on('input',function () {

        var canada_education_value = $(this).val();
        console.log(canada_education_value);
        if (canada_education_value == 1){

            $('.canada_education_text').text('Post-secondary education in  Canada – credential of one or two years');
            crs_calculate_object.canadian_education = 15;
        }
        else if (canada_education_value == 2){

            $('.canada_education_text').text('Post-secondary education in  Canada – credential three years or longer');
            crs_calculate_object.canadian_education = 30;
        }
        else{
            $('.canada_education_text').text('None');
            crs_calculate_object.canadian_education = 0;
        }

        console.log('education canada : '+crs_calculate_object.canadian_education);
        score_board();

    });

    /*end of educcation in canada*/

    $('.btn-yes-no').click(function () {

        $(this).addClass('background-yellow');
        $(this).siblings().removeClass('background-yellow');

    });




    function score_send(){

        var count = 0;
        var store = [];

        for (var first_dimension in crs_calculate_object){

            var dimension1 = crs_calculate_object[first_dimension];

            if (typeof (dimension1) == "object"){


                for (var second_dimension in dimension1){

                    store[first_dimension+'_'+second_dimension] = dimension1[second_dimension];
                }


            }
            else{
               store[first_dimension] = dimension1;
            }


        }



/*
        var output = Object.entries(store).map(([key, value])=>({key,value}));
        console.log(output);

        var send = JSON.stringify(output);*/

        var arr = [];
        for (var i in store) {
            if (store.hasOwnProperty(i)) {
                arr.push([i, store[i]]);
            }
        }

        var text_email_or_phone = '';
        console.log(typeof (arr));
        if(crs_calculate_object.email.length > 7){

            text_email_or_phone = "and a detailed report has been sent to your email "+crs_calculate_object.email;



        }

        var answer = "";

        answer += '<h3>';
        answer +=   "Dear "+crs_calculate_object.name+" ,";
        answer += '</h3>';


        answer +="<p>Your CRS score comes to "+"<b>"+result_between(crs_calculate_object.total_sum)+ "</b> "+text_email_or_phone;
        answer +="</p>";

        answer += "<p>Book Appointment -> </p>";

        $('.answer-modal').html(answer);
        $('#exampleModalanswer').modal('show');


        $.ajax({
            type: "POST",
            url: 'process.php',
            data: {"students" :arr},
            cache: false,
            success: function(result){

            }
        });

    }



    /*send button*/

    $('.send-button').click(function (event) {

        var value_language = '';
        var language = $('.language');
        language.each(function () {
            if ($(this).hasClass('background-yellow')){
                value_language = $(this).val();
            }


        });


        var email = $('.email-input-filed');
        var phone = $('.phone-input-filed');
        var name  = $('.name-input-filed');

        var email_value = email.val();
        var phone_value = phone.val();
        var name_value = name.val();

       var email_length = email_value.length;
       var phone_length = phone_value.length;
       var name_length = name_value.length;



        if (name_length >2 && phone_length >= 10){

            $('#exampleModal').modal('hide');
            crs_calculate_object.phone = '+88'+phone_value;
            crs_calculate_object.email = email_value;
            crs_calculate_object.name = name_value;


        }
        else{
            if (!(name_length>= 2)){
                name.addClass('back-ground-red');
                if (value_language == 'বাংলা' ){
                    name.attr("placeholder", "আপনার পুরো নাম লিখুন");
                }
                else{
                    name.attr("placeholder", "please enter you name");
                }

            }
            if (!(phone_length >=10) ){
                phone.addClass('back-ground-red');
                if (value_language == 'বাংলা' ){
                    phone.attr("placeholder", "ফোন নম্বর");
                }
                else{
                    phone.attr("placeholder", "Please enter phone");
                }

            }



        }






    });

    /*end send button*/



function score_board() {

    var total_sum = 0;
    var married_sum = 0;
    var additional_points_sum = 0;
    var last_points_for_nomi = 0;

    var count = 0;
    var spouse = 0;


    for(var prop in crs_calculate_object){



        var value = crs_calculate_object[prop];


        if (typeof (value) != 'string') {

            if ( prop == 'spouse_edu' || prop == 'spouse_work' || prop == 'spouse_ielts_status' || prop == 'spouse_ielts'){
                spouse++;
                var prop2 = crs_calculate_object[prop];

                if (crs_calculate_object.marital_status == 'MARRIED'){

                    if (typeof (prop2) != 'string' ){

                        if (typeof (prop2) == "object"){
                            for (var marrital_points in prop2){
                                married_sum = married_sum + prop2[marrital_points];
                                total_sum = total_sum + prop2[marrital_points];
                            }
                        }else{

                            married_sum = married_sum + prop2;
                            total_sum = total_sum + prop2;

                        }

                    }
                }



            }

            else if(prop == 'language_edu' || prop == 'canada_work_ex_edu_level' || prop == 'language_foreign_ex' || prop =='canada_foreign_ex' || prop == 'language_trade'){

                var previous = additional_points_sum;

                additional_points_sum = additional_points_sum + crs_calculate_object[prop];

                if(additional_points_sum >= 100){

                    var difference = 100 - previous;
                    if (difference > 1){

                        total_sum = total_sum + difference;

                    }



                }else{
                    total_sum = total_sum + crs_calculate_object[prop];
                }


            }
            else if(prop == 'pro_nomination' || prop == 'offer_of_employment' || prop =='canadian_education' || prop == 'siblings_canada'){

                var previous_here = last_points_for_nomi;

                last_points_for_nomi = last_points_for_nomi + crs_calculate_object[prop];

                if (last_points_for_nomi >= 600){

                    var difference_here = 600 - previous_here;
                    if (difference_here > 1){

                        total_sum = total_sum + difference_here;
                    }

                }else{

                    total_sum =  total_sum + crs_calculate_object[prop];
                }
            }
            else if (typeof (value) == "object") {

                for (var prop1 in value) {
                    total_sum = total_sum + value[prop1];
                }

            }else{

                total_sum = total_sum + value;

            }
        }




    }





    crs_calculate_object.total_sum = ""+ total_sum;
    console.log('marriend_sum :'+married_sum);
    console.log('total_sum :'+crs_calculate_object.total_sum);

    $.ajax({
        type: "POST",
        url: 'better_then.php',
        data: {"total_sum" :crs_calculate_object.total_sum},
        cache: false,
        success: function(data){
            toast($.trim(data));

        }
    });


}


$('.btn-send-score').on('click',function () {

    score_send();

});
function result_between(result) {


    var start = result -10;
    var end = parseInt(result) + 10;

    if (result == 0){

        start =0;
        end = 0;
    }

    return start +'-'+end;


}


console.log(crs_calculate_object.marital_status);



    $.getJSON('http://gd.geobytes.com/GetCityDetails?callback=?', function(data) {

        console.log(data);
        console.log(data['geobytesremoteip']);
        crs_calculate_object.ip = data['geobytesremoteip'];
        crs_calculate_object.city = data['geobytesregion']
    });


    /*toast*/

    var click_count = 0;

   function toast(data) {




       if (click_count ==0){
           click_count = 1;

           setTimeout(function(){
               click_count = 0;
           }, 5000);
           $.toast({

               text:''+crs_calculate_object.name+"! You're better than "+data+"% of the applicants!",
               showHideTransition: 'slide',
               icon: 'info',
               loader: false,
               hideAfter: 3000,
               textAlign: 'left',
               allowToastClose: true,
               stack: 1,

           });

       }


   }


   $('#exampleModal').modal('show');




    function language_change_bangla() {

       var value_language = '';
       var language = $('.language');
       language.each(function () {
          if ($(this).hasClass('background-yellow')){
              value_language = $(this).val();
          }


       });



        if (value_language == 'বাংলা'){

            $('.marital_status').text('বৈবাহিক অবস্থা');
            $('.single-btn').text('অবিবাহিত');
            $('.married-btn').text('বিবাহিত');
            $('.separated-btn').text('বিবাহবিচ্ছেদ');
            $('.age-head').text('বয়স');
            $('.years-of-education').text('শিক্ষার সময়কাল');
            $('.ielts_status_question').text('আপনি কি IELTS দিয়েছেন?');
            $('.ielts_status_btn_yes').text('হ্যাঁ ');
            $('.ielts_status_btn_no').text('না');
            $('.ielts_result_text').text('আপনার IELTS এর ফলাফল');
            $('.listening_text_bangla').text('লিসেনিং');
            $('.reading_text_bangla').text('রিডিং');
            $('.writing_text_bangla').text('রাইটিং');
            $('.speaking_text_bangla').text('স্পিকিং');
            $('.tef_text_bangla').text('আপনি কি TEF দিয়েছেন ?');
            $('.tef_status_btn_yes').text('হ্যাঁ ');
            $('.tef_status_btn_no').text('না');
            $('.tef_text').text('আপনার TEF এর ফলাফল');
            $('.work_trade_text').text('কাজের অভিজ্ঞতা এবং ব্যবসা');
            $('.work_ex_canada').text('কানাডায় কাজের অভিজ্ঞতা');
            $('.work_foreign').text('বিদেশে কাজের অভিজ্ঞতা');
            $('.trade_canada').text('কানাডায় ব্যবসার সার্টিফিকেট');
            $('.canadian_trade_btn_yes').text('হ্যাঁ ');
            $('.canadian_trade_btn_no').text('না ');
            $('.addition_points_text').text('অতিরিক্ত বিষয়সমূহ');
            $('.provincial_nomi_status').text('প্রাদেশিক মনোনয়ন ?');
            $('.provincial_btn_yes').text('হ্যাঁ');
            $('.provincial_btn_no').text('না');
            $('.offer_canada_text').text('কানাডায় কোনো কাজের সুযোগ?');
            $('.offer_canada_btn_no').text('না');
            $('.offer_canada_btn_nox').text('এনওসি  ওওএক্স');
            $('.offer_canada_btn_noc').text('এনওসি ও/এ/সি');
            $('.family_canada_text').text('-  কানাডায় পরিবার আছে ?');
            $('.family_canada_btn_yes').text('হ্যাঁ');
            $('.family_canada_btn_no').text('না');
            $('.education_canada_head').text('কানাডায় শিক্ষা গ্রহণ');
            $('.btn_send_score_text').text('আপনার চূড়ান্ত CRS স্কোর নিন');
            $('.spouse_text_bangla').text('স্বামী বা স্ত্রী / সাধারণ আইন অংশীদার');
            $('.spouse_education_text_bangla').text('স্বামী বা স্ত্রী শিক্ষার সময়কাল');
            $('.spouse_canadian_work_bangla').text('কানাডায় কাজের অভিজ্ঞতা');
            $('.spouse_ielts_text_bangla').text('আপনার স্বামী বা স্ত্রী কি IELTS দিয়েছেন');
            $('.spouse_ielts_btn_yes').text('হ্যাঁ');
            $('.spouse_ielts_btn_no').text('না');
            $('.spouse_ielts_text').text('স্বামী বা স্ত্রী IELTS এর ফলাফল');
            $('.report_bangla').text('অনলাইন সিআরএস রিপোর্ট');
            $('.enter_full_name').attr('placeholder','আপনার পুরো নাম লিখুন');
            $('.enter_phone').attr('placeholder','ফোন নম্বর');
            $('.enter_email').attr('placeholder','ই-মেইল');
            $('.crs_score_get_button').val('আপনার CRS স্কোর নিন');
            $('.crs_score_via_online').text('অনলাইনের মাধ্যমে সরাসরি আপনার সিআরএস স্কোর নিন');
            $('.description_change').text('কানাডা ইমিগ্রেশন শুধুমাত্র আপনার যোগ্যতা সম্পর্কে নয় - এখন আপনার অ্যাপ্লিকেশনটিকে একটি এক্সপ্রেস এন্ট্রি পুলে জমা দিতে হবে । যেখানে আপনি বিশ্বব্যাপী ১০৩,০০০ অন্যান্য আবেদনকারীদের বিরুদ্ধে প্রতিযোগিতা করবেন।');





        }
        else{
            $('.marital_status').text('Marital status');
            $('.single-btn').text('SINGLE');
            $('.married-btn').text('MARRIED');
            $('.separated-btn').text('SEPARATED');
            $('.age-head').text('AGE');
            $('.years-of-education').text('Years Of Education');
            $('.ielts_status_question').text('Have You given IELTS? ');
            $('.ielts_status_btn_yes').text('YES');
            $('.ielts_status_btn_no').text('NO');
            $('.ielts_result_text').text('Your Results of IELTS');
            $('.listening_text_bangla').text('Listening');
            $('.reading_text_bangla').text('Reading');
            $('.writing_text_bangla').text('Writing');
            $('.speaking_text_bangla').text('Speaking');
            $('.tef_text_bangla').text('Have You given TEF?');
            $('.tef_status_btn_yes').text('YES');
            $('.tef_status_btn_no').text('NO');
            $('.tef_text').text('Your Result of TEF');
            $('.work_trade_text').text('Work Experience and Trade');
            $('.work_ex_canada').text('Canadian Work Experience');
            $('.work_foreign').text('Foreign work Experience ');
            $('.trade_canada').text('Canadian trade certificate');
            $('.canadian_trade_btn_yes').text('YES ');
            $('.canadian_trade_btn_no').text('NO');
            $('.addition_points_text').text('Additional points');
            $('.provincial_nomi_status').text('Provincial nomination?');
            $('.provincial_btn_yes').text('YES');
            $('.provincial_btn_no').text('NO');
            $('.offer_canada_text').text('Offer of employment in Canada ?');
            $('.offer_canada_btn_no').text('NO');
            $('.offer_canada_btn_nox').text('NOC OOX ');
            $('.offer_canada_btn_noc').text('NOC O/A/C ');
            $('.family_canada_text').text('Family in canada?');
            $('.family_canada_btn_yes').text('YES');
            $('.family_canada_btn_no').text('NO');
            $('.education_canada_head').text('Education in Canada');
            $('.btn_send_score_text').text('Get your final CRS score ');
            $('.spouse_text_bangla').text('Spouse / common-law partner ');
            $('.spouse_education_text_bangla').text('Spouse Education');
            $('.spouse_canadian_work_bangla').text('Canadian Work Experience');
            $('.spouse_ielts_text_bangla').text('Have Your spouse given IELTS?');
            $('.spouse_ielts_btn_yes').text('YES');
            $('.spouse_ielts_btn_no').text('NO');
            $('.spouse_ielts_text').text('Spouse Results of IELTS');
            $('.report_bangla').text('Online CRS Report');
            $('.enter_full_name').attr('placeholder','your Full Name');
            $('.enter_phone').attr('placeholder','Your Phone number');
            $('.enter_email').attr('placeholder','Email');
            $('.crs_score_get_button').val('Get your CRS Score');
            $('.crs_score_via_online').text('Get your CRS score directly via online');
            $('.description_change').text('Canada Immigration isn\'t just about your eligibility - now your Application needs to be submitted to an express entry pool as well where you compete against 103,000 other applicants globally');



        }

    }

    $('.language').on('click',function () {

        //var value_language = $(this).val();

        language_change_bangla();




    });



});
