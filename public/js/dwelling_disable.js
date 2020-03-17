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
        }
    }); 

}

function modifyDwelling(){
    console.log("modificando vivienda");

}

function detailDwelling(){
    console.log("mostrando detalles de vivienda");

}