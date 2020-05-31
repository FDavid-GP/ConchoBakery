function guardar(){
alert($('#fname').val());
    var v1 = $('#fname').val();
	var v2 = $('#lname').val();
    var v3 = $('#lname2').val();
      var v4 = $('#email').val();
    var v5 = $('#pass').val();
    //alert(v1,v2);
    $.post("./php/guardarUsuario.php",{Name:v1, LastName:v2, LastName2:v3, Email:v4, Password:v5,}, function(respuesta){
        if(respuesta=="Error"){
        alert("No se pudo guardar la información");
    }
    else{
        alert("Información guardada correctamente");
        window.history.back();
    }});
}
function cancelar(){
    window.history.back();
}