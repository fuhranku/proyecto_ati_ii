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
    $.each(dwelling_data['images'], function(key,value){
        console.log(dwelling_data['images'][value]);
        // $.each(value,function(image,value2){
        //     var iconContainer = "<div class='overlay'><div class='icon-container close-btn'><i class='far fa-times-circle'></i></div></div>";
        //     var imageContainer = '<img class="uploaded-image" src="'+value2['url']+'">';
        //     var imageQuery = $('.image-box:not(:has(*)):first');
        //     imageQuery.append(iconContainer);
        //     imageQuery.append(imageContainer);
        //     imageQuery.addClass('hover-state');
        // });
    });
});



