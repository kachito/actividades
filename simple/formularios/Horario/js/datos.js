var nicknam = function() {

    var name=document.getElementById("nombre").value.charAt(0);
    var apellido=document.getElementById("apellido").value.toLowerCase();
    apellido=apellido.replace(/\s/g,'').toLowerCase();
    document.getElementById("usuario").value = name+apellido;

}

var isCedula = function() {

    var name=document.getElementById("cedula").value;
    if (name.length!=10){

        document.getElementById('messageced').innerHTML = 'Cedula no valida';

    }
    else {
        document.getElementById('messageced').innerHTML = '';


    }



}

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


var validateEmailA =function () {
    var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    var correo=document.getElementById("email1").value;


    if (reg.test(correo) == false) {

        document.getElementById('messageemaila').innerHTML = 'Correo no valido';

    }else {
        document.getElementById('messageemaila').innerHTML = '';

    }


}
var validateEmailR =function () {
    var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
    var correo=document.getElementById("email2").value;


    if (reg.test(correo) == false) {

        document.getElementById('messageemail').innerHTML = 'Correo no valido';

    }else {
        document.getElementById('messageemail').innerHTML = '';

    }



}


var validateUser =function () {

    var user=document.getElementById("usuario").value;


    if (user == null) {

        document.getElementById('mesa').innerHTML = 'Correo no valido';

    }else {
        document.getElementById('mesa').innerHTML = 'oks';

    }

}







