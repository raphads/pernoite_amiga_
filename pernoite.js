function toggleMenu() {
   if (document.getElementById("sidebar").classList.toggle("active")){
    document.getElementsByClassName("menu-icon").toggle("visible");
        document.getElementById("sidebar").classList.toggle("deactive");
   }
   if (document.getElementById("sidebar").classList.toggle("false")){
        document.getElementById("sidebar").classList.toggle("active");
     }
}