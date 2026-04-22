function toggleMenu() {
   if (document.getElementById("sidebar").classList.toggle("active")){
    document.getElementsByClassName("menu-icon").toggle("visible");
        document.getElementById("sidebar").classList.toggle("deactive");
   }
   if (document.getElementById("sidebar").classList.toggle("false")){
        document.getElementById("sidebar").classList.toggle("active");
}
}

function horario(){
     var hora = document.getElementById("horas").checked;
     if(hora == true){
          document.getElementById("tempo1").readOnly = true;
          document.getElementById("tempo2").readOnly = true;
          document.getElementById("tempo1").value = "00:00";
          document.getElementById("tempo2").value = "00:00";
          //document.getElementById("tempo").disabled = true;
     } else{
         document.getElementById("tempo1").readOnly = false;
         document.getElementById("tempo2").readOnly = false;
         //document.getElementById("tempo").disabled = false;
     }
}