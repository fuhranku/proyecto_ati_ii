function initPage()
{
    document.getElementById("sign_in").style.display="contents";
    document.getElementById("sign_in").style.overflow="auto";
    resetForgot();
}
function resetForgot() {
    document.getElementById("forgot_email").style.display="none";
    document.getElementById("forgot_id").style.display="none";
    document.getElementById("forgot_phone").style.display="none";
    
}

function openModal(idModal)
{
    document.getElementById(idModal).style.display="contents";
    document.getElementById(idModal).style.overflow="auto";

}

function closeModal(idModal)
{    
    document.getElementById(idModal).style.display="none";
}

function maxModal()
{

}

function minModal()
{

}

function optionRadio(name){
    var radios = document.getElementsByName(name);
    for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
    
        let varName= 'forgot_' + radios[i].value;
        openModal(varName);

        break;
    }
    }
}
initPage();