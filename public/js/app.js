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
   if(type === 'natural'){
      $('#checkbox-natural').prop('checked', true);
   }else if(type === 'juridica'){
      $('#checkbox-juridica').prop('checked', true); 
   }
});

$('#btn-b-rapida').click(function(){
   if($('#busqueda-rapida').is(":visible")){
      $('#busqueda-rapida').css("display",'none');
   }else{
      $('#busqueda-rapida').show();
   }
});

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

$('.input-number').focusin(function(){
  $(this).data('oldValue', $(this).val());
});

$('.input-number').change(function() {
   
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

$(".input-number").keydown(function (e) {
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