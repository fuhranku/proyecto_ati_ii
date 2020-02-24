
$('#btn-b-detallada').click(function(){
   if($('#busqueda-detallada').is(":visible")){
      $('#busqueda-detallada').css("display",'none');
   }else{
      $('#busqueda-detallada').show();
   }
});

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

$('#counterParking').focusin(function(){
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

