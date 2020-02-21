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