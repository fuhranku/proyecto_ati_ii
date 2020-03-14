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

    $('#image-drop-container').on('dragenter',function(e){
        e.preventDefault();
        $(this).css('border','#39b311 2px dashed');
        $(this).css('background','#f1ffef');
    });

    $('#image-drop-container').on('dragover', function(e){
        e.preventDefault();
    });

    $('#image-drop-container').on('drop',function(e){
        $(this).css('border','#07c6f1 2px dashed');
        $(this).css('background','#FFF');
        e.preventDefault();
        var image = e.originalEvent.dataTransfer.files;
        console.log(image);
        createFormData(image);
    })
});

function createFormData(image) {
	var formImage = new FormData();
    formImage.append('dropImage', image[0]);
	uploadFormData(formImage);
}

function uploadFormData(formData) {
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Ajax POST request
    $.ajax({
        url: image_post_url,
        method: 'post',
        data: formData,
        processData: false,
        contentType: false,
        success: function(data){
            // var imagePreview = $(".drop-image").clone();
            // imagePreview.attr("src", data); 
            // imagePreview.removeClass("drop-image");
            // imagePreview.addClass("preview");
            var imageTag = $('#2-image-box').children();
            imageTag.removeClass('d-none');
            imageTag.attr('src', data['url']);
        }
    });
}

$('input[name="radio-btn-video"]').on('change',function(){
    var drop_video_container = $('#video-info-yes');
    if ($(this).val() == 0){
        drop_video_container.addClass('d-none');
        //$('#video-container').removeClass('drop-container');
    }else{
        drop_video_container.removeClass('d-none');
        //$('#video-container').addClass('drop-container');
    }
});