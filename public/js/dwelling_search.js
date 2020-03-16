var currentPageDwelling = 0
var totalPages = -1;
var propMap = ['apartamento', 'casa', 'apartamento y casa'];
var statusMap = ['alquiler', 'venta', 'alquiler y venta'];
var dwelling = [];

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

    $.ajax({
        url: quickSearch_post_url,
        method: 'post',
        data: data,
        async: false,
        success: function(data){

            dwelling = JSON.parse(data);
           
            console.log("NUMERO DE VIVIENDAS: ",dwelling.length);

            setNumberOfPages();
            loadPageDwelling(1); //load first page
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
    var comfort = $('#comfort_ds').children('option:selected').val();
    var service = $('#service_ds').children('option:selected').val();
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
    console.log("comfort id: ",comfort);
    console.log("service id: ",service);

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

    var data = {};

    data["continent"] = continent;
    data["country"] = country;
    data["state"] = state;
    data["status"] = status;
    data["property_type"] = property_type;
    data["room"] = room;
    data["bathroom"] = bathroom;
    data["park"] = park;
    data["comfort"] = comfort;
    data["service"] = service;
    data["active_price"] = active_price;
    data["minimum_price"] = minimum_price
    data["maximum_price"] = maximum_price;

    $.ajax({
        url: detailedSearch_post_url,
        method: 'post',
        data: data,
        async: false,
        success: function(data){

            dwelling = JSON.parse(data);
            
            console.log(dwelling);

            console.log("NUMERO DE VIVIENDAS: ",dwelling.length);

            setNumberOfPages();
            loadPageDwelling(1); //load first page
        }
    });    

}

    
function displayNonePagesLeft(indexStart){
    for(var i = indexStart; i < 4; i++){
        $('#dwelling_fs'+(i+1).toString()).addClass("d-none");
    }
}

function diplayDwellings(){
    for(var i = 0; i < 4; i++){
        $('#dwelling_fs'+(i+1).toString()).removeClass("d-none");
    }
}

function cancelQuickSearch(){

}

function nextPageDwelling(){
    if(currentPageDwelling + 1 > totalPages) return; //page out of boundary

    currentPageDwelling++;
    console.log("pagina siguiente: ",currentPageDwelling);
    loadPageDwelling(currentPageDwelling);
}

function previousPageDwelling(){
    if(currentPageDwelling - 1<= 0) return; //page out of boundary

    currentPageDwelling--;
    console.log("pagina anterior: ",currentPageDwelling);
    loadPageDwelling(currentPageDwelling);
}

//ALWAYS STARTS AT PAGE 1
function loadPageDwelling(page){

    console.log("cargando la pagina: ",page);
    diplayDwellings();

    //getting 4 respective dwellings to display

    var dwellingsPerPage;
    
    if(page*4 > dwelling.length){
        //calculate the rest of dwellings in this page
        dwellingsPerPage = parseInt(dwelling.length%4);
    }else{
        dwellingsPerPage = 4;
    }

    for(var i = 0; i < dwellingsPerPage; i++){

        var pageOffset = (page - 1)*4; 
        var roomBath = dwelling[i + pageOffset].rooms.toString() + " habitaciones, " 
                    + dwelling[i + pageOffset].bathrooms.toString() + " baños";

        $('#price_fs'+(i+1).toString()).text(dwelling[i + pageOffset].price);
        $('#prop_type_fs'+(i+1).toString()).text(propMap[dwelling[i + pageOffset].property_type]);
        $('#country_fs'+(i+1).toString()).text(dwelling[i + pageOffset].country_name);
        $('#state_fs'+(i+1).toString()).text(dwelling[i + pageOffset].state_name);
        $('#zone_fs'+(i+1).toString()).text(dwelling[i + pageOffset].zone_name);
        $('#details_fs'+(i+1).toString()).text(dwelling[i + pageOffset].details);
        $('#status_fs'+(i+1).toString()).text(statusMap[dwelling[i + pageOffset].status]);
        $('#room_bath_fs'+(i+1).toString()).text(roomBath);
    }

    displayNonePagesLeft(dwellingsPerPage);

    currentPageDwelling = page;
}

function setNumberOfPages(){

    $('#pagination_fs').empty(); //remove all childs from page holder

    totalPages = Math.ceil(dwelling.length / 4);
    console.log("TOTAL PAGES ARE: ", totalPages);

    $('#pagination_fs').append('<li class="page-item cursor-pointer"><a class="page-link" onclick="previousPageDwelling()" >Previous</a></li>');
    for(var i = 1; i <= totalPages; i++){
        $('#pagination_fs').append('<li class="page-item cursor-pointer"><a class="page-link" onclick="loadPageDwelling('+i.toString()+')" >'+i.toString()+'</a></li>');
    }
    $('#pagination_fs').append('<li class="page-item cursor-pointer"><a class="page-link" onclick="nextPageDwelling()">Next</a></li>');
}

function sortDwellingByPrice(){

    let sorted = false
    while(!sorted) {
        sorted = true;
        for(var i=1; i < dwelling.length; i++) {
            if(parseInt(dwelling[i].price) < parseInt(dwelling[i-1].price)) {
                let temp = dwelling[i];
                dwelling[i] = dwelling[i-1];
                dwelling[i-1] = temp;
                sorted = false;
            }
        }
    }

    loadPageDwelling(currentPageDwelling);
}

