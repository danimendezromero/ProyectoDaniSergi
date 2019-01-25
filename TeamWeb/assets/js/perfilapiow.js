$(document).ready(function() {
  //variables
  var url = new URL(window.location.href);
  var userid = url.searchParams.get("user");
  var gameswin;
  var gamesplayed;
  var winrate;
  var kd;
  var healing;
  var rating;
  var kill;
  var death;
  var first = 0, second = 0, third = 0;
  var firstname = "", secondname = "", thirdname = "";
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
        gameswin=data.competitiveStats.games.won;
        gamesplayed=data.competitiveStats.games.played;
        winrate = (gameswin*100)/gamesplayed;
        $("#owwinrate").append("<br>" + winrate.toFixed(2)+"%");

        kill=data.competitiveStats.careerStats.allHeroes.combat.eliminations;
        death=data.competitiveStats.careerStats.allHeroes.combat.deaths;
        kd=kill/death;
        $("#owkda").append("<br>" + kd.toFixed(2));

        healing=data.competitiveStats.careerStats.allHeroes.assists.healingDone;
        $("#healing").append("<br>" + healing);

        $("#owplayed").append("<br>" + gamesplayed) ;

        rating=data.rating;
        $("#owrank").append("<br>" + rating);

        for (var key in data.competitiveStats.topHeroes) {
          var champs = Object.values(data.competitiveStats.topHeroes[key]);
          if (champs[2] > first){
            third = second;
            second = first;
            first = champs[2]
            thirdname = secondname;
            secondname = firstname;
            firstname = key;

          }else if (champs[2] > second){
            third = second;
            second = champs[2];
            thirdname = secondname;
            secondname = key;
          }else if (champs[2] > third){
            third = champs[2];
            thirdname = key;
          }

        }
        console.log(first, second, third);
        console.log(firstname.toLowerCase() , secondname.toLowerCase() , thirdname.toLowerCase() );

        $("#owimg1").attr("src","https://d1u1mce87gyfbn.cloudfront.net/hero/" + firstname.toLowerCase() + "/icon-portrait.png");
        $("#owimg2").attr("src","https://d1u1mce87gyfbn.cloudfront.net/hero/" + secondname.toLowerCase() + "/icon-portrait.png");
        $("#owimg3").attr("src","https://d1u1mce87gyfbn.cloudfront.net/hero/" + thirdname.toLowerCase() + "/icon-portrait.png");

  });


});

});
