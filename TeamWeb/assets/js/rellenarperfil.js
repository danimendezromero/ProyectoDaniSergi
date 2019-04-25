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

      console.log(lolnick);

      $("#languages").html(languages);
      if (ownick!=" ") {
        $("#ownick").html(ownick + "#" +  owcode + " " + owplat.toUpperCase()) ;
      }
      $("#owregion").html(owserv);
      $("#lolnick").html(lolnick);
      $("#lolregion").html(lolserv);
    }
  })
});
