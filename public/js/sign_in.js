

$('#forgot_button').click(function(){
    // $('#sign_in').modal({ show: false});
    // $('#forgot').modal('show');
    console.log("hola");
    
});
function optionRadio(name){
    var option =$('input[name="' + name + '"]:checked').val();
    var id_name = "#forgot_" + option;
    resetForgot();
    if ($(id_name).hasClass('d-none')) {
        $(id_name).removeClass('d-none');
    }
}

function resetForgot() {
    if (!$("#forgot_email").hasClass('d-none')) {
        $("#forgot_email").addClass('d-none')
    }
    if (!$("#forgot_id").hasClass('d-none')) {
        $("#forgot_id").addClass('d-none')
    }
    if (!$("#forgot_phone").hasClass('d-none')) {
        $("#forgot_phone").addClass('d-none')
    }
}
