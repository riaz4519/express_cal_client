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


    $('.married').click(function () {

        $(this).addClass('background-yellow') ;
        $(this).siblings().removeClass('background-yellow');
        if($(this).val() == 'MARRIED' ){

            $($('.spouse')).removeClass('spouse-remove');
        }else{
            $($('.spouse')).addClass('spouse-remove');
        }


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