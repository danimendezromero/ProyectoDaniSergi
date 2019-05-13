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
    <script type="text/javascript" src="assets/js/buscar2.js"></script>
    <title>LOL Players</title>
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
            <input type="text" placeholder="Search Lol Player" id="autocomplete-input" class="autocomplete black-text" name="buscar" value="<?php
            if(isset($_POST["buscar"])){
              echo $_POST["buscar"];
            } ?>">
        </div>
        <button style="margin-top:10px; margin-bottom:10px; margin-left:5px;" value="Buscar" class="waves-effect waves-light btn deep-orange darken-3"><i class="material-icons">search</i></button>
        </div>
          <div class="card-action advanced-container" style="display:none;">
          <div class="roles text-white" style="float:left;" >
            <h6>Roles</h6>
            <br>
              <label>
                <input type="checkbox" class="filled-in" name="top" <?php if(isset($_POST["top"])){echo "checked";} ?> value="top" data-val="top"/>
                <span><img src="assets/img/Top.png" width="50" style="margin-top:-10px"></span>
              </label>
              <p >
              <label>
                <input type="checkbox" class="filled-in" name="jungle" <?php if(isset($_POST["jungle"])){echo "checked";} ?> value="jungle" data-val="jungle"/>
                <span><img src="assets/img/Jungle.png"  width="50" style="margin-top:-10px"></span>
              </label>
            </p>
            <p >
              <label>
                <input type="checkbox" class="filled-in" name="mid" <?php if(isset($_POST["mid"])){echo "checked";} ?> value="mid" data-val="mid"/>
                <span><img src="assets/img/Mid.png"  width="50" style="margin-top:-10px"></span>
              </label>
            </p>
            <p >
              <label>
                <input type="checkbox" class="filled-in" name="bot" <?php if(isset($_POST["bot"])){echo "checked";} ?> value="bot" data-val="bot"/>
                <span><img src="assets/img/Bot.png"  width="50" style="margin-top:-10px"></span>
              </label>
            </p>
            <p >
              <label>
                <input type="checkbox" class="filled-in" name="support" <?php if(isset($_POST["support"])){echo "checked";} ?> value="support" data-val="support"/>
                <span><img src="assets/img/Support.png"  width="50" style="margin-top:-10px"></span>
              </label>
            </p>

          </div>


            <div class="input-field" style="float:left; padding-left:10%;">
               <select name="server">
                 <option value="" disabled selected>Choose Server</option>
                 <option value="">All servers</option>
                 <option value="LAS"  <?php if(isset($_POST["server"]) && $_POST["server"]=="LAS"){echo "selected";} ?>>LAS</option>
                 <option value="KR"   <?php if(isset($_POST["server"]) && $_POST["server"]=="KR"){echo "selected";} ?>>KR</option>
                 <option value="NA"   <?php if(isset($_POST["server"]) && $_POST["server"]=="NA"){echo "selected";} ?>>NA</option>
                 <option value="EUNE" <?php if(isset($_POST["server"]) && $_POST["server"]=="EUNE"){echo "selected";} ?>>EUNE</option>
                 <option value="EUW"  <?php if(isset($_POST["server"]) && $_POST["server"]=="EUW"){echo "selected";} ?>>EUW</option>
               </select>
             </div>
             <p style="float:left; padding-left:10%; padding:2%;">
                 <label>
                   <input type="checkbox" name="edad" <?php if(isset($_POST["edad"])){echo "checked";} ?>/>
                   <span class="white-text">+18</span>
                 </label>
               </p>
             <!---
             <div class="input-field" style="float:left; padding-left:10%;">
                <select id="ranks">
                  <option value="" disabled selected>Choose Rank</option>
                  <option value="1">Iron</option>
                  <option value="2">Bronze</option>
                  <option value="3">Silver</option>
                  <option value="4">Gold</option>
                  <option value="5">Platinum</option>
                  <option value="6">Diamond</option>
                  <option value="7">Master</option>
                  <option value="8">Grandmaster</option>
                  <option value="9">Challenger</option>
                </select>
              </div>
              --->

            <div class="mb-1 right" style="padding-right:15%">
              <button class="waves-effect waves-light center btn lolpfilter">Update search</button>
            </div>
            </div>

      </div>
    </div>
    </form>
  <div class="players">
  <?php
  $_POST["game"] = "1";
  $_POST["table"] = "usuario";
  include('assets/sqlquery/buscar2.php') ?>
<?php
//eliminar los resultados menores de edad
$resultado2 = [];
if(isset($_POST["edad"])){
  for ($i=0; $i < sizeof($resultado) ; $i++) {
    $aux = $resultado[$i];
    $hoy = new DateTime();
    $fecha = new DateTime($aux["fechanacimiento"]);
    $anys = $hoy->diff($fecha);
    if($anys->y>=18){
      $resultado2[] = $aux;
    }
  }
}else{
  $resultado2 = $resultado;
}
if(sizeof($resultado2)==0){
  echo '<div class="row lolp">
      <div class="card blue-grey darken-3 col l8 m8 offset-l2 offset-m2 text-center">
        <h4 style="font-weight:400">No results found, change the filters.</h4>
      </div>
      </div>';
}
for ($i = 0; $i < sizeof($resultado2) ; $i++) {
  $aux = $resultado2[$i];
  $hoy = new DateTime();
  $fecha = new DateTime($aux["fechanacimiento"]);
  $anys = $hoy->diff($fecha);
  $edad=$anys->y;
  echo '<div class="row lolp">
      <div class="card blue-grey darken-3 col l8 m8 offset-l2 offset-m2 lolpfilter">
        <div class="card-content white-text">
          <div class="row">
            <div class="col l3 m3">
              <br>
              <img src="assets/userimg/'. $aux["image"] .'.jpg" alt="" class="circle responsive-img" width="150" height="150" style="margin-left:15%">
              <div class="age center">
                  '. $edad . " y/o".'
              </div>
              <div class="row">
                <div class="elo col l5">
                </div>
                <div class="posicion col l5 offset-l1">
                  <img src="assets/img/'. $aux["lol_posicion"] .'.png"  width="100" />
                </div>
              </div>
            </div>
            <div class="col l9 m9">
              <div class="row">
                <div class="col l9 m9">
                  <div class="name black-text">
                    <h4>'. $aux["nickname"] .'</h4>
                    <h6><b>'. $aux["lol_nickname"] .'</b></h6>
                  </div>
                </div>
                <div class="col l3 m3">
                  <div class="contact">
                    <li style="list-style:none;"><a href="Profile.php?user='.$aux["id_usuario"].'" class="waves-effect waves-light btn blue">Profile</a></li>
                  </div>
                </div>
              </div>
              <div class="divider"></div>
              <div class="row">
                <div class="col l9 m9 roles">
                  <img src="assets/img/roles_placeholder.png" alt="" class="responsive-img img1">
                  <img src="assets/img/roles_placeholder.png" alt="" class="responsive-img img2">
                  <img src="assets/img/roles_placeholder.png" alt="" class="responsive-img img3">
                </div>
                <div class="col l3 m3">
                  <div class="language">
                    <p class="grey-text">Languages</p>
                    <p>'. $aux["idioma"] .'</p>
                    <br>
                    <p class="grey-text">Server</p>
                    <p>'. strtoupper($aux["lol_region"]) .'</p>
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
