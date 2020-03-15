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

    var canvas = document.createElement('canvas');
    canvas.width = 640;
    canvas.height = 480;
    var context = canvas.getContext('2d');
    context.drawImage(videoFormData,0,0,canvas.width,canvas.height);

    createImageFormData(context);

    // Ajax POST request
    $.ajax({
        url: video_post_url,
        method: 'post',
        data: videoFormData,
        processData: false,
        contentType: false,
        success: function(data){

            // var iconContainer = "<div class='overlay'><div class='icon-container close-btn'><i class='far fa-times-circle'></i></div></div>";
            // var imageContainer = '<img class="uploaded-image" src="'+data['url']+'">';
            // var imageQuery = $('.image-box:not(:has(*)):first');
            // imageQuery.append(iconContainer);
            // imageQuery.append(imageContainer);
            // imageQuery.addClass('hover-state');
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
        console.log("maicol");
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
        success: function(data){
            var iconContainer = "<div class='overlay'><div class='icon-container close-btn'><i class='far fa-times-circle'></i></div></div>";
            var imageContainer = '<video class="uploaded-image" src="'+data['url']+'">';
            var imageQuery = $('.image-box:not(:has(*)):first');
            imageQuery.append(iconContainer);
            imageQuery.append(imageContainer);
            imageQuery.addClass('hover-state');
            $('#preloader-image-publish').addClass('d-none');
            $('#dragspace-image-publish').addClass('d-none'); 
        }
    });
})