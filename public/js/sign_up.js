var step = 0;
var panelText = [
    'Cómo supo de nosotros ',
    'Registrar Usuario',
    'Idioma en que desea visualizar el portal al iniciar sesión',
    'Datos de inicio de sesión',
    'Frecuencia e información a recibir ',
    'Datos de Facturación',
]
  

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
    var input = document.querySelector("#mobile-pn");
    var iti = window.intlTelInput(input,{
        utilsScript: utilsScript
    });
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];
    if(!iti.isValidNumber()){
        var errorCode = iti.getValidationError();
        console.log(errorCode);
    }
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
    var validation = true;

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
        // Step 0
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
                        validation = true;
                    }
                }
            })
            break;
        }
        case 1:{
            data['person_type'] = $('input[name="person_type"]:checked').val();
            // Caso persona natural
            if ( data['person_type'] === 'nat'){
                data['nombre_pn'] = $('input[name="nombre_pn"]').val();
                data['apellido_pn'] = $('input[name="apellido_pn"]').val();
                data['user_id_pn'] = $('input[name="user_id_pn"]').val();
                data['email_pn'] = $('input[name="email_pn"]').val();
                data['country_pn'] = $('#country_pn').children('option:selected').val();
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
                            $.each(data.errors, function(key, value){
                                $('#error_row_'+key).removeClass('d-none');
                                $.each(value, function(key2,value2){
                                    $('#error_ul_'+key).append('<li>'+value2+'</li>');
                                })
                            });
                        }else{
                            //$('.error-row').addClass('d-none');
                            validation = true;
                        }
                    }
                })
            // Caso persona jurídica
            }else{
                
            }
            break;
        }
        case 2:
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            break;
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
    $('.form-error').empty();
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
    $('.form-error').empty();
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

$('#sign-up-btn').click(function(){
    // $('#sign-up-modal').removeClass('d-none');
    // $('body').addClass('.body-modal');
    $('body').prepend('\
            <div class="modal-bg">\
            </div>\
    ');
    $('#sign-up-modal').appendTo('.modal-bg');
    $('#sign-up-modal').removeClass('d-none');

    $('body').addClass('overflow-hidden');
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
    }else{
        $('#input-mobile-natural').addClass('d-none');
    }
});

$('#landline-checkbox-natural').click(function(){
    if( $(this).is(':checked')){
        $('#input-landline-natural').removeClass('d-none');
    }else{
        $('#input-landline-natural').addClass('d-none');
    }
});

$('#mobile-checkbox-juridica').click(function(){
    if( $(this).is(':checked')){
        $('#input-mobile-juridica').removeClass('d-none');
    }else{
        $('#input-mobile-juridica').addClass('d-none');
    }
});

$('#landline-checkbox-juridica').click(function(){
    if( $(this).is(':checked')){
        $('#input-landline-juridica').removeClass('d-none');
    }else{
        $('#input-landline-juridica').addClass('d-none');
    }
});