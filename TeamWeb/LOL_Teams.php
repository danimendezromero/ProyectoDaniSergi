<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- ========== Favicon ============== -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon_template.png"/>
    <!-- ========== Fonts ============== -->
    <link rel="stylesheet" href="" >
    <!-- ========== CSS ============== -->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <link rel="stylesheet" href="assets/css/estils.css">
    <!-- ========== Icons ============== -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- ========== JavaScript ============== -->
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <title>LOL Teams</title>
  </head>
  <body>
    <?php include('assets/php/navbar.php') ?>
    <!-- ========== Start of Content ============== -->
<main>


        <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="row lolp" style="margin-bottom: 0px;">
          <div class="card blue-grey darken-3 col l8 m8 offset-l2 offset-m2 lolpfilter">
            <div class="card-content white-text">
              <div class="nose" style="float:left; padding-left:3%; margin-top:-15px">
                <button type="button" class="advanced waves-effect waves-light center btn lolpfilter deep-orange darken-3">Advanced Search</button>
              </div>
            <div id="buscador" style="float:left; padding-left:8%;">
                <input type="text" placeholder="Search Teams" id="autocomplete-input" class="autocomplete black-text" name="buscar" value="<?php if(isset($_POST["buscar"])){ echo $_POST["buscar"];} ?>">
            </div>
            <button style="margin-top:10px; margin-bottom:10px; margin-left:5px;" value="Buscar" class="waves-effect waves-light btn deep-orange darken-3"><i class="material-icons">search</i></button>
            </div>
              <div class="card-action advanced-container" style="display:none;">

                 <p style="float:left; padding-left:10%; padding:2%;">
                     <label>
                       <input type="checkbox" name="missing" <?php if(isset($_POST["missing"])){echo "checked";} ?>/>
                       <span class="white-text">Missing Members</span>
                     </label>
                   </p>

                <div class="mb-1 center">
                  <button class="waves-effect waves-light center btn lolpfilter">Update search</button>
                </div>
                </div>

          </div>
        </div>
        </form>

      <div class="players">
      <?php
      $_POST["game"] = "1";
      $_POST["table"] = "equipo";
      include('assets/sqlquery/buscar2.php') ?>
    <?php
    for ($i = 0; $i < sizeof($resultado) ; $i++) {
      $aux = $resultado[$i];
      if(isset($_POST["missing"]) && sizeof($aux["miembros"])==5){
        continue;
      }
     $miembros = array();
     $img = array();
     for ($k=0; $k < 5; $k++) {
       $miembros[$k] = "-----";
       $img[$k] = "0.jpg";
     }

      if(!isset($aux["image"])){
        $aux["image"] = "0";
      }
      for ($j=0; $j < sizeof($aux["miembros"]); $j++) {
        $miembros[$j] = "<a href='/teamweb3/teamweb/Profile.php?user=". $aux["miembros"][$j]["id_usuario"] . "'>". $aux["miembros"][$j]["nickname"] ."</a>";
        $img[$j] = $aux["miembros"][$j]["image"].".jpg";
      }
      echo '<div class="row lolp">
          <div class="card blue-grey darken-3 col l8 m8 offset-l2 offset-m2 lolpfilter">
            <div class="card-content white-text">
              <div class="row">
                <div class="col l3 m3">
                  <br>
                  <img src="assets/teamimg/'. $aux["image"] .'.jpg" alt="" class="circle responsive-img" width="150" height="150">

                </div>
                <div class="col l9 m9">
                  <div class="row">
                    <div class="col l9 m9">
                      <div class="name black-text">
                        <h4>'. $aux["nombre"] .'</h4>

                      </div>
                    </div>
                    <div class="col  offset-l1 l2 m2">
                      <li style="list-style:none;"><a href="ProfileGroup.php?team='.$aux["id_equipo"].'" class="waves-effect waves-light btn blue">Profile</a></li>
                    </div>
                  </div>
                  <div class="divider"></div>
                  <div class="row">
                    <div class="col l12 m9 roles">
                    <table>
                      <tr>
                        <td class=" center" id="tablag"><img src="assets/userimg/'. $img[0] .'" alt="" class="responsive-img" width="100"></td>
                        <td class=" center" id="tablag"><img src="assets/userimg/'. $img[1] .'" alt="" class="responsive-img" width="100"></td>
                        <td class=" center" id="tablag"><img src="assets/userimg/'. $img[2] .'" alt="" class="responsive-img" width="100"></td>
                        <td class=" center" id="tablag"><img src="assets/userimg/'. $img[3] .'" alt="" class="responsive-img" width="100"></td>
                        <td class=" center" id="tablag"><img src="assets/userimg/'. $img[4] .'" alt="" class="responsive-img" width="100"></td>
                      </tr>
                      <tr>
                        <td class="center" id="tablag";>'. $miembros[0] .'</td>
                        <td class="center" id="tablag";>'. $miembros[1] .'</td>
                        <td class="center" id="tablag";>'. $miembros[2] .'</td>
                        <td class="center" id="tablag";>'. $miembros[3] .'</td>
                        <td class="center" id="tablag";>'. $miembros[4] .'</td>
                      </tr>
                    </table>
                    </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>';
          } ?>
      </div>
</main>

    <!-- ========== End of Content ============== -->
    <?php include('assets/php/footer.php') ?>
  </body>
</html>
