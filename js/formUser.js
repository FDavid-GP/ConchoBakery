window.onload = inicio;
var cadVariables;
var arrVariables;
var arrVariableActual;
var aux;
var baseDatos;

function inicio() {
    cadVariables = location.search.substring(1,location.search.length);
    arrVariables = cadVariables.split("&");
    for (i=0; i<arrVariables.length; i++) {
      arrVariableActual = arrVariables[i].split("=");
      if (isNaN(parseFloat(arrVariableActual[1])))
        eval(arrVariableActual[0]+"='"+unescape(arrVariableActual[1])+"';");
      else
        eval(arrVariableActual[0]+"="+arrVariableActual[1]+";");
    } 
    id_vendedor = parseInt(id_vendedor);
    if(id_vendedor!=0){
        mostrar(id_vendedor);
    }
}
function mostrar(id_vendedor){
    //alert(id_vendedor);
    $.get("./php/user.php?id="+id_vendedor, function(datos){
        baseDatos = JSON.parse(datos);
        document.getElementById('fname').value = baseDatos["Productos"][1].Name;
        document.getElementById('lname').value = baseDatos["Productos"][1].LastName;
        document.getElementById('lname2').value = baseDatos["Productos"][1].LastName_2;
        document.getElementById('user').value = baseDatos["Productos"][1].Username;
        document.getElementById('phone').value = baseDatos["Productos"][1].PhoneNumber;
        document.getElementById('email').value = baseDatos["Productos"][1].Email;
        document.getElementById('pass').value = baseDatos["Productos"][1].Password;
        document.getElementById('birt').value = baseDatos["Productos"][1].Age;
    });
}
function guardar(){
    var v1 = $('#fname').val();
	var v2 = $('#lname').val();
    var v3 = $('#lname2').val();
    var v4 = $('#user').val();
	var v5 = $('#phone').val();
    var v6 = $('#email').val();
    var v7 = $('#pass').val();
    var v8 = $('#birt').val();
    //alert(v1,v2);
    $.post("./php/guardarUsuario.php",{id:id_vendedor, Name:v1, LastName:v2, LastName_2:v3, PhoneNumber:v5, Age:v8, Email:v6, Password:v7, Username:v4}, function(respuesta){
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