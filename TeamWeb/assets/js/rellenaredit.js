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
      $("#ow_nick").attr("value",ownick);
      $("#ow_code").attr("value",owcode);
      $("#ow_region").attr("value",owserv);
      $("#ow_plataforma").attr("value",owplat);
      $("#lol_nick").attr("value",lolnick);
      $("#lol_region").attr("value",lolserv);
      $("#languages").attr("value",languages);
    }
  })
});
