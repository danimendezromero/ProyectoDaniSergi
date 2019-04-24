$(document).ready(function() {
  $(".players").children().each(function(index, item) {
    var firstname,secondname,thirdname;
    var first = second = third = 0;
    var plataforma = $(this).find("input[name='plataforma']").val();
    var region = $(this).find("input[name='region']").val();
    var name = $(this).find("h6").text().split("#")[0];
    var code = $(this).find("h6").text().split("#")[1];
    var plataformaa = $(this).find("h6").text().split("#")[2];
    var regionn = $(this).find(".regionoverwatch").text();
    console.log(name,code, plataformaa, regionn);


    $.ajax({
      url: "https://ow-api.com/v1/stats/" + plataformaa + "/" + regionn + "/" + name + "-" + code + "/complete",
    }).done(function(data) {
      console.log(data);
      /*new Promise(
          function (resolve, reject) {


          }
      );*/
      for (var key in data.competitiveStats.topHeroes) {
        console.log(key);
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
      console.log(firstname.toLowerCase(), secondname.toLowerCase(), thirdname.toLowerCase());
      $(item).find(".img1").attr("src","https://d1u1mce87gyfbn.cloudfront.net/hero/" + firstname.toLowerCase() + "/icon-portrait.png");
      $(item).find(".img2").attr("src","https://d1u1mce87gyfbn.cloudfront.net/hero/" + secondname.toLowerCase() + "/icon-portrait.png");
      $(item).find(".img3").attr("src","https://d1u1mce87gyfbn.cloudfront.net/hero/" + thirdname.toLowerCase() + "/icon-portrait.png");
      //$("#owimg1").attr("src", "https://d1u1mce87gyfbn.cloudfront.net/hero/" + firstname.toLowerCase() + "/icon-portrait.png");
      //$("#owimg2").attr("src", "https://d1u1mce87gyfbn.cloudfront.net/hero/" + secondname.toLowerCase() + "/icon-portrait.png");
      //$("#owimg3").attr("src", "https://d1u1mce87gyfbn.cloudfront.net/hero/" + thirdname.toLowerCase() + "/icon-portrait.png");

    });
  });
});
