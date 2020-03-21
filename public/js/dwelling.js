var mobile_input;
var landline_input;
var dwelling_id;
// for index page
$('#btn-b-rapida').click(function(){
    if($('#busqueda-rapida').hasClass("d-none")){
        $('#busqueda-rapida').removeClass("d-none");
    }else{
        $('#busqueda-rapida').addClass("d-none");
    }
});
 
 $('#btn-b-detallada').click(function(){
    if($('#busqueda-detallada').hasClass("d-none")){
        $('#busqueda-detallada').removeClass("d-none");
    }else{
        $('#busqueda-detallada').addClass("d-none");
    }
 });

 //for publication dwelling
 $('#btn-b-rapida1').click(function(){
    if($('#busqueda-rapida1').hasClass("d-none")){
        $('#busqueda-rapida1').removeClass("d-none");
    }else{
        $('#busqueda-rapida1').addClass("d-none");
    }
});
 
 $('#btn-b-detallada1').click(function(){
    if($('#busqueda-detallada1').hasClass("d-none")){
        $('#busqueda-detallada1').removeClass("d-none");
    }else{
        $('#busqueda-detallada1').addClass("d-none");
    }
 });

 //for search dwelling
 $('#btn-b-rapida2').click(function(){
    if($('#busqueda-rapida2').hasClass("d-none")){
        $('#busqueda-rapida2').removeClass("d-none");
    }else{
        $('#busqueda-rapida2').addClass("d-none");
    }
});
 
 $('#btn-b-detallada2').click(function(){
    if($('#busqueda-detallada2').hasClass("d-none")){
        $('#busqueda-detallada2').removeClass("d-none");
    }else{
        $('#busqueda-detallada2').addClass("d-none");
    }
 });

$('#services-publish-dwelling-dropdown').change(function(){
    $("#service-dwelling-other-input-text").prop('checked') ?
        $(this).find("#other-li").removeClass('d-none') :
        $(this).find("#other-li").addClass('d-none');
});

$('#publish-dwelling-currency-dropdown').change(function(){
    $(this).children('option:selected').val() === 'other' ?
        $("#other-currency-container").removeClass('d-none') :
        $("#other-currency-container").addClass('d-none');
    // console.log($(this).children('option:selected').val());
});


 
 $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }
 
        } else if(type == 'plus') {
 
            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }
        }
    } else {
        input.val(0);
    }
 });
 
 

 $('#counterBath').focusin(function(){
    $(this).data('oldValue', $(this).val());
  });
  

 $('#counterBath').change(function() {
    
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
 
 $('#counterRoom').focusin(function(){
    $(this).data('oldValue', $(this).val());
  });
 
 
 $('#counterRoom').change(function() {
    
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
 

 
 $('#counterPark').focusin(function(){
    $(this).data('oldValue', $(this).val());
 });
 
 
 $('#counterPark').change(function() {
    
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
 
 
 $("#counterBath").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
       // Allow: Ctrl+A
       (e.keyCode == 65 && e.ctrlKey === true) || 
       // Allow: home, end, left, right
       (e.keyCode >= 35 && e.keyCode <= 39)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
       e.preventDefault();
    }
 });
 
 $("#counterRoom").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
       // Allow: Ctrl+A
       (e.keyCode == 65 && e.ctrlKey === true) || 
       // Allow: home, end, left, right
       (e.keyCode >= 35 && e.keyCode <= 39)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
       e.preventDefault();
    }
 });
 
 $("#counterPark").keydown(function (e) {
       // Allow: backspace, delete, tab, escape, enter and .
       if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
          // Allow: Ctrl+A
          (e.keyCode == 65 && e.ctrlKey === true) || 
          // Allow: home, end, left, right
          (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
       }
       // Ensure that it is a number and stop the keypress
       if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
       }
 });



