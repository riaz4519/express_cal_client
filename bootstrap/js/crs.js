/**
 * Created by User on 9/25/2018.
 */
$(document).ready(function () {





    var crs_calculate_object = {

        marital_status:'SINGLE',

        age_value:0,

        education_value:0,
        ielts_status:'',

        ielts_value:{
                        listening:0,

                        reading:0,

                        writing:0,

                        speaking:0
                    },
        tef_status:'',
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

        spouse_ielts:{
                        listening:0,

                        reading:0,

                        writing:0,

                        speaking:0
                     },
        spouse_tef:{
                    listening:0,

                    reading:0,

                    writing:0,

                    speaking:0
                    },
        language_edu:0,

        canada_work_ex_edu_level:0,

        language_foreign_ex:0,

        canada_foreign_ex:0,

        trade_status:'',

        language_trade:0,

        pro_nomination:0,

        offer_of_employment:0,

        canadian_education:0,

        siblings_canada:0


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

    });

    /*end of married status change*/



    function age_value(age) {

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
                console.log('age');

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
                console.log('age');

            }
            else if (age == 18) {

                crs_calculate_object.age_value = 90;
                console.log('age');

            }
            else if (age == 19) {

                crs_calculate_object.age_value = 95;
                console.log('age');

            }
            else if (age >= 20 && age <= 29) {

                crs_calculate_object.age_value = 100;
                console.log('age');

            }
            else if (age == 30) {

                crs_calculate_object.age_value = 95;
                console.log('age');

            }
            else if (age == 31) {

                crs_calculate_object.age_value = 90;
                console.log('age');

            }
            else if (age == 32) {

                crs_calculate_object.age_value = 85;
                console.log('age');

            } else if (age == 33) {

                crs_calculate_object.age_value = 80;
                console.log('age');

            } else if (age == 34) {

                crs_calculate_object.age_value = 75;
                console.log('age');

            }
            else if (age == 35) {

                crs_calculate_object.age_value = 70;
                console.log('age');

            }
            else if (age == 36) {

                crs_calculate_object.age_value = 65;
                console.log('age');

            }
            else if (age == 37) {

                crs_calculate_object.age_value = 60;
                console.log('age');

            }
            else if (age == 38) {

                crs_calculate_object.age_value = 55;
                console.log('age');

            }
            else if (age == 39) {

                crs_calculate_object.age_value = 50;
                console.log('age');

            }
            else if (age == 40) {

                crs_calculate_object.age_value = 40;
                console.log('age');

            }
            else if (age == 41) {

                crs_calculate_object.age_value = 35;
                console.log('age');

            }
            else if (age == 42) {

                crs_calculate_object.age_value = 25;
                console.log('age');

            }
            else if (age == 43) {

                crs_calculate_object.age_value = 15;
                console.log('age');

            }
            else if (age == 44) {

                crs_calculate_object.age_value = 5;
                console.log('age');

            }
            else if (age >= 45) {

                crs_calculate_object.age_value = 0;
                console.log('age');

            }

        }

        console.log(crs_calculate_object.age_value);

    }

    /*for the age*/

    $('.age-range').on('change',function () {

        var age = $(this).val();
        $('.age-change').text(age);
        age_value(age);

    })
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

        console.log(crs_calculate_object.education_value);
        education_language_trans();
        canadian_work_education();


    }

    /*end of education function*/

    $('.education-range').on('change',function () {

             education_value();

    });


    /*ielts button*/
    $('.ielts_status_btn').on('click',function () {

       if ($(this).val() == 'YES'){
           crs_calculate_object.ielts_status = $(this).val();

           $('.ielts_results').slideDown('slow');
           $('.ielts_text').text('Your Results of IELTS');

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

        
    }
    
    /*end function ilets listening*/
    

    /*ielts listening */

    $('.ielts_listening_range').on('change',function () {

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
            console.log(crs_calculate_object.ielts_value.reading);



        }
        education_language_trans();
        foreign_work_language();
        trade_language();

    }

    /*end function ilets reading*/


    /*ielts reading */
    $('.ielts_reading_range').on('change',function () {

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
            console.log(crs_calculate_object.ielts_value.writing);



        }
        education_language_trans();
        foreign_work_language();
        trade_language();

    }

    /*ielts writing*/
    $('.ielts_writing_range').on('change',function () {

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
            console.log(crs_calculate_object.ielts_value.speaking);



        }
        education_language_trans();
        foreign_work_language();

    }
    /*ielts speaking*/
    $('.ielts_speaking_range').on('change',function () {

        ielts_speaking_change();

    });

    /*end ielts speaking**/


    /*tef button*/
    $('.tef_status_btn').on('click',function () {

        if ($(this).val() == 'YES'){
            crs_calculate_object.tef_status = $(this).val();

            $('.tef_results').slideDown('slow');
            $('.tef_text').text('Your Results of TEF');

        }
        else{
            crs_calculate_object.tef_status = $(this).val();
            $('.tef_results').slideDown('slow');
            $('.tef_text').text('Your predicted Results of TEF');
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
        console.log(crs_calculate_object.tef_value.listening);


    }
    /*tef listening*/

    $('.tef_listening_range').on('change',function () {

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
        console.log(crs_calculate_object.tef_value.reading);


    }

    /*tef reading */
    $('.tef_reading_range').on('change',function () {

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
        console.log(crs_calculate_object.tef_value.writing);


    }
    /*tef writing*/
    $('.tef_writing_range').on('change',function () {

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
        console.log(crs_calculate_object.tef_value.speaking);


    }
    /*tef speaking*/
    $('.tef_speaking_range').on('change',function () {

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

        }else{

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
        console.log(crs_calculate_object.work_canada);
        canadian_work_education();
        foreign_canadian_work();

    }
    /*canadian work experience  */
    $('.canadian_work_ex_range').on('change',function () {



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
        console.log(under7);
        console.log(under9);
        /*end find*/

        /*eudcatrion value*/
        var education = crs_calculate_object.education_value;

        /*decision making*/
        if(under7 + under9 == 4){

            if (under7 >=1){
                if (education >= 84 && education <=111){
                    crs_calculate_object.language_edu = 13;
                }
                if (education >= 112 && education <=150){
                    crs_calculate_object.language_edu = 25;
                }
                else{
                    crs_calculate_object.language_edu = 0;
                }
            }
            else{

                if (education >= 84 && education <=111){
                    crs_calculate_object.language_edu = 25;
                }
                else if (education >= 112 && education <=150){
                    crs_calculate_object.language_edu = 50;
                }
                else{
                    crs_calculate_object.language_edu = 0;
                }


            }
            console.log(crs_calculate_object.language_edu);
        }
        /*decision making*/




    }

    /*end of education and language*/



    /*canadian experience and education level trans*/
    function canadian_work_education() {

        var canadian_work_value = crs_calculate_object.work_canada;
        var education_value = crs_calculate_object.education_value;

        if(canadian_work_value >= 35 && canadian_work_value <= 40){

            if (education_value >= 84 && education_value <=111){
                crs_calculate_object.canada_work_ex_edu_level = 13;
            }
            else if (education_value >= 112 && education_value <=150){
                crs_calculate_object.canada_work_ex_edu_level = 25;
            }
            else{
                crs_calculate_object.canada_work_ex_edu_level = 0;
            }


        }
        else if(canadian_work_value >= 46 && canadian_work_value <= 80){

            if (education_value >= 84 && education_value <=111){
                crs_calculate_object.canada_work_ex_edu_level = 25;
            }
            else if (education_value >= 112 && education_value <=150){
                crs_calculate_object.canada_work_ex_edu_level = 50;
            }
            else{
                crs_calculate_object.canada_work_ex_edu_level = 0;
            }


        }
        console.log(crs_calculate_object.canada_work_ex_edu_level);

    }

    /*end of canadian experience and education level*/




    function foreign_work_change() {

        var foreign_work_value = $('.foreign_work_range').val();
        $('.foreign_work_value').text(foreign_work_value+"y");
        crs_calculate_object.work_foreign = foreign_work_value;

        console.log('foreign'+foreign_work_value);
        foreign_work_language();
        foreign_canadian_work();



    }

    /*foreign work experience*/

    $('.foreign_work_range').on('change',function () {

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
        console.log(under7);
        console.log(under9);
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
            console.log('f'+crs_calculate_object.language_foreign_ex);
        }
        /*decision making*/



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

        console.log('g'+crs_calculate_object.canada_foreign_ex);


        
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

        }


    });

    /*end of trade*/


    /*Provincial nomination?*/

    $('.provincial_btn').on('click',function () {

        var provincial_btn_value = $(this).val();
        if(provincial_btn_value == 'YES'){

            crs_calculate_object.pro_nomination = 600;
        }
        else{
            crs_calculate_object.pro_nomination = 0;
        }

        console.log('nomi'+crs_calculate_object.pro_nomination);

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
        console.log(crs_calculate_object.offer_of_employment);

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
        console.log('sibling'+crs_calculate_object.siblings_canada);

    });

    /*end of family in canada*/

    $('.btn-yes-no').click(function () {

        $(this).addClass('background-yellow');
        $(this).siblings().removeClass('background-yellow');

    });






/*

    $('input[name=married]').on('click',function () {

        var married_value = null;

        $('.married').each(function () {

            if ($(this).hasClass('background-yellow')){

                married_value = $(this).val();
            }
        });

        console.log(married_value);

    });


*/


console.log(crs_calculate_object.marital_status);
crs_calculate_object.age_value = 12;
console.log(crs_calculate_object.spouse_ielts.listening);




});