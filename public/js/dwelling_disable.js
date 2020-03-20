function disableDwelling(){

    console.log("Desactivando viviendas");

    var selected_dwellings = [];

    $.each($("input[name='select-dwelling']:checked"), function(){
        selected_dwellings.push($(this).val());
    });

    console.log(selected_dwellings);

    var data = {};
    data["selected_dwellings"] = selected_dwellings;

    $.ajax({
        url: disable_post_url,
        method: 'post',
        data: data,
        success: function(data){
            // for (i=1;i<5;i++){
            //     if($('#dwelling_photo_fs'+i).find("input[name='select-dwelling']:checked")){
            //         $('#dwelling_photo_fs'+i).children('.list-photo-overlay').removeClass('d-none');
            //         $('#dwelling_photo_fs'+i).children('.list-photo-overlay').css('opacity','1');
            //     }
            // }

            //PUT OVERLAY
            $.each($("input[name='select-dwelling']:checked"), function(){
                $(this).parent().parent().parent().parent().parent().parent().children('.list-photo-overlay').removeClass('d-none');
                $(this).parent().parent().parent().parent().parent().parent().children('.list-photo-overlay').css('opacity','1');
                $(this).parent().parent().parent().parent().parent().children('.list-photo-overlay').removeClass('d-none');
                $(this).parent().parent().parent().parent().parent().children('.list-photo-overlay').css('opacity','1');
            });

            console.log(data);
        }
    });    

}

function enableDwelling(){

    console.log("Activando viviendas");

    var selected_dwellings = [];

    $.each($("input[name='select-dwelling']:checked"), function(){
        selected_dwellings.push($(this).val());
    });

    console.log(selected_dwellings);

    var data = {};
    data["selected_dwellings"] = selected_dwellings;

    $.ajax({
        url: enable_post_url,
        method: 'post',
        data: data,
        success: function(data){
            $.each($("input[name='select-dwelling']:checked"), function(){
                $(this).parent().parent().parent().parent().parent().parent().children('.list-photo-overlay').addClass('d-none');
                $(this).parent().parent().parent().parent().parent().parent().children('.list-photo-overlay').css('opacity','0');
                $(this).parent().parent().parent().parent().parent().children('.list-photo-overlay').addClass('d-none');
                $(this).parent().parent().parent().parent().parent().children('.list-photo-overlay').css('opacity','0');
            });
            console.log(data);
        }
    });   

}

function deleteDwelling(){

    console.log("Borrando viviendas");

    var selected_dwellings = [];

    $.each($("input[name='select-dwelling']:checked"), function(){
        selected_dwellings.push($(this).val());
    });

    console.log(selected_dwellings);

    var data = {};
    data["selected_dwellings"] = selected_dwellings;

    $.ajax({
        url: delete_post_url,
        method: 'post',
        data: data,
        success: function(data){
            console.log(data);

            $.each($("input[name='select-dwelling']:checked"), function(){
            
                d_dwelling = d_dwelling.filter( (x) =>{
                    return !(x.id == $(this).val())
                })

                dwelling = dwelling.filter( (x) =>{
                    return !(x.id == $(this).val())
                })

                currentPageDwelling = 1;
                setNumberOfPages();
                loadPageDwelling(currentPageDwelling);
            });
        }
    });
}

function modifyDwelling(){
    console.log("modificando vivienda");

}

function detailDwelling(){
    console.log("mostrando detalles de vivienda");

}