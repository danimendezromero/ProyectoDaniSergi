function content(){
  console.log("Hola");
}
$(document).ready(function(){
  //materialize
  $('.collapsible').collapsible();
  $('.sidenav').sidenav();
  $('select').formSelect();
  $(".dropdown-trigger").dropdown({
    hover: true
  });
   $('.tabs').tabs();
   $(".advanced").click(function(){
     $(".advanced-container").toggle();
   });

   var ejemplo = document.getElementById('ejemplo');
    setTimeout(function() {
        ejemplo.classList.add('cerrar');
        document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll
    }, 7000);


});
