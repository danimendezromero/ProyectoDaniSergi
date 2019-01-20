$(document).ready(function() {
  //variables
  var key = "RGAPI-e82a4991-ea48-4067-8bfc-f9dedcf610f5";
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
      name = JSON.parse(result)[0].lol_nickname;
      region = JSON.parse(result)[0].lol_region;
      $("#lolregion").html(region.toUpperCase());
      $("#lolnick").html(name);
      $("#nickname").html(username);
    }
  }).done(function(){//sql query done
      $.ajax({
        url: "https://euw1.api.riotgames.com/lol/summoner/v4/summoners/by-name/" + name + "?api_key=" + key,
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
            $("#lolimg1").attr("src","http://ddragon.leagueoflegends.com/cdn/9.1.1/img/champion/"+img1);
            $("#lolimg2").attr("src","http://ddragon.leagueoflegends.com/cdn/9.1.1/img/champion/"+img2);
            $("#lolimg3").attr("src","http://ddragon.leagueoflegends.com/cdn/9.1.1/img/champion/"+img3);
          });
          $.ajax({
            url:"https://euw1.api.riotgames.com/lol/league/v4/positions/by-summoner/"+id+"?api_key="+key,
            }).done(function(data) {
              data.forEach(function(item){
                console.log(item);
                if(item.queueType=="RANKED_SOLO_5x5"){
                  winrate = Math.floor((item.wins /(item.wins+item.losses))*1000)/10;
                  $("#lolwinrate").append("<br>"+winrate+"%");
                  $("#lolplayed").append("<br>"+(item.wins+item.losses));
                  $("#lolrank").append("<br>"+item.tier+" "+item.rank);
                }
              });
            });

            $.ajax({
              url: "https://euw1.api.riotgames.com/lol/match/v4/matchlists/by-account/"+accountid+"?queue=420&endIndex=10&api_key="+key,
            }).done(function(item){
              console.log(item);
              item.matches.forEach(function(item){
                $.ajax({
                  url: "https://euw1.api.riotgames.com/lol/match/v4/matches/"+item.gameId+"?api_key="+key,
                }).done(function(item){
                  console.log(item);
                  item.participantIdentities.forEach(function(item){
                    if(item.player.accountId==accountid){
                      partID = item.participantId;
                    }
                  });
                  item.participants.forEach(function(item){
                    if(item.participantId==partID){
                      team = item.teamId;
                    }
                  });
                  item.participants.forEach(function(item){
                      if(item.participantId==partID && team==item.teamId){
                        totalkills += item.stats.kills;
                        kills += item.stats.kills;
                        deaths += item.stats.deaths;
                        assists += item.stats.assists;
                      }else if(team==item.teamId){
                        totalkills += item.stats.kills;
                      }
                  });
                  count++;
                  if(count==10){
                    console.log();
                    $("#lolkda").append("<br>"+((kills+assists)/deaths).toFixed(2));
                    $("#lolkp").append("<br>"+Math.round(((kills+assists)/totalkills)*100)+"%");
                  }
                });
              });
            });
        });
      });

  });


});
