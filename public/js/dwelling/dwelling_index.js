$(document).ready(() =>{

    $("#error_quick_search_index").addClass('d-none');
    $("#error_detailed_search_index").addClass('d-none');

    //there is error to display
    if(error_type != -1){

        displaySD();

        if(error_type == 1){
            console.log("ARRE LOCO 1");

            $("#busqueda-rapida").removeClass('d-none');
            $("#error_quick_search_index").removeClass('d-none');

        }
        else if(error_type == 2){
            console.log("ARRE LOCO 2");

            $("#busqueda-detallada").removeClass('d-none');
            $("#error_detailed_search_index").removeClass('d-none');

        }   
    }

});