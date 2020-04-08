var telephoneErrorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

$(".checkbox-menu").on("change", "input[type='checkbox']", function() {
    $(this).closest("li").toggleClass("active", this.checked);
 });

$('#btn-b-detallada').click(function(){
   if($('#busqueda-detallada').is(":visible")){
      $('#busqueda-detallada').css("display",'none');
   }else{
      $('#busqueda-detallada').show();
   }
});

$('.sign_in_button').click(function(e) {
    console.log(e);
    $('#sign_in').modal('show');
})

$('.btn-number1').click(function(e){
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

$('#counterRoom').focusin(function(){
   $(this).data('oldValue', $(this).val());
});

 $(document).on('click', '.allow-focus', function (e) {
    e.stopPropagation();
  });

$(document).ready(function(){
    $('.siguenos-text').removeClass('d-none');
});

$('#checkbox-natural').on('change', function() {
   $('#checkbox-juridica').prop('checked', false); 
    
});   

$('#checkbox-juridica').on('change', function() {
   $('#checkbox-natural').prop('checked', false);  
});   

$('#counterRoom').change(function() {
   
   minValue =  parseInt($(this).attr('min'));
   maxValue =  parseInt($(this).attr('max'));
   valueCurrent = parseInt($(this).val());
   
   name = $(this).attr('name');
   if(valueCurrent >= minValue){
       $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
   }else{
       alert('Sorry, the minimum value was reached');
       $(this).val($(this).data('oldValue'));
   }
   if(valueCurrent <= maxValue){
       $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
   }else{
       alert('Sorry, the maximum value was reached');
       $(this).val($(this).data('oldValue'));
   }
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

$('#contact_us_button').click(function(e) {
    var data = {
        type: 'contact'
    };

    data['email_contact'] = $('input[name="email_contact"]').val();
    data['name_contact'] = $('input[name="name_contact"]').val();
    data['message_contact'] = $.trim($("#message_contact").val());
    
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
        url: contact_post_url,
        method: 'post',
        data: data,
        // dataType: "json",
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
                $('#contact_confirm').modal("hide");
            }
            if (!$.isEmptyObject((data.success))) {
                $('#error_row_email_contact').addClass('d-none');
                $('#error_row_name_contact').addClass('d-none');
                $('#error_row_message_contact').addClass('d-none');
                $('input[name="email_contact"]').val('');
                $('input[name="name_contact"]').val('');
                $("#message_contact").val('');
                
                $('#contact_confirm').modal("show");
                
            }
        }
    })
})