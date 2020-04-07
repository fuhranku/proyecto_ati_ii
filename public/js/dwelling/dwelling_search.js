var currentPageDwelling = 0
var totalPages = -1;
var propMap = ['apartamento', 'casa', 'apartamento y casa'];
var statusMap = ['alquiler', 'venta', 'alquiler y venta'];
var activeMode = 1; // 1 -> tipo foto 2-> tipo lista
var dwelling = [];
var d_dwelling = [];
var service = [];
var comfort = [];
var images_url = [];
var scrollPos = 0;

//load session query
$(document).ready(()=>{
    if(session_search_query != -1){

        if(session_search_query.search_type == 1){
            console.log("making quick search saved on session");

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            // Ajax POST request

            var country = session_search_query.country[0];
            var state = session_search_query.state[0];
            var status = session_search_query.status;
            var property_type = session_search_query.property_type[0];
            
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
                url: quickSearch_post_url,
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

                    console.log("USER ID ASDLASLKF: ",userID);
                    if (userID != -1){
                        //REMOVE ALL DISABED PUBLICATIONS FROM OTHER USERS
                        dwelling = dwelling.filter(x => !(x.user_id != userID && x.enable == 0) );
                    }

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
        else if(session_search_query.search_type == 0){
            //making session detailed search
            console.log("making detailed search saved in session");

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            // Ajax POST request

            var continent = parseInt(session_search_query.continent[0]);
            var country = parseInt(session_search_query.country[0]);
            var state = parseInt(session_search_query.state[0]);
            var city = parseInt(session_search_query.city[0]);
            var status = parseInt(session_search_query.status);
            var property_type = parseInt(session_search_query.property_type);
            var room = parseInt(session_search_query.rooms);
            var bathroom = parseInt(session_search_query.bathrooms);
            var park = parseInt(session_search_query.parking);
            var comfort_array = parseInt(session_search_query.comfort[0]);
            var service_array = parseInt(session_search_query.service[0]);
            var active_price = parseInt(session_search_query.price_type);
            var minimum_price = parseInt(session_search_query.min_price);
            var maximum_price = parseInt(session_search_query.max_price);

            if(active_price == 2){//any price
                minimum_price = -1;
                maximum_price = -1;
            }

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
            data["city"] = city;
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
                url: detailedSearch_post_url,
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
                    // if (userID != -1){
                    //     //REMOVE ALL DISABED PUBLICATIONS FROM OTHER USERS
                    //     dwelling = dwelling.filter(x => !(x.user_id != userID && x.enable == 0) );
                    // }
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
        else if(session_search_query.search_type == 2){
            console.log("SEARCH BY KEY");

            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            // Ajax POST request

            var keyword = session_search_query.keyword;

            var data = {};
            data["keyword"] = keyword;

            // Prepare preloader
            $('body').prepend('\
            <div class="modal-bg">\
            </div>\
            ');
            $('#preloader-storing').removeClass('d-none');
            $('#preloader-storing').appendTo('.modal-bg');
            $('body').addClass('overflow-hidden');

            $.ajax({
                url: keywordSearch_post_url,
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

                    console.log("USER ID ASDLASLKF: ",userID);
                    if (userID != -1){
                        //REMOVE ALL DISABED PUBLICATIONS FROM OTHER USERS
                        dwelling = dwelling.filter(x => !(x.user_id != userID && x.enable == 0) );
                    }

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
    }
});


function showDetails(dwelling_number){

    if(activeMode == 1){
        //SET INFORMATION
        var pageOffset = (currentPageDwelling - 1)*4;
    
        var dwelling_id = JSON.parse(d_dwelling[dwelling_number-1+pageOffset].id);
    
        $("#dwelling-show-details"+dwelling_number.toString()).attr("href", "/dwelling/show_details/"+dwelling_id.toString());
    }
    else if(activeMode == 2){

        //SET INFORMATION
        var pageOffset = (currentPageDwelling - 1)*4;

        var dwelling_id = JSON.parse(d_dwelling[dwelling_number-1+pageOffset].id);

        $("#dwelling-show-details_list"+dwelling_number.toString()).attr("href", "/dwelling/show_details/"+dwelling_id.toString());
        
    } 


    return true;
}

function getScrollPos(){
    scrollPos = $(window).scrollTop();
}

function onDisplayModalLocation(dwelling_number){
    $('body').prepend('\
    <div class="modal-bg">\
    </div>\
    ');
    $("#dwell-location-modal").removeClass("d-none");
    $("#dwell-location-modal").appendTo(".modal-bg");
    $('body').addClass('overflow-hidden');
    getScrollPos();

    //SET INFORMATION
    var pageOffset = (currentPageDwelling - 1)*4;

    var location_text = d_dwelling[dwelling_number-1+pageOffset].location_details;

    $("#modal-info-location").text(location_text);
}

function onDisplayModalService(dwelling_number){
    $('body').prepend('\
    <div class="modal-bg">\
    </div>\
    ');
    $("#dwell-service-modal").removeClass("d-none");
    $("#dwell-service-modal").appendTo(".modal-bg");
    $('body').addClass('overflow-hidden');
    getScrollPos();

    //SET INFORMATION
    var pageOffset = (currentPageDwelling - 1)*4;

    var services_id = JSON.parse(d_dwelling[dwelling_number-1+pageOffset].services);
    var services_name = [];

    for(var j = 0; j < services_id.array.length; j++){
        var obj = service.find( (x) =>{
            return x.id == parseInt(services_id.array[j]); 
        } )
        services_name.push(obj.name);
    }

    var finalTextService = "";
    for(var j = 0; j < services_name.length-1; j++){
        finalTextService+= services_name[j] + ", ";
    }
    finalTextService += services_name[services_name.length-1];

    $("#modal-info-service").text(finalTextService);
    
}


function onDisplayModalComfort(dwelling_number){
    $('body').prepend('\
    <div class="modal-bg">\
    </div>\
    ');
    $("#dwell-comfort-modal").removeClass("d-none");
    $("#dwell-comfort-modal").appendTo(".modal-bg");
    $('body').addClass('overflow-hidden');
    getScrollPos();

    //SET INFORMATION
    var pageOffset = (currentPageDwelling - 1)*4;

    var comforts_id = JSON.parse(d_dwelling[dwelling_number-1+pageOffset].comforts);
    var comforts_name = [];

    for(var j = 0; j < comforts_id.array.length; j++){
        var obj = comfort.find( (x) =>{
            return x.id == parseInt(comforts_id.array[j]); 
        } )
        comforts_name.push(obj.name);
    }

    var finalTextComforts = "";
    for(var j = 0; j < comforts_name.length-1; j++){
        finalTextComforts+= comforts_name[j] + ", ";
    }
    finalTextComforts += comforts_name[comforts_name.length-1];

    $("#modal-info-comfort").text(finalTextComforts);
}


function onChangeSearchDisplay(){

    activeMode = $("input[name='d-dwelling-mode']:checked").val();

    if(activeMode == 1){ //tipo foto
        $("#dwelling-list-mode").addClass("d-none");
        $("#dwelling-photo-mode").removeClass("d-none");
    }
    else{ //tipo lista
        $("#dwelling-list-mode").removeClass("d-none");
        $("#dwelling-photo-mode").addClass("d-none");
    }
}

$('.accept-btn').click(function(){
    $('#no-image-modal-title').text('No se han encontrado imágenes');    
    $('#no-image-modal-body').children('p').text('Lo sentimos, esta vivienda no posee ninguna imagen.');
    $('#dwell-no-photos-modal').appendTo('#search-section');
    $('#dwell-no-photos-modal').addClass('d-none');
    $("#dwell-location-modal").appendTo("body");
    $("#dwell-service-modal").appendTo("body");
    $("#dwell-comfort-modal").appendTo("body");
    $("#dwell-location-modal").addClass("d-none");
    $("#dwell-service-modal").addClass("d-none");
    $("#dwell-comfort-modal").addClass("d-none");
    $('.modal-bg').remove();
    $('body').removeClass('overflow-hidden');
    $('html, body').animate({scrollTop:scrollPos}, 50);
});

function onPressDisplaySell(){

    d_dwelling = dwelling.filter( x => x.status == 1);

    setNumberOfPages();
    currentPageDwelling = 1;
    loadPageDwelling(currentPageDwelling);
}

function onPressDisplayRent(){
    d_dwelling = dwelling.filter( x => x.status == 0);

    setNumberOfPages();
    currentPageDwelling = 1;
    loadPageDwelling(currentPageDwelling);
}

function onPressDisplayApt(){

    d_dwelling = dwelling.filter( x => x.property_type == 0);

    setNumberOfPages();
    currentPageDwelling = 1;
    loadPageDwelling(currentPageDwelling);
}

function onPressDisplayHouse(){
    d_dwelling = dwelling.filter( x => x.property_type == 1);

    setNumberOfPages();
    currentPageDwelling = 1;
    loadPageDwelling(currentPageDwelling);
}


function onPressDisplayAll(){

    d_dwelling = [...dwelling];

    setNumberOfPages();
    currentPageDwelling = 1;
    loadPageDwelling(currentPageDwelling);
}



function onSelectDwelling(){

    //name="select-dwelling" id="dwelling-select-cb3"

    var dwellings = $("input[name='select-dwelling']:checked"); //get checked number
    var pre = "#btn-dwelling-";

    if(dwellings.length < 1){
        $(pre+"detail,"+pre+"modify,"+pre+"disable,"+pre+"enable,"+pre+"remove").addClass("d-none");
    }
    if(dwellings.length == 1){
        $(pre+"detail,"+pre+"modify,"+pre+"disable,"+pre+"enable,"+pre+"remove").removeClass("d-none");
    }
    else if(dwellings.length > 1){
        $(pre+"detail,"+pre+"modify").addClass("d-none");
        $(pre+"disable,"+pre+"enable,"+pre+"remove").removeClass("d-none");
    }
    
}
    
function displayNonePagesLeft(indexStart){
    
    for(var i = indexStart; i < 4; i++){
        $('#dwelling_list_fs'+(i+1).toString()).addClass("d-none");
    }

    for(var i = indexStart; i < 4; i++){
        $('#dwelling_photo_fs'+(i+1).toString()).addClass("d-none");
    }
}

function diplayDwellings(){
    for(var i = 0; i < 4; i++){
        $('#dwelling_list_fs'+(i+1).toString()).removeClass("d-none");
    }

    for(var i = 0; i < 4; i++){
        $('#dwelling_photo_fs'+(i+1).toString()).removeClass("d-none");
    }
}

function cancelQuickSearch(){

}

function nextPageDwelling(){
    var nextPage = currentPageDwelling + 1;
    if(nextPage> totalPages) return; //page out of boundary

    console.log("pagina siguiente: ",nextPage);
    loadPageDwelling(nextPage);
}

function previousPageDwelling(){
    var nextPage = currentPageDwelling - 1;
    if(nextPage<= 0) return; //page out of boundary

    console.log("pagina anterior: ",nextPage);
    loadPageDwelling(nextPage);
}

//ALWAYS STARTS AT PAGE 1
function loadPageDwelling(page){

    console.log("cargando la pagina: ",page);
    diplayDwellings();

    //getting 4 respective dwellings to display

    var dwellingsPerPage;
    
    if(page*4 > d_dwelling.length){
        //calculate the rest of dwellings in this page
        dwellingsPerPage = parseInt(d_dwelling.length%4);
    }else{
        dwellingsPerPage = 4;
    }

    for(var i = 0; i < dwellingsPerPage; i++){

        var pageOffset = (page - 1)*4;

        //CASE PHOTO
        //update selector dwelling id
        $("#dwelling-select-photo-cb"+(i+1).toString()).val(d_dwelling[i + pageOffset].id);

        var roomBath = d_dwelling[i + pageOffset].rooms.toString() + " habitaciones, " 
                    + d_dwelling[i + pageOffset].bathrooms.toString() + " baños";
        // $('#price_photo_fs'+(i+1).toString()).text(d_dwelling[i + pageOffset].price);
        $('#price_photo_fs'+(i+1).toString()).text(Intl.NumberFormat('de-DE').format(d_dwelling[i + pageOffset].price));
        $('#prop_type_photo_fs'+(i+1).toString()).text(propMap[d_dwelling[i + pageOffset].property_type]);
        $('#country_photo_fs'+(i+1).toString()).text(d_dwelling[i + pageOffset].country_name);
        $('#state_photo_fs'+(i+1).toString()).text(d_dwelling[i + pageOffset].state_name);
        $('#details_photo_fs'+(i+1).toString()).text(d_dwelling[i + pageOffset].details);
        $('#status_photo_fs'+(i+1).toString()).text(statusMap[d_dwelling[i + pageOffset].status]);
        $('#room_bath_photo_fs'+(i+1).toString()).text(roomBath);


        //CASE LIST
        //update selector dwelling id
        $("#dwelling-select-list-cb"+(i+1).toString()).val(d_dwelling[i + pageOffset].id);

        var roomBath = d_dwelling[i + pageOffset].rooms.toString() + " habitaciones, " 
                    + d_dwelling[i + pageOffset].bathrooms.toString() + " baños";

        $('#price_list_fs'+(i+1).toString()).text(d_dwelling[i + pageOffset].price);
        $('#prop_type_list_fs'+(i+1).toString()).text(propMap[d_dwelling[i + pageOffset].property_type]);
        $('#country_list_fs'+(i+1).toString()).text(d_dwelling[i + pageOffset].country_name);
        $('#state_list_fs'+(i+1).toString()).text(d_dwelling[i + pageOffset].state_name);
        $('#details_list_fs'+(i+1).toString()).text(d_dwelling[i + pageOffset].details);
        $('#status_list_fs'+(i+1).toString()).text(statusMap[d_dwelling[i + pageOffset].status]);
        $('#room_bath_list_fs'+(i+1).toString()).text(roomBath);        

        //getting comforts
        var comforts_id = JSON.parse(d_dwelling[i+pageOffset].comforts);
        var comforts_name = [];

        console.log(comfort);
        console.log("ARRE LOCO!!");
        console.log(comforts_id);

        for(var j = 0; j < comforts_id.array.length; j++){
            var obj = comfort.find( (x) =>{
                return x.id == parseInt(comforts_id.array[j]); 
            } )
            comforts_name.push(obj.name);
        }

        //getting services
        var services_id = JSON.parse(d_dwelling[i+pageOffset].services);
        var services_name = [];

        for(var j = 0; j < services_id.array.length; j++){
            var obj = service.find( (x) =>{
                return x.id == parseInt(services_id.array[j]); 
            } )
            services_name.push(obj.name);
        }

        var finalTextComforts = "";
        for(var j = 0; j < comforts_name.length-1; j++){
            finalTextComforts+= comforts_name[j] + ", ";
        }
        finalTextComforts += comforts_name[comforts_name.length-1];

        var finalTextServices = "";
        for(var j = 0; j < services_name.length-1; j++){
            finalTextServices+= services_name[j] + ", ";
        }
        finalTextServices += services_name[services_name.length-1];
        
        
        $('#comforts_list_fs'+(i+1).toString()).text(finalTextComforts);
        $('#services_list_fs'+(i+1).toString()).text(finalTextServices);

        //LOAD PHOTOS
        var img_url;
        var img = images_url.find( (x) =>{
            return x.dwelling_id == d_dwelling[i + pageOffset].id
        });

        if(img == undefined){
            img_url = "http://localhost:8000/uploads/images/empty.jpg";
        }else{
            img_url = img.url;
        }
        
        $('#image-dwelling-photo'+(i+1).toString()).attr("src",img_url);
        $("#image-dwelling-list"+(i+1).toString()).attr("src",img_url);

        //VERIFY DWELLINGS THAT ARE DISABLED
        //PUT OVERLAY
        if(d_dwelling[i + pageOffset].enable){
            $('#dwelling_photo_fs'+(i+1).toString()).children('.list-photo-overlay').addClass('d-none');
            $('#dwelling_photo_fs'+(i+1).toString()).children('.list-photo-overlay').css('opacity','0');
            $('#dwelling_list_fs'+(i+1).toString()).children('.list-photo-overlay').addClass('d-none');
            $('#dwelling_list_fs'+(i+1).toString()).children('.list-photo-overlay').css('opacity','0');
        }
        else{
            $('#dwelling_photo_fs'+(i+1).toString()).children('.list-photo-overlay').removeClass('d-none');
            $('#dwelling_photo_fs'+(i+1).toString()).children('.list-photo-overlay').css('opacity','1');
            $('#dwelling_list_fs'+(i+1).toString()).children('.list-photo-overlay').removeClass('d-none');
            $('#dwelling_list_fs'+(i+1).toString()).children('.list-photo-overlay').css('opacity','1');
        }
        
    }

    displayNonePagesLeft(dwellingsPerPage);


    //remove active page
    $("#dwelling-page"+currentPageDwelling).removeClass('active');

    currentPageDwelling = page;

    //set active page
    $("#dwelling-page"+currentPageDwelling).addClass('active');

}

function setNumberOfPages(){

    $('#pagination_fs').empty(); //remove all childs from page holder

    totalPages = Math.ceil(d_dwelling.length / 4);
    console.log("TOTAL PAGES ARE: ", totalPages);

    $('#pagination_fs').append('<li class="page-item cursor-pointer"><a class="page-link" onclick="previousPageDwelling()" ><< </a></li>');
    $('#pagination_fs').append('<li class="page-item active cursor-pointer" id="dwelling-page1" ><a class="page-link" onclick="loadPageDwelling(1)" >1</a></li>');
    for(var i = 2; i <= totalPages; i++){
        $('#pagination_fs').append('<li class="page-item cursor-pointer" id="dwelling-page'+i+'"><a class="page-link"  onclick="loadPageDwelling('+i.toString()+')" >'+i.toString()+'</a></li>');
    }
    $('#pagination_fs').append('<li class="page-item cursor-pointer"><a class="page-link" onclick="nextPageDwelling()"> >> </a></li>');
}

function sortDwellingByPrice(){

    let sorted = false
    while(!sorted) {
        sorted = true;
        for(var i=1; i < d_dwelling.length; i++) {
            if(parseInt(d_dwelling[i].price) < parseInt(d_dwelling[i-1].price)) {
                let temp = d_dwelling[i];
                d_dwelling[i] = d_dwelling[i-1];
                d_dwelling[i-1] = temp;
                sorted = false;
            }
        }
    }

    loadPageDwelling(currentPageDwelling);
}

//COUNTRY CONTINENT AND ALL THOSE THINGS

$('#country_fs').change(function(){
    // Select default disable choice
    $('#state_fs option:eq(0)').prop('selected',true);
    // Delete all other options
    $('#state_fs option:eq(0)').clone(true).appendTo($('#state_fs').empty());
    // Load states of new country
    var country_id = $(this).children('option:selected').val();
    $.each(states, function(key,state){
        if (country_id == state['country_id']){
            $('#state_fs').append("<option value="+state['id']+">"+state['name']+"</option>");
        }
    });
});


$('#continent_ds').change(function(){
    // Select default disable choice
    $('#country_ds option:eq(0)').prop('selected',true);
    $('#state_ds option:eq(0)').prop('selected',true);
    $('#city_ds option:eq(0)').prop('selected',true);
    // Delete all other options
    $('#country_ds option:eq(0)').clone(true).appendTo($('#country_ds').empty());
    $('#state_ds option:eq(0)').clone(true).appendTo($('#state_ds').empty());
    $('#city_ds option:eq(0)').clone(true).appendTo($('#city_ds').empty());
    // Load countries of new continent
    var continent_id = $(this).children('option:selected').val();
    $.each(countries, function(key,country){
        if (continent_id == country['continent_id']){
             $('#country_ds').append("<option value="+country['id']+">"+country['name']+"</option>");
        }
    });
});

$('#country_ds').change(function(){
    // Select default disable choice
    $('#state_ds option:eq(0)').prop('selected',true);
    $('#city_ds option:eq(0)').prop('selected',true);
    // Delete all other options
    $('#state_ds option:eq(0)').clone(true).appendTo($('#state_ds').empty());
    $('#city_ds option:eq(0)').clone(true).appendTo($('#city_ds').empty());
    // Load states of new country
    var country_id = $(this).children('option:selected').val();
    $.each(states, function(key,state){
        if (country_id == state['country_id']){
            $('#state_ds').append("<option value="+state['id']+">"+state['name']+"</option>");
        }
    });
});

$('#state_ds').change(function(){
    // Select default disable choice
    $('#city_ds option:eq(0)').prop('selected',true);
    // Delete all other options
    $('#city_ds option:eq(0)').clone(true).appendTo($('#city_ds').empty());
    // Load states of new country
    var state_id = $(this).children('option:selected').val();
    $.each(cities, function(key,city){
        if (state_id == city['state_id']){
            $('#city_ds').append("<option value="+city['id']+">"+city['name']+"</option>");
        }
    });
});

$('.photo-carousel-thrigger').click(function(e){
    e.stopPropagation();
    $('body').prepend('\
    <div class="modal-bg">\
    </div>\
    ');
    $('body').addClass('overflow-hidden');
    getScrollPos();
    // Find dwelling element clicked
    var page = $(this).data('id');
    var pageOffset = (currentPageDwelling - 1)*4;
    // Dwelling photos array
    var images = d_dwelling[page-1 + pageOffset]['images'];
    // Check if dwelling has any image
    console.log(images);
    if (images.length == 0){
        $('#dwell-no-photos-modal').appendTo('.modal-bg');
        $('#dwell-no-photos-modal').removeClass('d-none');
    }else{
        $('.modal-bg').append('<div class="icon-container-modal" id="close-btn-modal-carousel"><i class="fas fa-times close-btn"></i></div>');
        // Dinamically put photos into carousel
        var carousel_indicator = $(".carousel-indicators");
        var carousel_container = $(".carousel-inner");
        var index = 0;
        $("#carousel-container").appendTo('.modal-bg');
        $("#carousel-container").removeClass('d-none');
        $.each(images, function(key,value){
            var image_list = index == 0 ?
                    '<li data-target="#carousel-pictures" data-slide-to="'+index+'" class="active"></li>' :
                    '<li data-target="#carousel-pictures" data-slide-to="'+index+'"></li>' ;
            var image_element = index == 0 ?    '<div class="carousel-item active">\
                                                    <img class="d-block mw-100 mh-100" src="'+images[key]['url']+'">\
                                                </div>' :
                                                '<div class="carousel-item">\
                                                    <img class="d-block mw-100 mh-100" src="'+images[key]['url']+'">\
                                                </div>';
            carousel_indicator.append(image_list);
            carousel_container.append(image_element);
            index++;
        });
    }   
    // Dwelling videos array
    var videos = d_dwelling[page-1 + pageOffset]['videos'];

});

$('.video-carousel-thrigger').click(function(){
    $('body').prepend('\
    <div class="modal-bg">\
    </div>\
    ');
    $('body').addClass('overflow-hidden');
    $('#carousel-pictures').carousel('pause');
    // Find dwelling element clicked
    var page = $(this).data('id');
    var pageOffset = (currentPageDwelling - 1)*4;
    // Dwelling videos array
    var videos = d_dwelling[page-1 + pageOffset]['videos'];
    // Check if dwelling has any video
    if (videos.length == 0){
        $('#dwell-no-photos-modal').appendTo('.modal-bg');
        $('#dwell-no-photos-modal').removeClass('d-none');
        $('#no-image-modal-title').text('No se han encontrado videos');    
        $('#no-image-modal-body').children('p').text('Lo sentimos, esta vivienda no posee ningún video.');
    }else{
        $('.modal-bg').append('<div class="icon-container-modal" id="close-btn-modal-carousel"><i class="fas fa-times close-btn"></i></div>');
        // Dinamically put photos into carousel
        var carousel_indicator = $(".carousel-indicators");
        var carousel_container = $(".carousel-inner");
        $('.carousel-control-prev').addClass('video-control-prev');
        $('.carousel-control-next').addClass('video-control-next');    
        var index = 0;
        $("#carousel-container").appendTo('.modal-bg');
        $("#carousel-container").removeClass('d-none');
        $.each(videos, function(key,value){
            var video_element = index == 0 ?    '<div class="carousel-item active">\
                                                    <video class="d-block w-100 border-none" src="'+videos[key]["url"]+'" controls autoplay></iframe>\
                                                </div>' :
                                                '<div class="carousel-item">\
                                                    <video class="d-block w-100 border-none" src="'+videos[key]["url"]+'" controls autoplay></iframe>\
                                                </div>';
            carousel_container.append(video_element);
            index++;
        });
    }   

});



$('body').on('click','.icon-container-modal',function(){
    $('.carousel-control-prev').removeClass('.video-control-prev');
    $('.carousel-control-next').removeClass('.video-control-next');  
    $(".carousel-indicators").empty();
    $(".carousel-inner").empty();
    $("#carousel-container").appendTo('#search-section');
    $("#carousel-container").addClass('d-none');
    $('.modal-bg').remove();
    $('.modal-bg').addClass('d-none');
    $('body').removeClass('overflow-hidden');
});

$('.dwelling-detail').mouseenter(function(){
    var modal = $('#description-modal');
    modal.addClass('d-fixed');
    var offset = $(this).offset();
    modal.css('left', offset.left+170+'px');
    modal.css('top', offset.top+35+'px');
    modal.removeClass('d-none');
    var pageOffset = (currentPageDwelling - 1)*4;
    var dwelling_number = $(this).data('id');

    // Dwelling
    if ($(this).hasClass('dwelling-comfort')){
        modal.find('#comfort-text').removeClass('d-none');
        var comforts_id = JSON.parse(d_dwelling[dwelling_number-1+pageOffset].comforts);
        var comforts_name = [];
    
        for(var j = 0; j < comforts_id.array.length; j++){
            var obj = comfort.find( (x) =>{
                return x.id == parseInt(comforts_id.array[j]); 
            } )
            comforts_name.push(obj.name);
        }
    
        var finalTextComforts = "";
        for(var j = 0; j < comforts_name.length-1; j++){
            finalTextComforts+= comforts_name[j] + ", ";
        }
        finalTextComforts += comforts_name[comforts_name.length-1];
        modal.find('#comfort-text').children().find('span:nth-child(2)').text(finalTextComforts);
    // Services
    }else if($(this).hasClass('dwelling-services')){
        var services_id = JSON.parse(d_dwelling[dwelling_number-1+pageOffset].services);
        var services_name = [];
    
        for(var j = 0; j < services_id.array.length; j++){
            var obj = service.find( (x) =>{
                return x.id == parseInt(services_id.array[j]); 
            } )
            services_name.push(obj.name);
        }
    
        var finalTextService = "";
        for(var j = 0; j < services_name.length-1; j++){
            finalTextService+= services_name[j] + ", ";
        }
        finalTextService += services_name[services_name.length-1];

        modal.find('#services-text').children().find('span:nth-child(2)').text(finalTextService);
        modal.find('#services-text').removeClass('d-none');
    // Location
    }else{
        modal.find('#location-text').removeClass('d-none');
        var location_text = d_dwelling[dwelling_number-1+pageOffset].location_details;
        modal.find('#location-text').children().find('span:nth-child(2)').text(location_text);
    }
});

function modifyDwelling(){
    var selected_dwellings = [];

    $.each($("input[name='select-dwelling']:checked"), function(){
        selected_dwellings.push($(this).val());
    });

    //location.href = "/dwelling/modify/"+selected_dwellings[0].toString();
    window.open(base_url+"/dwelling/modify/"+selected_dwellings[0].toString(), '_blank');

}


function detailDwelling(){

    var selected_dwellings = [];

    $.each($("input[name='select-dwelling']:checked"), function(){
        selected_dwellings.push($(this).val());
    });

    window.open(base_url+"/dwelling/show_details/"+selected_dwellings[0].toString(), '_blank');
}

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
            $.each($("input[name='select-dwelling']:checked"), function(){
                $(this).parent().parent().parent().parent().parent().parent().children('.list-photo-overlay').removeClass('d-none');
                $(this).parent().parent().parent().parent().parent().parent().children('.list-photo-overlay').css('opacity','1');
                $(this).parent().parent().parent().parent().parent().children('.list-photo-overlay').removeClass('d-none');
                $(this).parent().parent().parent().parent().parent().children('.list-photo-overlay').css('opacity','1');
            });

            console.log(data);

            for(var i = 0; i < selected_dwellings.length; i++){

                dwelling.find( (x) =>{
                    return x.id == selected_dwellings[i];
                }).enable = 0;

                d_dwelling.find( (x) =>{
                    return x.id == selected_dwellings[i];
                }).enable = 0;
            }
            
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

            for(var i = 0; i < selected_dwellings.length; i++){

                dwelling.find( (x) =>{
                    return x.id == selected_dwellings[i];
                }).enable = 1;

                d_dwelling.find( (x) =>{
                    return x.id == selected_dwellings[i];
                }).enable = 1;
            }
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


$('.dwelling-detail').mouseleave(function(){
    $('#description-modal > *').addClass('d-none');
    $('#description-modal').removeClass('d-fixed');
    $('#description-modal').addClass('d-none');
    $('#description-modal').addClass('d-none');
});

$('.dwelling-icon').click(function(){
    // Find dwelling element clicked
    var page = $(this).data('id');
    var pageOffset = (currentPageDwelling - 1)*4;
    var dwelling_id = d_dwelling[page-1 + pageOffset]['id'];
    if( $(this).hasClass('see-more-icon')){
        window.open(base_url+'/dwelling/show_details/'+dwelling_id,'_blank');
    }
    else if ($(this).hasClass('modify-icon')){
        window.open(base_url+'/dwelling/modify/'+dwelling_id,'_blank');
    }
    else if ($(this).hasClass('delete-icon')){
        $('#dwelling-select-photo-cb'+page).prop('checked',true);
        console.log($('input[name="select-dwelling"]:checked'));
        //deleteDwelling();
    }
});
