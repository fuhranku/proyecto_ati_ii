var step = 0;
var panelText = [
    'Cómo supo de nosotros ',
    'Registrar Usuario',
    'Idioma en que desea visualizar el portal al iniciar sesión',
    'Datos de inicio de sesión',
    'Frecuencia e información a recibir ',
    'Datos de Facturación',
]
var mobile_pn, landline_pn, mobile_pj, landline_pj;
var validation;

$(".checkbox-menu").on("change", "input[type='checkbox']", function() {
    $(this).closest("li").toggleClass("active", this.checked);
 });

 $(document).on('click', '.allow-focus', function (e) {
    e.stopPropagation();
  });

$('#checkbox-natural').on('change', function() {
   $('#checkbox-juridica').prop('checked', false); 
    
});   

$('#checkbox-juridica').on('change', function() {
   $('#checkbox-natural').prop('checked', false);  
});   

$(document).ready(function(){
   $('#panel-heading').text(panelText[step]);
   $('.step4_checkbox').click(function(event) {
       if( $(this).is("#step4_checkbox4")){
            $('#step2_other_menu').removeClass('d-none');
       }else{
            $('#step2_other_menu').addClass('d-none');
       }
  });
  $('#b-step-0').addClass('text-underline');
  $('.b-step').click(function(event) {
    $('.b-step').not(this).removeClass('text-underline');
    $(this).addClass('text-underline');  
    // Remove old content
    $("#step-"+step).addClass('d-none');
    // Add new content
    $('#step-'+$(this).data('step')).removeClass('d-none');
    step = + $(this).data('step');
    // Update panel heading text
    $('#panel-heading').text(panelText[step]);
    if(step > 4){
        $('#continuar-btn').addClass('invisible');
    }
    if(step > 0){
        $('#atras-btn').removeClass('invisible');
    }
    if(step < 1){
        $('#atras-btn').addClass('invisible');
    }
    if(step < 5){
        $('#continuar-btn').removeClass('invisible');
        $('#btns-step04').removeClass('d-none');
        $('#btns-step5').addClass('d-none');
    }
    if(step == 5){
        $('#btns-step04').addClass('d-none');
        $('#btns-step5').removeClass('d-none');
    }
    // Update form step attribute
    $('#continuar-btn').attr('form','form-step-'+step);
    });
    // Initialize intl-tlf input plugin
    // $(".phone-step0").intlTelInput({
    //     utilsScript: utilsScript
    // });
    // Initialize sign_up screen phones input tag
    var mobile_pn_input = document.querySelector("#mobile-pn");
    var landline_pn_input = document.querySelector("#landline-pn");
    var mobile_pj_input = document.querySelector("#mobile-pj");
    var landline_pj_input = document.querySelector("#landline-pj");
    var phone_step4_input = document.querySelector("#phone-step4");
    // Initialize natural mobile number input
    mobile_pn = window.intlTelInput(mobile_pn_input,{
        utilsScript: utilsScript,
        onlyCountries: ['es','ve'],
        separateDialCode:true,
        initialCountry:""
    });
    // Initialize natural legal number input
    landline_pn = window.intlTelInput(landline_pn_input,{
        utilsScript: utilsScript,
        onlyCountries: ['es','ve'],
        separateDialCode:true,
        initialCountry:""
    });
    // Initialize legal mobile number input
    mobile_pj = window.intlTelInput(mobile_pj_input,{
        utilsScript: utilsScript,
        onlyCountries: ['es','ve'],
        separateDialCode:true,
        initialCountry:""
    });
    // Initialize legal number input
    landline_pj = window.intlTelInput(landline_pj_input,{
        utilsScript: utilsScript,
        onlyCountries: ['es','ve'],
        separateDialCode:true,
        initialCountry:""
    });
    // Initialize phone of step4 number input
    phone_step4 = window.intlTelInput(phone_step4_input,{
        utilsScript: utilsScript,
        onlyCountries: ['es','ve'],
        separateDialCode:true,
        initialCountry:""
    });
});

$('#btn-b-rapida').click(function(){
   if($('#busqueda-rapida').is(":visible")){
      $('#busqueda-rapida').css("display",'none');
   }else{
      $('#busqueda-rapida').show();
   }
});

$('.checkbox-list-1').on('change', function() {
    $('.checkbox-list-1').not(this).prop('checked', false);  
    if (!$('#rrss-checkbox').is(':checked')){
        $('#rrss-dropdown').css("display",'none');1
    }
    if (!$('#otro-checkbox').is(':checked')){
        $('#other-modal').css("display",'none');
    }
});

