function content(){
  console.log("Hola");
}
$(document).ready(function(){
  //materialize
  $('.collapsible').collapsible();
  $('.sidenav').sidenav();
  $(".dropdown-trigger").dropdown({
    hover: true
  });
});
