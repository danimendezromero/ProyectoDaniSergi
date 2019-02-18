$(document).ready(function(){
  var url = new URL(window.location.href);
  var buscar = url.searchParams.get("buscar");
  function _calculateAge(birthday) { // birthday is a date
    var ageDifMs = Date.now() - birthday.getTime();
    var ageDate = new Date(ageDifMs); // miliseconds from epoch
    return Math.abs(ageDate.getUTCFullYear() - 1970);
}
  $.getJSON("assets/sqlquery/buscar.php?buscar="+buscar, function(data) {
    console.log(data);
    var txt="";
    data.forEach(function(item){
      var date = new Date(item.fechanacimiento);
      var age = _calculateAge(date);

      txt += "<div class='card col l7 lolpshow p-1'>";
      txt += "<div class='card-content white-text grey darken-2'>";
      txt += "<div class='row'>";
      txt += "<div class='col l3'>";
      txt += "<br>";
      txt += "<img src='assets/img/perfil_placeholder.jpg' class='circle responsive-img center' style='display:block;margin:auto;' width='150' height='150'>";//replace with user img
      txt += "<div class='age center'>"+(Number.isNaN(age) ? '' : ' Age : '+age )+"</div>";
      txt += "<div class='region center'>"+(item.lol_region=="" ? '' : 'Lol Server : '+item.lol_region.toUpperCase() )+"</div>";
      txt += "<div class='region center'>"+(item.ow_region=="" ? '' : 'OW Server : '+item.ow_region.toUpperCase() )+"</div>";
      txt += "</div>";
      txt += "<div class='col l9'>";
      txt += "<div class='row'>";
      txt += "<div class='col l9'>";
      txt += "<div class='name black-text'>";
      txt += "<h4>"+item.nickname+"</h4>";
      txt += "</div>";
      txt += "</div>";
      txt += "<div class='col l3'>";
      txt += "<div class='contact'>";
      txt += "<button class='waves-effect waves-light btn blue' type='button' name='contact'>Profile</button>";
      txt += "</div>";
      txt += "</div>";
      txt += "</div>";
      txt += "<div class='divider'></div>";
      txt += "<div class='row'>";
      if(item.lol_nickname!=""){
        txt += "<div class='col l10 roles'>";
        txt += `<img src='http://2.bp.blogspot.com/-HqSOKIIV59A/U8WP4WFW28I/AAAAAAAAT5U/qTSiV9UgvUY/s1600/icon.png'
        alt='' class'responsive-img' width='100' height='100' style='margin-right:5%;'>`;
        txt += "<img src='assets/img/roles_placeholder.png' alt='' class='responsive-img img1' width='100' height='100'> ";//replace with best champs
        txt += "<img src='assets/img/roles_placeholder.png' alt='' class='responsive-img img2' width='100' height='100'> ";//....
        txt += "<img src='assets/img/roles_placeholder.png' alt='' class='responsive-img img3' width='100' height='100'> ";//....
        txt += "<h5 style='display:inline;color:black;font-weight:700;'>"+item.lol_nickname+"</h5>";
        txt += "</div>";
      }else if(item.ow_nickname!=""){
        txt += "<div class='col l10 roles'>";
        txt += `<img src='https://cdn.iconscout.com/icon/free/png-256/overwatch-2-569226.png'
        alt='' class'responsive-img' width='100' height='100' style='margin-right:5%;'>`;
        txt += "<img src='assets/img/roles_placeholder.png' alt='' class='responsive-img img1' width='100' height='100'> ";//replace with best champs
        txt += "<img src='assets/img/roles_placeholder.png' alt='' class='responsive-img img2' width='100' height='100'> ";//....
        txt += "<img src='assets/img/roles_placeholder.png' alt='' class='responsive-img img3' width='100' height='100'> ";//....
        txt += "<h5 style='display:inline;color:black;font-weight:700;'>"+item.ow_nickname+"</h5>";
        txt += "</div>";
      }
      txt += "</div>";
      if(item.lol_nickname!="" &&  item.ow_nickname!=""){
      txt += "<div class='row'>";
      txt += "<div class='col l10 roles'>";
      txt += `<img src='https://cdn.iconscout.com/icon/free/png-256/overwatch-2-569226.png'
      alt='' class'responsive-img' width='100' height='100' style='margin-right:5%;'>`;
      txt += "<img src='assets/img/roles_placeholder.png' alt='' class='responsive-img img1' width='100' height='100'> ";//replace with best champs
      txt += "<img src='assets/img/roles_placeholder.png' alt='' class='responsive-img img2' width='100' height='100'> ";//....
      txt += "<img src='assets/img/roles_placeholder.png' alt='' class='responsive-img img3' width='100' height='100'> ";//....
      txt += "<h5 style='display:inline;color:black;font-weight:700;'>"+item.ow_nickname+"</h5>";
      txt += "</div>";
      txt += "</div>";
      }
      txt += "</div>";
      txt += "</div>";
      txt += "</div>";
      txt += "</div>";
    });

    $("#asdf").html(txt);
  });





















});