$('.step4_checkbox').on('change', function() {
    $('.step4_checkbox').not(this).prop('checked', false);  
});

$('#rrss-checkbox').on('click', function(){
    if($('#rrss-dropdown').is(":visible")){
        $('#rrss-dropdown').css("display",'none');
    }else{
        $('#rrss-dropdown').removeClass('d-none');
        $('#rrss-dropdown').show();
    }
});

$('#otro-checkbox').on('click', function(){
    if($('#other-modal').is(":visible")){
        $('#other-modal').addClass('d-none');
    }else{
        $('#other-modal').removeClass('d-none');
        $('#other-modal').show();
    }
})

$('#continuar-btn').on('click', function(e){
    validation = true;

    // AJAX VALIDATION
    e.preventDefault();
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    data = {
        step: step
    };
    $('.form-error').empty();
    switch(step){
        // Step 0 - Como supo de nosotros
        case 0:{
            var found_us;
            $.each($("input[name='found_us']:checked"), function(){
                found_us = $(this).val();
            });
            data['found_us'] = found_us;
            switch(found_us){
                // Social media choice
                case 'rrss':
                    var social_media = [];
                    $.each($("input[name='social_media']:checked"), function(){
                        social_media.push($(this).val());
                    });
                    data['social_media'] = social_media;
                    break;
                // Otro choice
                case 'otro':
                    data['other_text'] = $('input[name="other_text"]').val();
                    break;
            }
            // Ajax POST request
            $.ajax({
                url: form_post_url,
                method: 'post',
                data: data,
                async: false,
                success: function(data){
                    // If there's an error don't let go to next step
                    if( !$.isEmptyObject(data.errors) ){
                        validation = false;
                        $('#errors-row-step0').removeClass('d-none');
                        $.each(data.errors, function(key, value){
                            console.log(value);
                            $('.form-error').append('<li>'+value+'</li>');
                        });
                    }else{
                        console.log(data.success['step0']);
                    }
                }
            })
            break;
        }
        // Step 1 - Registrar usuario (Natural o jurídico)
        case 1:{
            data['person_type'] = $('input[name="person_type"]:checked').val();
            // Caso persona natural
            if ( data['person_type'] === 'nat'){
                
                data['nombre_pn'] = $('input[name="nombre_pn"]').val();
                data['apellido_pn'] = $('input[name="apellido_pn"]').val();
                data['user_id_pn'] = $('input[name="user_id_pn"]').val();
                data['email_pn'] = $('input[name="email_pn"]').val();
                data['country_pn'] = $('#country_pn').children('option:selected').val();
                data['phone_checkbox_pn'] = $('input[name="phone_checkbox_pn"]:checked').val();
                data['mobile_pn'] = mobile_pn.getNumber();
                data['landline_pn'] = landline_pn.getNumber();
                data['landline_ext_pn'] = $('input[name="landline_ext_pn"]').val();

                // Ajax POST request
                $.ajax({
                    url: form_post_url,
                    method: 'post',
                    data: data,
                    async: false,
                    success: function(data){
                        // Validate mobile number
                        if( $('#mobile-checkbox-natural').is(':checked') && !mobile_pn.isValidNumber()){
                            validation = false;
                            var errorCode = mobile_pn.getValidationError();
                            $('#error_row_mobile_pn').removeClass('d-none');
                            $('#error_ul_mobile_pn').append('<li>'+telephoneErrorMap[errorCode]+'</li>');
                        }
                        // Validate landline number
                        if ($('#landline-checkbox-natural').is(':checked') && !landline_pn.isValidNumber()){
                            validation = false;
                            var errorCode = landline_pn.getValidationError();
                            $('#error_row_landline_pn').removeClass('d-none');
                            $('#error_ul_landline_pn').append('<li>'+telephoneErrorMap[errorCode]+'</li>');
                        }
                        // AJAX VALIDATION
                        // If there's an error don't let go to next step
                        if( !$.isEmptyObject(data.errors) ){
                            validation = false;                        
                            $.each(data.errors, function(key, value){
                                $('#error_row_'+key).removeClass('d-none');
                                $.each(value, function(key2,value2){
                                    $('#error_ul_'+key).append('<li>'+value2+'</li>');
                                })
                            });
                        }else{
                            console.log(data.success['step1']);
                        }
                    }
                })
            }
            // Caso persona jurídica
            else if ( data['person_type'] === 'jur'){
                data['nombre_empresa_pj'] = $('input[name="nombre_empresa_pj"]').val();
                data['rif_empresa_pj'] = $('input[name="rif_empresa_pj"]').val();
                data['country_empresa_pj'] = $('#country_empresa_pj').children('option:selected').val();
                data['cities_empresa_pj'] = $('#cities_empresa_pj').children('option:selected').val();
                data['address_empresa_pj'] = $('textarea[name="address_empresa_pj"]').val();
                data['nombre_rep_pj'] = $('input[name="nombre_rep_pj"]').val();
                data['apellido_rep_pj'] = $('input[name="apellido_rep_pj"]').val();
                data['email_rep_pj'] = $('input[name="email_rep_pj"]').val();
                data['phone_checkbox_pj'] = $('input[name="phone_checkbox_pj"]:checked').val();
                data['mobile_pj'] = mobile_pj.getNumber();
                data['landline_pj'] = landline_pj.getNumber();
                data['landline_ext_pj'] = $('input[name="landline_ext_pj"]').val();
                // Ajax POST request
                $.ajax({
                    url: form_post_url,
                    method: 'post',
                    data: data,
                    async: false,
                    success: function(data){
                        // Validate mobile number
                        if( $('#mobile-checkbox-juridica').is(':checked') && !mobile_pj.isValidNumber()){
                            validation = false;
                            var errorCode = mobile_pj.getValidationError();
                            $('#error_row_mobile_pj').removeClass('d-none');
                            $('#error_ul_mobile_pj').append('<li>'+telephoneErrorMap[errorCode]+'</li>');
                        }
                        // Validate landline number
                        if ($('#landline-checkbox-juridica').is(':checked') && !landline_pj.isValidNumber()){
                            validation = false;
                            var errorCode = landline_pj.getValidationError();
                            $('#error_row_landline_pj').removeClass('d-none');
                            $('#error_ul_landline_pj').append('<li>'+telephoneErrorMap[errorCode]+'</li>');
                        }
                        // AJAX VALIDATION
                        // If there's an error don't let go to next step
                        if( !$.isEmptyObject(data.errors) ){
                            validation = false;                        
                            $.each(data.errors, function(key, value){
                                $('#error_row_'+key).removeClass('d-none');
                                $.each(value, function(key2,value2){
                                    $('#error_ul_'+key).append('<li>'+value2+'</li>');
                                })
                            });
                        }else{
                            console.log(data.success['step1']);
                        }
                    }
                })
            }
            // Other case
            else{
                console.log('undefined case');
                $.ajax({
                    url: form_post_url,
                    method: 'post',
                    data: data,
                    async: false,
                    success: function(data){
                        // If there's an error don't let go to next step
                        if( !$.isEmptyObject(data.errors) ){
                            validation = false;
                            $('#error_row_person_type').removeClass('d-none');
                            $.each(data.errors, function(key, value){
                                console.log(value);
                                $('#error_ul_person_type').append('<li>'+value+'</li>');
                            });
                        }else{
                            console.log(data.success['step1']);
                        }
                    }
                })
            }
            break;
        }
        // Step 2 - Idioma
        case 2:{
            data['lang'] = $('input[name="lang"]:checked').val();
                $.ajax({
                    url: form_post_url,
                    method: 'post',
                    data:  data,
                    async: false,
                    success: function(data){
                        // If there's an error don't let go to next step
                        if( !$.isEmptyObject(data.errors) ){
                            validation = false;
                            console.log(data.errors);
                            $.each(data.errors, function(key, value){
                                $('#error_row_step02').removeClass('d-none');
                                $('#error_ul_step02').append('<li>'+value+'</li>');
                            });
                        }else{
                            console.log('step2');
                            console.log(data.success['step2']);
                        }
                    }
                })
            break;
        }
        // Step 3 - Datos de Inicio de sesión
        case 3:{
            data['email_login'] = $('input[name="email_login"]').val();
            data['pw_login'] = $('input[name="pw_login"]').val();
            $.ajax({
                url: form_post_url,
                method: 'post',
                data:  data,
                async: false,
                success: function(data){
                    // If there's an error don't let go to next step
                    if( !$.isEmptyObject(data.errors) ){
                        validation = false;                        
                        $.each(data.errors, function(key, value){
                            $('#error_row_'+key).removeClass('d-none');
                            $.each(value, function(key2,value2){
                                $('#error_ul_'+key).append('<li>'+value2+'</li>');
                            })
                        });
                    }else{
                        console.log(data.success['step3']);
                    }
                }
            })
            break;
        }
        // Step 4 - Frecuencia de info
        case 4:{
            data['frequency_checkbox'] = $('input[name="frequency_checkbox"]:checked').val();
            // This variable keep days in backend
            data['custom_frequency'] = $('input[name="frequency_checkbox"]:checked').val();
            if( data['frequency_checkbox'] === 'other'){
                data['custom_frequency'] = Number($('#custom_month_freq').val() * 30) + Number($('#custom_days_freq').val());
                var interest_services = [];
                $.each($("input[name='interest_service']:checked"), function(){
                    interest_services.push($(this).val());
                });
                data['interest_services'] = interest_services;
                var news_means = {};

                $.each($("input[name='news_mean']:checked"),function(){
                    var x = $(this).val()+"_input";
                    if ($(this).val() === 'rrss'){
                        var rrss_array = [];
                        $.each($("input[name='rrss_input']:checked"), function(){
                            rrss_array.push($(this).val());
                        });
                        if (rrss_array.length == 0){
                            news_means[$(this).val()] = "";
                        }else{
                            news_means[$(this).val()] = rrss_array;
                        }
                    }else{
                        news_means[$(this).val()] = $('input[name='+x+']').val();
                    }
                });
                data['news_means'] = news_means;
            }
            $.ajax({
                url: form_post_url,
                method: 'post',
                data:  data,
                async: false,
                success: function(data){
                    // Validate mobile number
                    if( $('#sms-checkbox-step4').is(':checked') && !phone_step4.isValidNumber()){
                        validation = false;
                        var errorCode = mobile_pj.getValidationError();
                        $('#error_row_phone_step4git').removeClass('d-none');
                        $('#error_ul_phone_step4git').append('<li>'+telephoneErrorMap[errorCode]+'</li>');
                    }
                    // If there's an error don't let go to next step
                    if( !$.isEmptyObject(data.errors) ){
                        validation = false;
                        console.log(data.errors);
                        $.each(data.errors, function(key, value){
                            if (key.includes('.')){
                                var n = key.indexOf('.');
                                key = key.substring(0,n) + '\\' + key.substring(n);
                            }
                            $('#error_row_'+key).removeClass('d-none');
                            $.each(value, function(key2,value2){
                                $('#error_ul_'+key).append('<li>'+value2+'</li>');
                            })
                        });
                    }else{
                        console.log(data.success['step4']);
                    }
                }
            })
            break;
        }
    }

    // Run this code iff ajax validation were passed
    if (validation == true){
        $('#errors-row-step0').addClass('d-none');
        $('#errors-row-step1').addClass('d-none');
        // Regular logic
        $('#b-step-'+step).removeClass('text-underline');
        step++;
        // If  frecuencia not checked (go to step 5)
        if (step == 4 && !$('#checkbox-frecuencia').is(':checked')){
                step = 5;
                // Remove old content
                $("#step-3").addClass('d-none');
                // Add new content
                $('#step-'+step).removeClass('d-none');
                $('#b-step-'+4).removeClass('step-active');
                $('#b-step-'+4).removeClass('text-underline');
                // Mark step 5 as active
                $('#b-step-'+5).addClass('step-active');

        }else if (step==4 && $('#checkbox-frecuencia').is(':checked')){
            console.log('checked');
            // Unmark step 5 
            $('#b-step-'+5).removeClass('step-active');
            $('#b-step-'+5).removeClass('text-underline');
            // Mark step 4 as active now
            $('#b-step-'+4).addClass('step-active');
            $('#b-step-'+4).addClass('text-underline');

            // Remove old content
            $("#step-"+(step-1)).addClass('d-none');
            // Add new content
            $('#step-'+step).removeClass('d-none');
        }else{
            // Remove old content
            $("#step-"+(step-1)).addClass('d-none');
        
            // Add new content
            $('#step-'+step).removeClass('d-none');
            // Mark all previous steps as active
            for(i=0;i<=step;i++){
                $('#b-step-'+i).addClass('step-active');
                $('#b-step-'+i).removeClass('text-underline');
            }
        }
        // Hide continuar button
        if(step > 4){
            $('#continuar-btn').addClass('invisible');
        }
        // Remove 'atras' button
        if(step > 0){
            $('#atras-btn').removeClass('invisible');
        }
        // Put step text
        $('#panel-heading').text(panelText[step]);
        
        // Put different buttons if page it's on step 5
        if (step == 5){
            $('#btns-step04').addClass('d-none');
            $('#btns-step5').removeClass('d-none');
        }
        // Update form step attribute
        $(this).attr('form','form-step-'+step);
        // Underline current step
        $('#b-step-'+step).addClass('text-underline');
    }else{
        for(i = step+1; i<6;i++){
            $('#b-step-'+i).removeClass('step-active');
            $('#b-step-'+i).removeClass('text-underline'); 
        }
    }
        // Remove all empty error divs
        $.each($('.form-error'),function(){
            console.log($(this).children().length);
            if ($(this).children().length == 0){
                $(this).closest(".error-row").addClass('d-none');
            }
        });
})

