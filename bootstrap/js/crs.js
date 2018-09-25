/**
 * Created by User on 9/25/2018.
 */
$(document).ready(function () {


    var crs_calculate_object = {

        marital_status:'SINGLE',

        age_value:0,

        education_value:0,

        ielts_value:{
                        listening:0,

                        reading:0,

                        writing:0,

                        speaking:0
                    },
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

           // console.log(crs_calculate_object.marital_status);

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

    function education_value(education_function) {
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


    }

    /*end of education function*/
    $('.education-range').on('change',function () {


    var education_function = $(this).val();

    education_value(education_function);



    });





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