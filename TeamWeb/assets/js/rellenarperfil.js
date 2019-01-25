$(document).ready(function() {
  //variables
  var languages,ownick,lolnick,owserv,lolserv,owcode,owplat;
  var url = new URL(window.location.href);
  var userid = url.searchParams.get("user");
  $.ajax({
    url: "assets/php/perfilquery.php?user="+userid,
    success: function(result){
      languages = JSON.parse(result)[0].idioma;
      ownick = JSON.parse(result)[0].ow_nickname;
      lolnick = JSON.parse(result)[0].lol_nickname;
      owserv = JSON.parse(result)[0].ow_region;
      lolserv = JSON.parse(result)[0].lol_region;
      owcode = JSON.parse(result)[0].ow_code;
      owplat = JSON.parse(result)[0].ow_plataforma;

      $("#languages").html(languages);
      $("#ownick").html(ownick);
      $("#lolnick").html(lolnick);
      $("#lolregion").html(lolserv);
      $("#owregion").html(owserv);
      $("#owcode").html(owcode);
      $("#owplat").html(owplat);
    }
  })


});