$('#atras-btn').on('click', function(){
    $('#b-step-'+step).removeClass('text-underline');
    step--;
    if(step < 1){
        $('#atras-btn').addClass('invisible');
    }
    console.log(step);
    if( step == 4 && $('#checkbox-frecuencia').is(':checked')){
        // Remove old content
        $("#step-"+(step+1)).addClass('d-none');
        // Add new content
        $('#step-'+step).removeClass('d-none');
    }else if (step == 4 && !$('#checkbox-frecuencia').is(':checked')){
        console.log('hey');
        // Remove old content
        $("#step-"+(step+1)).addClass('d-none');
        $('#b-step-5').removeClass('step-active');
        step = 3;
        // Add new content
        $('#step-'+step).removeClass('d-none');
    }else{
        // Remove old content
        $("#step-"+(step+1)).addClass('d-none');

        // Add new content
        $('#step-'+step).removeClass('d-none');
        $('#b-step-'+step+1).removeClass('step-active');
    }

    // Unhide 'continuar' button and hide last button set from step 5
    if(step < 5){
        $('#continuar-btn').removeClass('invisible');
        $('#btns-step04').removeClass('d-none');
        $('#btns-step5').addClass('d-none');
    }
    // Put step heading text
    $('#panel-heading').text(panelText[step]);
    // Update form step attribute
    $('#continuar-btn').attr('form','form-step-'+step);
    // Underline current step
    $('#b-step-'+step).addClass('text-underline');
})



