function quickSearch(){

    console.log("realizando quick search");

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Ajax POST request

    var country = $('#country_fs').children('option:selected').val();
    var state = $('#state_fs').children('option:selected').val();
    var status = $("input[name='status_fs']:checked").val();
    var property_type = $('#property_type_fs').children('option:selected').val();
    
    var data = {};
    data["country"] = country;
    data["state"] = state;
    data["status"] = status;
    data["property_type"] = property_type;


    console.log("country: ",country);
    console.log("state: ",state);
    console.log("status: ",status);
    console.log("property_type: ",property_type);

    // Prepare preloader
    $('body').prepend('\
    <div class="modal-bg">\
    </div>\
    ');
    $('#preloader-storing').removeClass('d-none');
    $('#preloader-storing').appendTo('.modal-bg');
    $('body').addClass('overflow-hidden');

    $.ajax({
        url: quickSearch_post_url_publication,
        method: 'post',
        data: data,
        success: function(data){

            
            var parsedData = JSON.parse(data);
            dwelling = parsedData["dwellings"];
            service = parsedData["services"];
            comfort = parsedData["comforts"];
            images_url = parsedData["images_url"];

            console.log(images_url);

            console.log(dwelling);

            console.log("USER ID: ",userID);

            

            //copy dwelling to displayed dwelling
            d_dwelling = [...dwelling];
           
            console.log("NUMERO DE VIVIENDAS: ",dwelling.length);

            setNumberOfPages();
            loadPageDwelling(1); //load first page

            //REMOVE PRELOADER
            // Send preloader back to body tag
            $('#preloader-storing').addClass('d-none');
            $('#preloader-storing').appendTo('body');
            // Remove modal-bg
            $('.modal-bg').remove();
            $('body').removeClass('overflow-hidden');

            $("#dwelling-search-result").removeClass("d-none");

            if(status == 2){
                $("#dwelling_status_filters").removeClass('d-none');
            }
            else{
                $("#dwelling_status_filters").addClass('d-none');
            }

            //DISPLAY BUTTON FILTERS 
            if(property_type == 2){
                $("#dwelling_prop_filters").removeClass('d-none');
            }
            else{
                $("#dwelling_prop_filters").addClass('d-none');
            }
        }
    });    
}

function detailedSearch(){

    console.log("realizando detailed search");

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Ajax POST request

    var continent = $('#continent_ds').children('option:selected').val();
    var country = $('#country_ds').children('option:selected').val();
    var state = $('#state_ds').children('option:selected').val();
    var status = $("input[name='status_ds']:checked").val();
    var property_type = $("input[name='property_type_ds']:checked").val();
    var room = $('#counterRoom').val();
    var bathroom = $('#counterBath').val();
    var park = $('#counterPark').val();
    var comfort_array = $('#comfort_ds').children('option:selected').val();
    var service_array = $('#service_ds').children('option:selected').val();
    var active_price = $("input[name='price_ds']:checked").val();
    var minimum_price;
    var maximum_price;

    console.log("country: ",country);
    console.log("state: ",state);
    console.log("status: ",status);
    console.log("property_type: ",property_type);

    console.log("numero de habitaciones: ",room);
    console.log("numero de baños: ",bathroom);
    console.log("numero de estacionamientos: ",park);
    console.log("el price active es: ",active_price);
    console.log("el continent es : ",continent);
    console.log("comfort id: ",comfort_array);
    console.log("service id: ",service_array);

    if(active_price == 1){ //search by price
        minimum_price = $("#minimum_ds").val();
        maximum_price = $("#maximum_ds").val();
    }
    else if(active_price == 2){//any price
        minimum_price = -1;
        maximum_price = -1;
    }

    console.log("valor de maximum_price ",maximum_price);
    console.log("valor de minimum_price ",minimum_price);

    // Prepare preloader
    $('body').prepend('\
    <div class="modal-bg">\
    </div>\
    ');
    $('#preloader-storing').removeClass('d-none');
    $('#preloader-storing').appendTo('.modal-bg');
    $('body').addClass('overflow-hidden');

    var data = {};

    data["continent"] = continent;
    data["country"] = country;
    data["state"] = state;
    data["status"] = status;
    data["property_type"] = property_type;
    data["room"] = room;
    data["bathroom"] = bathroom;
    data["park"] = park;
    data["comfort"] = comfort_array;
    data["service"] = service_array;
    data["active_price"] = active_price;
    data["minimum_price"] = minimum_price
    data["maximum_price"] = maximum_price;

    $.ajax({
        url: detailedSearch_post_url_publication,
        method: 'post',
        data: data,
        success: function(data){

            var parsedData = JSON.parse(data);
            dwelling = parsedData["dwellings"];
            service = parsedData["services"];
            comfort = parsedData["comforts"];
            images_url = parsedData["images_url"];

            console.log(comfort);
            console.log(dwelling);

            console.log("NUMERO DE VIVIENDAS: ",dwelling.length);

            //copy dwelling to displayed dwelling
            d_dwelling = [...dwelling];

            setNumberOfPages();
            loadPageDwelling(1); //load first page

            //REMOVE PRELOADER
            // Send preloader back to body tag
            $('#preloader-storing').addClass('d-none');
            $('#preloader-storing').appendTo('body');
            // Remove modal-bg
            $('.modal-bg').remove();
            $('body').removeClass('overflow-hidden');

            $("#dwelling-search-result").removeClass("d-none");

            if(status == 2){
                $("#dwelling_status_filters").removeClass('d-none');
            }
            else{
                $("#dwelling_status_filters").addClass('d-none');
            }

            //DISPLAY BUTTON FILTERS 
            if(property_type == 2){
                $("#dwelling_prop_filters").removeClass('d-none');
            }
            else{
                $("#dwelling_prop_filters").addClass('d-none');
            }
        }
    });    
}