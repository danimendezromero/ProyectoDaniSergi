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


});
