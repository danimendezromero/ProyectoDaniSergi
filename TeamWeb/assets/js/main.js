

$(document).ready(function(){
  var slider = document.getElementById('test-slider');
    noUiSlider.create(slider, {
     start: [18, 25],
     connect: true,
     step: 1,
     orientation: 'horizontal', // 'horizontal' or 'vertical'
     range: {
       'min': 0,
       'max': 100     },
     format: wNumb({
       decimals: 0
     })
    });
  $('.datepicker').datepicker();
  $('select').formSelect();
  $('.collapsible').collapsible();
  $('.sidenav').sidenav();
  $(".dropdown-trigger").dropdown({
    hover: false
  });



});
