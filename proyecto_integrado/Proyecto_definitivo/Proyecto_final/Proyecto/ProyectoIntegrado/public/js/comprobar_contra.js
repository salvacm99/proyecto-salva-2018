//fucnion que comprueba que las contraseñas estén iguales
function comprobarContra(){
  var p1 = document.getElementById("Contrasenya").value;
  var p2 = document.getElementById("re_contrasenya").value;

  //console.log("var1"+ p1 +"var2"+p2);

  if (p1 != p2) {
    //alert("Las contraseñas no coinciden");
  //  location.href ="../html/registerTrabajador.html";
  alertify.error("Usuario o constraseña incorrecto/a.");
  }
}
