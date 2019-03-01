$(document).ready(function(){
  const key = "RGAPI-63ec5918-e1cc-49c7-815d-b13d17d910c2";
  $(".players").children().each(function(index,item){
    console.log(index);
    let nick = $(this).find("h6").text();
    nick = nick.replace("LOL: ","");
    var id1,id2,id3,img1,img2,img3,id,accountid;
    var fecha = $(this).find(".age").html().trim();
    var date = new Date(fecha);


    function _calculateAge(birthday) { // birthday is a date
      var ageDifMs = Date.now() - birthday.getTime();
      var ageDate = new Date(ageDifMs); // miliseconds from epoch
      return Math.abs(ageDate.getUTCFullYear() - 1970);
    }
    if(fecha!="0000-00-00"){
      $(this).find(".age").html("Age: "+_calculateAge(date));
      $(this).find(".age").css("display","block");
    }else{
      $(this).find(".age").html("");

    }
    $.ajax({
      url: "https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/" + nick + "?api_key=" + key,
    }).done(function(data) {
      console.log(data);
      id = data.id;
      accountid = data.accountId;
    }).done(function(){//get id done
      $.ajax({
        url: "https://euw1.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/"+id+"?api_key="+key,
      }).done(function(data) {
        console.log(data);
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
          $(item).find(".img1").attr("src","http://ddragon.leagueoflegends.com/cdn/9.1.1/img/champion/"+img1);
          $(item).find(".img2").attr("src","http://ddragon.leagueoflegends.com/cdn/9.1.1/img/champion/"+img2);
          $(item).find(".img3").attr("src","http://ddragon.leagueoflegends.com/cdn/9.1.1/img/champion/"+img3);
        });
      });
    });

  });
});
