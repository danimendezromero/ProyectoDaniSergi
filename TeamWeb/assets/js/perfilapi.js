$(document).ready(function() {
  console.log("hoal");
  //variables
  var key = "RGAPI-31dec1d4-a869-4b56-bd64-6d8d56956e48";
  var url = new URL(window.location.href);
  var userid = url.searchParams.get("user");
  var id1,id2,id3,img1,img2,img3,name;
  $.getJSON("assets/php/perfilquery.php?user="+userid, function(data,status) {
    console.log(status);
  }).done(function(){//sql query done
      $.ajax({
        url: "https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/" + item + "?api_key=" + key,
      }).done(function(data) {
        console.log(data);
        id = data.id;
      }).done(function(){//get id done
        $.ajax({
          url: "https://euw1.api.riotgames.com//lol/champion-mastery/v4/champion-masteries/by-summoner/"+id+"?api_key="+key,
        }).done(function(data) {
          id1 = data[0].championId;
          id2 = data[1].championId;
          id3 = data[2].championId;
        }).done(function(){
          $.getJSON("http://ddragon.leagueoflegends.com/cdn/9.1.1/data/en_US/champion.json", function(data) {
            for (var key in data.data) {
              var champs = Object.values(data.data[key]);
              if(champs[2] ==id1){
                img1 = champs[7].full;
              }else if(champs[2] == id2){
                img2 = champs[7].full;
              }else if(champs[2] == id3){
                img3 = champs[7].full;
              }
            }
            $(".img1").attr("src","http://ddragon.leagueoflegends.com/cdn/9.1.1/img/champion/"+img1);
            $(".img2").attr("src","http://ddragon.leagueoflegends.com/cdn/9.1.1/img/champion/"+img2);
            $(".img3").attr("src","http://ddragon.leagueoflegends.com/cdn/9.1.1/img/champion/"+img3);
          });
        });
      });

  });


});