$(document).ready(function(){
    $('#radio-btn-video-1').prop('checked',true);

    var counter = 0;
    $('#image-drop-container').bind({
        dragenter: function(e){
            e.preventDefault();
            counter++;
        },
        dragover: function(e){
            $(this).css('background','rgba(222,222,220,.5');
            $(this).addClass('inner-border');
            $('#image-drop-text').removeClass('d-none');
            e.preventDefault();
        },
        dragleave: function(e){
            counter--;
            if (counter == 0){
                $(this).css('background','');
                $(this).removeClass('inner-border');
                $('#image-drop-text').addClass('d-none');
            }
        },
        drop: function(e){
            e.preventDefault();
            counter--;
            if (counter == 0){
                $(this).css('background','');
                $(this).removeClass('inner-border');
                $('#image-drop-text').addClass('d-none');
            }
            var image = e.originalEvent.dataTransfer.files;
            createImageFormData(image);
        }
    });

    $('#video-drop-container').bind({
        dragenter: function(e){
            e.preventDefault();
            counter++;
        },
        dragover: function(e){
            $(this).css('background','rgba(222,222,220,.5');
            $(this).addClass('inner-border');
            $('#video-drop-text').removeClass('d-none');
            e.preventDefault();
        },
        dragleave: function(e){
            counter--;
            if (counter == 0){
                $(this).css('background','');
                $(this).removeClass('inner-border');
                $('#video-drop-text').addClass('d-none');
            }
        },
        drop: function(e){
            e.preventDefault();
            counter--;
            if (counter == 0){
                $(this).css('background','');
                $(this).removeClass('inner-border');
                $('#video-drop-text').addClass('d-none');
            }
            var video = e.originalEvent.dataTransfer.files;
            createVideoFormData(video);
        }
    });

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
    
});

function createImageFormData(image) {
	var formImage = new FormData();
    formImage.append('dropImage', image[0]);
	uploadImageFormData(formImage);
}

function createVideoFormData(video) {
	var videoFormData = new FormData();
    videoFormData.append('dropVideo', video[0]);
	uploadVideoFormData(videoFormData);
}

function uploadVideoFormData(videoFormData){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Loading animation
    $('#preloader-video-publish').removeClass('d-none');
    $('#dragspace-video-publish').removeClass('d-none');

    // Ajax POST request
    $.ajax({
        url: video_post_url,
        method: 'post',
        data: videoFormData,
        processData: false,
        contentType: false,
        success: function(data){

            var iconContainer  = "<div class='video-overlay'>\
                                    <div class='icon-container play-btn'>\
                                            <i class='far fa-play-circle play-icon'></i>\
                                    </div>\
                                    <div class='icon-container close-btn-video'>\
                                            <i class='far fa-times-circle'></i>\
                                    </div>\
                                  </div>";
            var videoContainer = "<video class='video-tag' id='frag1' preload='metadata' width='720px' height='540px'>\
                                    <source src='"+data['url']+"'\
                                    type='video/mp4;codecs='avc1.42E01E, mp4a.40.2'\
                                    >\
                                  </video>";
            var videoQuery = $('.video-box:not(:has(*)):first');
            videoQuery.append(iconContainer);
            videoQuery.append(videoContainer);
            $('#preloader-video-publish').addClass('d-none');
            $('#dragspace-video-publish').addClass('d-none');
        }
    });
}

function uploadImageFormData(formData) {
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Loading animation
    $('#preloader-image-publish').removeClass('d-none');
    $('#dragspace-image-publish').removeClass('d-none');
    // Ajax POST request
    $.ajax({
        url: image_post_url,
        method: 'post',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data){
            var iconContainer = "<div class='overlay'><div class='icon-container close-btn'><i class='far fa-times-circle'></i></div></div>";
            var imageContainer = '<img class="uploaded-image" src="'+data['url']+'">';
            var imageQuery = $('.image-box:not(:has(*)):first');
            imageQuery.append(iconContainer);
            imageQuery.append(imageContainer);
            imageQuery.addClass('hover-state');
            $('#preloader-image-publish').addClass('d-none');
            $('#dragspace-image-publish').addClass('d-none');
        }
    });
}

$('input[name="radio-btn-video"]').on('change',function(){
    var drop_video_container = $('#video-info-yes');
    if ($(this).val() == 0){
        drop_video_container.addClass('d-none');
        $('#video-drop-container').off();
    }else{
        var counter = 0;
        drop_video_container.removeClass('d-none');
        $('#video-drop-container').bind({
            dragenter: function(e){
                e.preventDefault();
                counter++;
            },
            dragover: function(e){
                $(this).css('background','rgba(222,222,220,.5');
                $(this).addClass('inner-border');
                $('#video-drop-text').removeClass('d-none');
                e.preventDefault();
            },
            dragleave: function(e){
                counter--;
                if (counter == 0){
                    $(this).css('background','');
                    $(this).removeClass('inner-border');
                    $('#video-drop-text').addClass('d-none');
                }
            },
            drop: function(e){
                e.preventDefault();
                counter--;
                if (counter == 0){
                    $(this).css('background','');
                    $(this).removeClass('inner-border');
                    $('#video-drop-text').addClass('d-none');
                }
                var video = e.originalEvent.dataTransfer.files;
                createFormData(video);
            }
        });
    }
});

