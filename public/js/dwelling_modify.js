console.log(dwelling_data);

$.each($("input[name='vivienda-en-radio-btn']"),function(){
    if(dwelling_data['status'] == parseInt($(this).val())){
        $(this).prop('checked',true);
    }
})

$.each($("input[name='dwelling_type']"),function(){
    if(dwelling_data['property_type'] == parseInt($(this).val())){
        $(this).prop('checked',true);
    }
})

$.each($('input[name="comforts"]'),function(){
    var comfort = $(this);
    $.each(dwelling_data['comforts']['array'], function(key,value){
        if(value === comfort.val()){
            comfort.prop('checked',true);
        }
    });
});

$.each($('input[name="services"]'),function(){
    var services = $(this);
    $.each(dwelling_data['services']['array'], function(key,value){
        if(value === services.val())
            services.prop('checked',true);
        
        if (value == 5 && services.val() === "other"){
            services.prop('checked',true);
            $("#other-li").removeClass('d-none');
            $("#dwelling-other-input").val(dwelling_data['services']['other']);
        }

    });
});

$(document).ready(function(){
        // Initialize sign_up screen phones input tag
        mobile_input = document.querySelector("#mobile-publish-dwelling");
        landline_input = document.querySelector("#landline-publish-dwelling");
        // Initialize natural mobile number input
        mobile_input = window.intlTelInput(mobile_input,{
            utilsScript: utilsScript,
            onlyCountries: ['es','ve'],
            separateDialCode:true,
            initialCountry:""
        });
        // Initialize natural legal number input
        landline_input = window.intlTelInput(landline_input,{
            utilsScript: utilsScript,
            onlyCountries: ['es','ve'],
            separateDialCode:true,
            initialCountry:""
        });
    // Load images
    $.each(dwelling_data['images'], function(key,value){
            var iconContainer = "<div class='overlay'><div class='icon-container close-btn'><i class='far fa-times-circle'></i></div></div>";
            var imageContainer = '<img class="uploaded-image" src="'+dwelling_data['images'][key]['url']+'" alt="'+dwelling_data['images'][key]['name']+'">';
            var imageQuery = $('.image-box:not(:has(*)):first');
            imageQuery.append(iconContainer);
            imageQuery.append(imageContainer);
            imageQuery.addClass('hover-state');
            $('#preloader-image-publish').addClass('d-none');
            $('#dragspace-image-publish').addClass('d-none');
    });
    // Load videos
    $.each(dwelling_data['images'], function(key,value){
        var iconContainer  = "<div class='video-overlay'>\
        <div class='icon-container play-btn'>\
                <i class='far fa-play-circle play-icon'></i>\
        </div>\
        <div class='icon-container close-btn-video'>\
                <i class='far fa-times-circle'></i>\
        </div>\
        </div>";
        var videoContainer = "<video class='video-tag' id='frag1' preload='metadata' width='720px' height='540px'>\
                <source src='"+dwelling_data['videos'][key]['url']+"'\
                type='video/mp4;codecs='avc1.42E01E, mp4a.40.2'\
                >\
            </video>";
        var videoQuery = $('.video-box:not(:has(*)):first');
        videoQuery.append(iconContainer);
        videoQuery.append(videoContainer);
        $('#preloader-video-publish').addClass('d-none');
        $('#dragspace-video-publish').addClass('d-none');
    });
    // Load dwelling details
    $('#dwelling_other_details').val(dwelling_data['details']);
    $('#whats_next_to_dwelling').val(dwelling_data['transport_details']);
    $('#precise_dwelling_location').val(dwelling_data['location_details']);
    // Load money price
    $('#publish-dwelling-input-price').val(dwelling_data['price']);
    // Set currency option
    $('#publish-dwelling-currency-dropdown').children("option").each(function(){
        console.log($(this).val());
        console.log(dwelling_data['currency_id']);
        if($(this).val() == dwelling_data['currency_id']){
            $(this).prop('selected',true);
        }
        if($(this).val() === "other" && dwelling_data['currency_id'] == 3){
            $(this).prop('selected',true);
            $('#other-currency-container').removeClass('d-none');
        }
    });
    // Load mobile  telephone number
    if (dwelling_data['contact_mobilenumber']){
        mobile_input.setNumber(dwelling_data['contact_mobilenumber']);
        $('#mobile-checkbox-publish-dwelling').prop('checked',true);
        $('#input-publish-dwelling-mobile').removeClass('d-none');
    }
    // Load landline telephone number
    if (dwelling_data['contact_landlinenumber']){
        landline_input.setNumber(dwelling_data['contact_landlinenumber']);
        $('#landline-checkbox-publish-dwelling').prop('checked',true);
        $('#input-publish-dwelling-landline').removeClass('d-none');
        if(dwelling_data['contact_landlinenumberEXT']){
            $('input[name="landline_ext_dwelling"]').val(dwelling_data['contact_landlinenumberEXT']);
        }
    }
    // Load contact days
    $.each($('.day-checkbox'),function(){
        var day_checkbox = $(this);
        $.each(dwelling_data['contact_days'],function(key,value){
            if (value === day_checkbox.val()){
                day_checkbox.prop('checked',true);
            }
        });
    });
    // Load contact hour
    var from_hour = dwelling_data['contact_hourfrom'];
    var from_time = "am";
    var to_hour = dwelling_data['contact_hourto'];
    var to_time = "am";
    if(from_hour > 12){
        from_hour -= 12;
        from_time = "pm";
    }
    if(to_hour > 12){
        to_hour -= 12;
        to_time = "pm";
    }
    $('input[name="from_hour"][value='+from_hour+']').prop('checked',true);
    $('input[name="from_time"][value='+from_time+']').prop('checked',true);
    $('input[name="to_hour"][value='+to_hour+']').prop('checked',true);
    $('input[name="to_time"][value='+to_time+']').prop('checked',true);
});