$('#checkbox-natural').click(function() {
    if($('#container-p-juridica').is(':visible')){
        $('#container-p-juridica').addClass('d-none');
    }
    if($(this).prop("checked") == true){
        $('#container-p-natural').removeClass('d-none');
    }else{
        $('#container-p-natural').addClass('d-none');
    }    
    
    // Remove all empty error divs
    $.each($('.form-error'),function(){
        $(this).empty();
        console.log($(this).children().length);
        if ($(this).children().length == 0){
            $(this).closest(".error-row").addClass('d-none');
        }
    });
});

$('#checkbox-juridica').click(function() {
    if($('#container-p-natural').is(':visible')){
        $('#container-p-natural').addClass('d-none');
    }
    if($(this).prop("checked") == true){
        $('#container-p-juridica').removeClass('d-none');
    }else{
        $('#container-p-juridica').addClass('d-none');
    }  
    // Remove all empty error divs
    $.each($('.form-error'),function(){
        $(this).empty();
        console.log($(this).children().length);
        if ($(this).children().length == 0){
            $(this).closest(".error-row").addClass('d-none');
        }
    });
});

$('#rrss-empresa-checkbox').click(function(){
    if($(this).prop("checked") == true){
        $('#checkbox-dropdown-rrss').removeClass('invisible');
    }else{
        $('#checkbox-dropdown-rrss').addClass('invisible');
    }  
});

