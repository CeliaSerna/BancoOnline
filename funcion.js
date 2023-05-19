function habilitar() {
  var elem  = document.getElementById("boton_pro");
  var marcada = document.getElementById("casilla").checked;
  if (marcada) {
      elem.removeAttribute("disabled");
  }else{
      elem.setAttribute("disabled", "disabled");   
  }
  }      
function limpiar2(){
    document.getElementById("mostrar").innerHTML = ""; 
}


