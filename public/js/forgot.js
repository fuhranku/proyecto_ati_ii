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
$('#mobile-forgot').keyup(function () {
    if (!mobile_forgot.isValidNumber()) {
        $('#button-phone').prop('disabled', true);
    } else {
        $('#button-phone').prop('disabled', false);
        
    }
})
$('#button-phone').click(function(e) {
    // var data;
    data['phone'] = mobile_forgot.getNumber();
    data['type'] = 'phone';
    console.log(data);
    // AJAX VALIDATION
    e.preventDefault();
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
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
                var errorCode = mobile_forgot.getValidationError();
                $('#error_row_phone').removeClass('d-none');
                $('#error_ul_phone').empty();
                $('#error_ul_phone').append('<li>'+telephoneErrorMap[errorCode]+'</li>');
                $('#forgot_confirm').modal("hide");

            }else{
                // console.log(data.success);
                //$('#forgot_confirm').show();
                $('#forgot_confirm').modal("show");

            }
        }
    })
})

$('#button-email').click(function(e) {
    var data = {
        type: 'email'
    };
    data['email_forgot'] = $('input[name="email_forgot"]').val();;
    
    console.log(data['email_forgot']);
    // AJAX VALIDATION
    e.preventDefault();
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Ajax POST request
    $.ajax({
        url: forgot_post_url,
        method: 'post',
        data: data,
        
        dataType: "json",
        success: function(data){
            // If there's an error don't let go to next step
            if( !$.isEmptyObject((data.errors))){
                validation = false;
                // data.errors = JSON.parse(JSON.stringify(data.errors));                      
                $.each((data.errors), function(key, value){
                    console.log(key);
                    console.log(value);
                    
                    $('#error_row_'+key).removeClass('d-none');
                    $('#error_ul_'+key).empty();
                    $.each(value, function(key2,value2){
                        $('#error_ul_'+key).append('<li>'+value2+'</li>');
                    })
                });
                $('#forgot_confirm').modal("hide");
            }else{
                console.log("asdsadasd");
                
                $('#forgot_confirm').modal("show");

            }
            // if (!$.isEmptyObject((data.success))) {
            //     console.log('aaaaa');
            //     $('#forgot_confirm').modal("show");
                
            // }
        }
    })
})

$('#button-id').click(function(e) {
    // var data;
    data['id'] = $('input[name="input-id"]').val();;
    data['type'] = 'id';
    console.log(data['id']);
    // AJAX VALIDATION
    e.preventDefault();
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Ajax POST request
    $.ajax({
        url: forgot_post_url,
        method: 'post',
        data: data,
        async: false,
        success: function(data){
            // If there's an error don't let go to next step
            if( !$.isEmptyObject(data.errors) ){
                validation = false;                        
                $.each(data.errors, function(key, value){
                    console.log(key);
                    
                    $('#error_row_'+key).removeClass('d-none');
                    $.each(value, function(key2,value2){
                        $('#error_ul_'+key).append('<li>'+value2+'</li>');
                    })
                });
                $('#forgot_confirm').modal("hide");
            }else{
                console.log(data);
            }
        }
    })
})

$('#pass-button').click(function(e) {
    // var data;
    data ={
        newPassword: $('input[name="newPassword"]').val(),
        confPassword: $('input[name="confPassword"]').val(),
    };

    console.log(data['newPassword']);
    console.log(data['confPassword']);
    // AJAX VALIDATION
    e.preventDefault();
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Ajax POST request
    $.ajax({
        url: pass_post_url,
        method: 'post',
        data: data,
        async: false,
        success: function(data){
            // If there's an error don't let go to next step
            if( !$.isEmptyObject(data.errors) ){
                validation = false;                        
                $.each(data.errors, function(key, value){
                    console.log(key);
                    
                    $('#error_row_'+key).removeClass('d-none');
                    $.each(value, function(key2,value2){
                        $('#error_ul_'+key).append('<li>'+value2+'</li>');
                    })
                });
                $('#change_password_message').modal("hide");
            }else{
                $('#change_password_message').modal("show");
            }
        }
    })
})

function optionRadioPass(name){
    var option =$('input[name="' + name + '"]:checked').val();
    switch(option){
        // Ver mi publicación
        case "1":
            $('#change_password_message').modal("hide");
            $('#change_password').modal("hide");
            $('#sign_in').modal("show");
            break;
        // Seguir navegando en el portal
        case "2":
            $('#change_password_message').modal("hide");
            $('#change_password').modal("hide");
            break;
        // Salir
        case "3":
            window.close();
            break;
    }
}