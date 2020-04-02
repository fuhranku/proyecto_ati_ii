var mobile_forgot;

$(document).ready(function(){
    var mobile_forgot_input = document.querySelector("#mobile-forgot");

    if (mobile_forgot_input !== null) {
    mobile_forgot = window.intlTelInput(mobile_forgot_input,{
            utilsScript: utilsScript,
            onlyCountries: ['es','ve'],
            separateDialCode:true,
            initialCountry:""
        });
    }
});

$('#button-phone').click(function(event) {
    var data={};
    data = mobile_forgot.getNumber();
    console.log(data);
    
    // Ajax POST request
    $.ajax({
        url: forgot_post_url,
        method: 'post',
        data: data,
        async: false,
        success: function(data){
            // If there's an error don't let go to next step
            if( !mobile_forgot.isValidNumber() ){
                validation = false;
                console.log('error');
                
                $('#errors-row-phone').removeClass('d-none');
                $.each(data.errors, function(key, value){
                    console.log(value);
                    $('.form-error').append('<li>'+value+'</li>');
                });
            }else{
                console.log(data.success['forgot']);
            }
        }
    })
})