$('#sms-checkbox-step4').click(function(){
    if($(this).prop("checked") == true){
        $('.sms-other-step4').css('visibility','visible');
    }else{
        $('.sms-other-step4').css('visibility','hidden');
    }  
});

$('#checkbox-medios-other-step4').click(function(){
    if($(this).prop("checked") == true){
        $('.medios-other-step4').css('visibility','visible');
    }else{
        $('.medios-other-step4').css('visibility','hidden');
    }  
});

$('#checkbox-email-other-step4').click(function(){
    if($(this).prop("checked") == true){
        $('#email-other-step4').css('visibility','visible');
    }else{
        $('#email-other-step4').css('visibility','hidden');
    }  
});

$('#checkbox-fb-account-other-step4').click(function(){
    if($(this).prop("checked") == true){
        $('.fb-account-other-step4').css('visibility','visible');
    }else{
        $('.fb-account-other-step4').css('visibility','hidden');
    }  
});


!$('#checkbox-frecuencia').click(function(){
    if( !$(this).is(':checked')){
        $('#b-step-'+4).removeClass('step-active');
        $('#b-step-'+4).removeClass('text-underline');
    }
});

$('#mobile-checkbox-natural').click(function(){
    if( $(this).is(':checked')){
        $('#input-mobile-natural').removeClass('d-none');
        $('#error_row_phone_checkbox_pn').addClass('d-none');
        $('#error_ul_phone_checkbox_pn').empty();
    }else{
        $('#input-mobile-natural').addClass('d-none');
        $('#error_row_mobile_pn').addClass('d-none');
        $('#error_ul_mobile_pn').empty();

    }
});