$('#select-video-amnt').change(function(){
    if($(this).children("option:selected").val() == 2){
        for(i=2;i<6;i++){
            console.log("#video-container:nth-child("+i+")");
            $(".video-box:eq("+i+")").addClass('d-none');
        }
    }else{
        for(i=2;i<6;i++){
            console.log("#video-container:nth-child("+i+")");
            $(".video-box:eq("+i+")").removeClass('d-none');
        }
    }
});

$('.image-box').hover(function(){
    $(this).find('div.image-container').removeClass('d-none');
});

$('body').on('click','.image-box.hover-state',function(e){
    var src = $(this).find('img').attr('src');
    $('body').prepend('\
    <div class="modal-bg">\
    </div>\
    ');
    $('.modal-bg').append('<div class="icon-container-modal" id="close-btn-modal-img"><i class="fas fa-times close-btn"></i></div>')
    $('.modal-bg').append("\
    \<img class='expanded-image' src="+src+">\
    ");
    $('body').addClass('overflow-hidden');
});

$('body').on('click','#close-btn-modal-img',function(){
    $(this).parent().remove();
    $('body').removeClass('overflow-hidden');
});

$('body').on('click','.play-btn',function(e){
    e.stopPropagation();
    var videoTag = $(this).parent().parent().parent().find('video').clone();
    videoTag.prop('controls',true);
    videoTag.prop('autoplay',true);
    videoTag.removeClass('video-tag');
    videoTag.addClass('expanded-video');
    $('body').prepend('\
    <div class="modal-bg">\
    </div>\
    ');
    $('.modal-bg').append('<div class="icon-container-modal" id="close-btn-modal-video"><i class="fas fa-times close-btn"></i></div>');
    $('.modal-bg').append(videoTag);
    $('body').addClass('overflow-hidden');
});

$('body').on('click','#close-btn-modal-video',function(){
    $(this).parent().remove();
    $('body').removeClass('overflow-hidden');
});

$('.image-box').on('click','.close-btn',function(e){
    e.stopPropagation();
    var src=$(this).parent().parent().find('img').attr('src');
    console.log(src);
    $(this).parent().parent().removeClass('hover-state');
    $(this).parent().parent().empty();
    // Ajax POST request
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: image_remove_url,
        method: 'post',
        data: {
         'src': src
        },
    });
})

$('.video-box').on('click','.close-btn-video',function(e){
    e.stopPropagation();
    var src=$(this).parent().parent().find('source').attr('src');
    console.log(src);
    $(this).parent().parent().empty();
        // Ajax POST request
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: video_remove_url,
            method: 'post',
            data: {
             'src': src
            },
        });
});

$('#mobile-checkbox-publish-dwelling').click(function(){
    if( $(this).is(':checked')){
        $('#input-publish-dwelling-mobile').removeClass('d-none');
       // $('#error_row_phone_checkbox_pn').addClass('d-none');
        //$('#error_ul_phone_checkbox_pn').empty();    
    }else{
        $('#input-publish-dwelling-mobile').addClass('d-none');
        //$('#error_row_landline_pn').addClass('d-none');
        //$('#error_ul_landline_pn').empty();
    }
});

$('#landline-checkbox-publish-dwelling').click(function(){
    if( $(this).is(':checked')){
        $('#input-publish-dwelling-landline').removeClass('d-none');
       // $('#error_row_phone_checkbox_pn').addClass('d-none');
        //$('#error_ul_phone_checkbox_pn').empty();    
    }else{
        $('#input-publish-dwelling-landline').addClass('d-none');
        //$('#error_row_landline_pn').addClass('d-none');
        //$('#error_ul_landline_pn').empty();
    }
});

$("input[name='week_days']").click(function(){
    var week_day = ['Lunes','Martes','Miercoles','Jueves','Viernes'];
    if( $(this).is(':checked')){
        $.each(week_day, function(index,day){
            $('input[value='+day+']').prop('checked',true);
        });
    }else{
        $.each(week_day, function(index,day){
            $('input[value='+day+']').prop('checked',false);
        });
    }
});

$("input[name='weekend']").click(function(){
    var weekend_day = ['Sabado','Domingo'];
    if( $(this).is(':checked')){
        $.each(weekend_day, function(index,day){
            $('input[value='+day+']').prop('checked',true);
        });
    }else{
        $.each(weekend_day, function(index,day){
            $('input[value='+day+']').prop('checked',false);
        });
    }
});

$('input[name=from_hour]').change(function(){
    $('input[name=from_hour]').not(this).prop('checked',false);
});

