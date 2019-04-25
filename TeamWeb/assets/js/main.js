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
   $(".image1").click(function(){
     $(".mostrarono").hide();
     $(".mostrarono2").show();
   });
   $(".image2").click(function(){
     $(".mostrarono2").hide();
     $(".mostrarono").show();
   });

   //var ejemplo = document.getElementById('ejemplo');
    //setTimeout(function() {
      //  ejemplo.classList.add('cerrar');
        //document.body.style.overflowY= "visible";// despueés de cargar le devolvemos el scroll

  //  }, 7000);


});