$('#landline-checkbox-natural').click(function(){
    if( $(this).is(':checked')){
        $('#input-landline-natural').removeClass('d-none');
        $('#error_row_phone_checkbox_pn').addClass('d-none');
        $('#error_ul_phone_checkbox_pn').empty();    
    }else{
        $('#input-landline-natural').addClass('d-none');
        $('#error_row_landline_pn').addClass('d-none');
        $('#error_ul_landline_pn').empty();
    }
});

$('#mobile-checkbox-juridica').click(function(){
    if( $(this).is(':checked')){
        $('#input-mobile-juridica').removeClass('d-none');
        $('#error_row_phone_checkbox_pj').addClass('d-none');
        $('#error_ul_phone_checkbox_pj').empty();  
    }else{
        $('#input-mobile-juridica').addClass('d-none');
        $('#error_row_mobile_pj').addClass('d-none');
        $('#error_ul_mobile_pj').empty();
    }
});

$('#landline-checkbox-juridica').click(function(){
    if( $(this).is(':checked')){
        $('#input-landline-juridica').removeClass('d-none');
        $('#error_row_phone_checkbox_pj').addClass('d-none');
        $('#error_ul_phone_checkbox_pj').empty(); 
    }else{
        $('#input-landline-juridica').addClass('d-none');
        $('#error_row_landline_pj').addClass('d-none');
        $('#error_ul_landline_pj').empty();
    }
});

$('#country_empresa_pj').change(function(e){
    $('#cities_empresa_pj').children('option:not([disabled])').remove();
    // AJAX VALIDATION
    e.preventDefault();
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Ajax POST request
    $.ajax({
        url: image_post_url,
        method: 'post',
        data: {
            country: $(this).children('option:not([disabled]):selected').val()
        },
        async: false,
        success: function(data){
            $.each(data.cities, function(city, id){
                $('#cities_empresa_pj').append('<option value='+id+'>'+city+'</option>');
            });
            // If there's an error don't let go to next step
            console.log(data['cities']);
        }
    })
});


$('#custom_days_freq').focusin(function(){
    $(this).data('oldValue', $(this).val());
});
  

 $('#custom_days_freq').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});

 
$('#custom_month_freq').focusin(function(){
    $(this).data('oldValue', $(this).val());
});
  

$('#custom_month_freq').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});

$('#sign-up-btn').on('click', function(e){
    validation = true;
    // AJAX VALIDATION
    e.preventDefault();
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    data = {
        step: step
    };

    data['user_unique_id'] = $('#user_unique_id').text();
    data['banco_origen'] = $('input[name="banco_origen"]').val();
    data['banco_destino'] = $('input[name="banco_destino"]').val();
    data['country_facturacion'] = $('#country_facturacion').children('option:selected').val();
    $('.form-error').empty();
    // Ajax POST request
    $.ajax({
        url: form_post_url,
        method: 'post',
        data: data,
        async: false,
        success: function(data){
            // AJAX VALIDATION
            // If there's an error don't let go to next step
            if( !$.isEmptyObject(data.errors) ){
                validation = false;                        
                $.each(data.errors, function(key, value){
                    $('#error_row_'+key).removeClass('d-none');
                    $.each(value, function(key2,value2){
                        $('#error_ul_'+key).append('<li>'+value2+'</li>');
                    })
                });
            }else{
                console.log(data.success);
            }
        }
    })
    if (validation){
        $('.error-row').addClass('d-none');
        $('.form-error').addClass('d-none');
        $('body').prepend('\
        <div class="modal-bg">\
        </div>\
        ');
        $('#sign-up-modal').appendTo('.modal-bg');
        $('#sign-up-modal').removeClass('d-none');

        $('body').addClass('overflow-hidden');
    }
});