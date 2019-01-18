$(document).ready(function() {
  console.log("hola");
  var key = "RGAPI-c20d6c16-b5f3-495c-b9e4-b87cfa6e8993";
  var names = [];
  var id;
  var id1,id2,id3,img1,img2,img3;
  $.getJSON("assets/js/query.php", function(data) {
    console.log(data);
    data.forEach(function(item){
      names.push(item.nickname);
      console.log(names);
    });
  }).done(function(){//sql query done
    names.forEach(function(item){
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
    });//names forEach

  });


});