$('input[name=from_time]').change(function(){
    $('input[name=from_time]').not(this).prop('checked',false);
});

$('input[name=to_hour]').change(function(){
    $('input[name=to_hour]').not(this).prop('checked',false);
});

$('input[name=to_time]').change(function(){
    $('input[name=to_time]').not(this).prop('checked',false);
});


$('#continent-select').change(function(){
    // Select default disable choice
    $('#country-select option:eq(0)').prop('selected',true);
    $('#state-select option:eq(0)').prop('selected',true);
    $('#city-select option:eq(0)').prop('selected',true);
    // Delete all other options
    $('#country-select option:eq(0)').clone(true).appendTo($('#country-select').empty());
    $('#state-select option:eq(0)').clone(true).appendTo($('#state-select').empty());
    $('#city-select option:eq(0)').clone(true).appendTo($('#city-select').empty());
    // Load countries of new continent
    var continent_id = $(this).children('option:selected').val();
    $.each(countries, function(key,country){
        if (continent_id == country['continent_id']){
             $('#country-select').append("<option value="+country['id']+">"+country['name']+"</option>");
        }
    });
});

$('#country-select').change(function(){
    // Select default disable choice
    $('#state-select option:eq(0)').prop('selected',true);
    $('#city-select option:eq(0)').prop('selected',true);
    // Delete all other options
    $('#state-select option:eq(0)').clone(true).appendTo($('#state-select').empty());
    $('#city-select option:eq(0)').clone(true).appendTo($('#city-select').empty());
    // Load states of new country
    var country_id = $(this).children('option:selected').val();
    $.each(states, function(key,state){
        if (country_id == state['country_id']){
            $('#state-select').append("<option value="+state['id']+">"+state['name']+"</option>");
        }
    });
});

$('#state-select').change(function(){
    // Select default disable choice
    $('#city-select option:eq(0)').prop('selected',true);
    // Delete all other options
    $('#city-select option:eq(0)').clone(true).appendTo($('#city-select').empty());
    // Load states of new country
    var state_id = $(this).children('option:selected').val();
    $.each(cities, function(key,city){
        if (state_id == city['state_id']){
            $('#city-select').append("<option value="+city['id']+">"+city['name']+"</option>");
        }
    });
});

$('input[name="phone-checkbox-publish-dwelling"]').change(function(){
    $('#error_row_phone_checkbox').addClass('d-none');
    $('#error_ul_phone_checkbox').empty();
});

$('#publish_btn_dwelling').click(function(){
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
    // Ajax POST request
    $.ajax({
        url: post_dwelling,
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
<<<<<<< HEAD
                console.log(dwelling_id);
=======
>>>>>>> 3f3965f... UPDATE::Modify last update
                $('#preloader-storing').appendTo('body');
                $('#preloader-storing').addClass('d-none');
                $('#dwell-published-modal').appendTo('.modal-bg');
                $('#dwell-published-modal').removeClass('d-none');
                $('body').addClass('overflow-hidden');
            }
        }
    });
});

function validatePhones(){
    validation = true;
    // Validate mobile number
    if( $('#mobile-checkbox-publish-dwelling').is(':checked') && !mobile_input.isValidNumber()){
        validation = false;
        var errorCode = mobile_input.getValidationError();
        $('#error_row_mobile_dwelling').removeClass('d-none');
        $('#error_ul_mobile_dwelling').append('<li>'+telephoneErrorMap[errorCode]+'</li>');
    }
    // Validate landline number
    if ($('#landline-checkbox-publish-dwelling').is(':checked') && !landline_input.isValidNumber()){
        validation = false;
        var errorCode = landline_input.getValidationError();
        $('#error_row_landline_dwelling').removeClass('d-none');
        $('#error_ul_landline_dwelling').append('<li>'+telephoneErrorMap[errorCode]+'</li>');
    }
    return validation;
}


$('#accept-publish-modal').click(function(){3
    
    var action = $("input[name='success-modal']:checked").val();
    switch(action){
        // Ver mi publicación   
        case "1":
            location.href = "/dwelling/show_details/"+dwelling_id.toString();
            break;
        // Seguir navegando en el portal
        case "2":
            $('#preloader-storing').appendTo('body');
            $('#preloader-storing').addClass('d-none');
            $('#dwell-published-modal').appendTo('body');
            $('#dwell-published-modal').addClass('d-none');
            $('.modal-bg').remove();
            $('body').removeClass('overflow-hidden');
            break;
        // Salir
        case "3":
            location.href = index;
            break;
    }
    $('html, body').animate({scrollTop:$(window).scrollTop()}, 50);
});