$('#modify_btn_dwelling').click(function(){
    var validation = true;
    // Clear error containers
    $('.form-error').empty();
    $('.error-row').addClass('d-none');
    // Prepare preloader
    $('body').prepend('\
    <div class="modal-bg">\
    </div>\
    ');
    
    $('#preloader-storing').appendTo('.modal-bg');
    $('#preloader-storing').removeClass('d-none');
    $('body').addClass('overflow-hidden');

    // AJAX VALIDATION
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Validate dropdown-checkboxes
    var comfort_choices = [];
    $.each($("input[name='comforts']:checked"), function(){
        comfort_choices.push($(this).val());
    });
    var services_choices = [];
    $.each($("input[name='services']:checked"), function(){
        services_choices.push($(this).val());
    });
    var other_services_choice = 1;
    var other_currency_input = 1;
    // Validate if other input text has something written
    if($("input[value='other']").prop('checked')){
        other_services_choice = $('#dwelling-other-input').val();
    }
    // Validate if other currency input has something written 
    if($("option[value='other']").prop('selected')){
        other_currency_input = $('#dwelling-other-currency-input').val();
    }
    // Check contact time
    var hour_array = [];
    hour_array.push($('input[name=from_hour]:checked').val());
    hour_array.push($('input[name=from_time]:checked').val());
    hour_array.push($('input[name=to_hour]:checked').val());
    hour_array.push($('input[name=to_time]:checked').val());
    // array of contact days
    var contact_days_array = [];
    $.each($(".day-checkbox:checked"),function(){
        contact_days_array.push($(this).val());
    })
    var data = {
        id: dwelling_data['id'],
        continent_select_sm: $("#continent-select").children('option:selected').val(),
        country_select_sm: $("#country-select").children('option:selected').val(),
        state_select_sm: $("#state-select").children('option:selected').val(),
        city_select_sm: $("#city-select").children('option:selected').val(),
        selling_option: $('input[name="vivienda-en-radio-btn"]:checked').val(),
        tipo_inmueble: $('input[name="dwelling_type"]:checked').val(),
        counter_room: $('#counterRoom').val(),
        counter_bath: $('#counterBath').val(),
        counter_park: $('#counterPark').val(),
        dwelling_other_details: $('#dwelling_other_details').val(),
        whats_next_to_dwelling: $('#whats_next_to_dwelling').val(),
        precise_dwelling_location: $('#precise_dwelling_location').val(),
        checkbox_dropdown_comfort_sm: comfort_choices,
        services_publish_dwelling_dropdown_sm: services_choices,
        other_services_choice_sm: other_services_choice,
        video_amount: $('#select-video-amnt').children('option:selected').val(),
        input_price: $('#publish-dwelling-input-price').val(),
        currency_select: $('#publish-dwelling-currency-dropdown').children('option:selected').val(),
        other_currency_input: other_currency_input,
        name_contact: $('#name-contact-publish-dwelling-input').val(),
        lastname_contact: $('#lastname-contact-publish-dwelling-input').val(),
        email_contact: $('#email-contact-publish-dwelling-input').val(),
        phone_checkbox: $('input[name="phone-checkbox-publish-dwelling"]:checked').val(),
        mobile_phone: mobile_input.getNumber(),
        landline_phone: landline_input.getNumber(),
        ext_landline_phone: $("input[name='landline_ext_dwelling']").val(),
        contact_days_checkbox: contact_days_array,
        contact_hour_array: hour_array,
    };
    console.log(data);
    ///Ajax POST request
    $.ajax({
        url: post_modify_dwelling,
        method: 'post',
        data: data,
        success: function(data){
            validation = validatePhones();
            // If there's an error don't let go to next step
            if( !$.isEmptyObject(data.errors) ){
                validation = false;
                var scroll_pos = 0;
                $.each(data.errors, function(key, value){
                    key.includes('_sm') == true ? $('#error_row_'+key.replace("_sm","")).removeClass('d-none') : $('#error_row_'+key).removeClass('d-none');
                    if(key === "other_services_choice_sm"){
                        scroll_pos = scroll_pos == 0 ? $('#error_row_services_publish_dwelling_dropdown').offset().top : scroll_pos;
                        $('#error_row_services_publish_dwelling_dropdown').removeClass('d-none');
                        $('#error_ul_services_publish_dwelling_dropdown').append('<li class="sm-text">'+value+'</li>');
                    }else{
                        if(key.includes('_sm'))
                            scroll_pos = scroll_pos == 0 ? $('#error_row_'+key.replace("_sm","")).offset().top : scroll_pos;
                        else
                        scroll_pos = scroll_pos == 0 ? $('#error_row_'+key).offset().top : scroll_pos;
                    }
                    $.each(value, function(key2,value2){
                        key.includes('_sm') == true ? $('#error_ul_'+key.replace("_sm","")).append('<li class="sm-text">'+value2+'</li>') : $('#error_ul_'+key).append('<li>'+value2+'</li>');
                    })
                    
                });
            }
            if (!validation){
                $('html, body').animate({scrollTop:(scroll_pos - 150)}, 1000);
                $('#preloader-storing').appendTo('body');
                $('#preloader-storing').addClass('d-none');
                $('.modal-bg').remove();
                $('body').removeClass('overflow-hidden');
            }else{
                dwelling_id = data.id;
                $('#preloader-storing').appendTo('body');
                $('#preloader-storing').addClass('d-none');
                $('#dwell-published-modal').appendTo('.modal-bg');
                $('#dwell-published-modal').removeClass('d-none');
                $('body').addClass('overflow-hidden');
            }
        }
    });
});

post_modify_dwelling



