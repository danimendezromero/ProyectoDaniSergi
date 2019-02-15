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
   var slider = document.getElementById('test-slider');
  noUiSlider.create(slider, {
   start: [20, 80],
   connect: true,
   step: 1,
   orientation: 'horizontal', // 'horizontal' or 'vertical'
   range: {
     'min': 0,
     'max': 100
   },
   format: wNumb({
     decimals: 0
   })
  });
});
