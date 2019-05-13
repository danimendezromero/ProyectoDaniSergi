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
    <script type="text/javascript" src="assets/js/buscarOW.js"></script>
    <title>OW Players</title>
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
          <input type="text" placeholder="Search Overwatch Player" id="autocomplete-input" class="autocomplete black-text" name="buscar">
      </div>
      <button style="margin-top:10px; margin-bottom:10px; margin-left:5px;" value="Buscar" class="waves-effect waves-light btn deep-orange darken-3"><i class="material-icons">search</i></button>
      </div>
        <div class="card-action advanced-container" style="display:none;">
        <div class="roles text-white" style="float:left;" >
          <h6>Roles</h6>
          <br>
            <label>
              <input type="checkbox" class="filled-in" name="dps" <?php if(isset($_POST["dps"])){echo "checked";} ?> value="dps" data-val="dps"/>
              <span><img src="assets/img/dps.png" width="50" style="margin-top:-10px"></span>
            </label>
            <p >
            <label>
              <input type="checkbox" class="filled-in" name="tank" <?php if(isset($_POST["tank"])){echo "checked";} ?> value="tank" data-val="tank"/>
              <span><img src="assets/img/tank.png" width="50" style="margin-top:-10px"></span>
            </label>
          </p>
          <p >
            <label>
              <input type="checkbox" class="filled-in" name="support" <?php if(isset($_POST["support"])){echo "checked";} ?> value="support" data-val="support"/>
              <span><img src="assets/img/suppo.png" width="50" style="margin-top:-10px"></span>
            </label>
          </p>

        </div>

         <div class="input-field" style="float:left; padding-left:10%;">
            <select name="server">
              <option value="" disabled selected>Choose Server</option>
              <option value="">All servers</option>
              <option value="US" <?php if(isset($_POST["server"]) && $_POST["server"]=="US"){echo "selected";} ?>>US</option>
              <option value="EU" <?php if(isset($_POST["server"]) && $_POST["server"]=="EU"){echo "selected";} ?>>EU</option>
              <option value="ASIA" <?php if(isset($_POST["server"]) && $_POST["server"]=="ASIA"){echo "selected";} ?>>ASIA</option>
            </select>
          </div>
          <p style="float:left; padding-left:10%; padding:2%;">
              <label>
                <input type="checkbox" name="edad" <?php if(isset($_POST["edad"])){echo "checked";} ?>/>
                <span class="white-text">+18</span>
              </label>
            </p>


          <div class="mb-1 right" style="padding-right:15%">
            <button class="waves-effect waves-light center btn lolpfilter">Update search</button>
          </div>
          </div>

    </div>
  </div>
  </form>

  <div class="players">
  <?php
  $_POST["game"] = "2";
  $_POST["table"] = "usuario";
  include('assets/sqlquery/buscarOW.php') ?>
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
        <h4 style="font-weight:400">No se han encontrado resultados, cambia los filtros.</h4>
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
              <img src="assets/img/perfil_placeholder.jpg" alt="" class="circle responsive-img" width="150" height="150">
              <div class="age center" style="padding-right:60px;">
                '. $edad . " y/o".'
              </div>
            </div>
            <div class="col l9 m9">
              <div class="row">
                <div class="col l9 m9">
                  <div class="name black-text">
                    <h4>'. $aux["nickname"] .'</h4>
                    <h6><b>'. $aux["ow_nickname"] . "#" . $aux["ow_code"] . "#" . $aux["ow_plataforma"] .'</b></h6>
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
                    <p class="regionoverwatch">'. strtoupper($aux["ow_region"]) .'</p>
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
