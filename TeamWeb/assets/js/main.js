// Initialize collapsible (uncomment the lines below if you use the dropdown variation)
// var collapsibleElem = document.querySelector('.collapsible');
// var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);
// Or with jQuery

$(document).ready(function(){
  $('.collapsible').collapsible();
  $('.sidenav').sidenav();
  $(".dropdown-trigger").dropdown({
    hover: true
  });
   $('.tabs').tabs();
});
