$(document).ready(function() {
  //variables
  var url = new URL(window.location.href);
  var userid = url.searchParams.get("user");
  var id1,id2,id3,img1,img2,img3,name,id,accountid,partID,team;
  var kills = 0;
  var deaths = 0;
  var assists = 0;
  var count = 0;
  var totalkills = 0;
  $.ajax({
    url: "assets/php/perfilquery.php?user="+userid,
    success: function(result){
      username = JSON.parse(result)[0].nickname;
      name = JSON.parse(result)[0].ow_nickname;
      code = JSON.parse(result)[0].ow_code;
      region = JSON.parse(result)[0].ow_region;
      plataforma = JSON.parse(result)[0].ow_plataforma;

      $("#owregion").html(region.toUpperCase());
      $("#ownick").html(name);
      $("#owplat").html(plataforma);
      $("#owcode").html(code);
      $("#nickname").html(username);
    }
  }).done(function(){//sql query done
      $.ajax({
        url: "https://ow-api.com/v1/stats/" + plataforma + "/" + region + "/" + name + "-" + code + "/complete",
      }).done(function(data) {
        console.log(data);
      })

  });


});
