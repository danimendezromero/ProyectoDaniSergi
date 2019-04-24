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
  <form method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
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
          <p >
            <label>
              <input type="checkbox" class="filled-in" />
              <span class="white-text">Healer</span>
            </label>
          </p>
          <p >
            <label>
              <input type="checkbox" class="filled-in" />
              <span class="white-text">DPS</span>
            </label>
          </p>
          <p >
            <label>
              <input type="checkbox" class="filled-in" />
              <span class="white-text">Tank</span>
            </label>
          </p>

        </div>

         <div class="input-field" style="float:left; padding-left:10%;">
            <select>
              <option value="" disabled selected>Choose Server</option>
              <option value="1">US</option>
              <option value="2">EU</option>
              <option value="3">ASIA</option>
            </select>
          </div>

           <p style="float:left; padding-left:10%; padding-top:2%;">
             <label>
               <input type="checkbox" />
               <span class="white-text">>18</span>
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
  $_POST["game"] = "1";
  $_POST["table"] = "usuario";
  include('assets/sqlquery/buscarOW.php') ?>
<?php
for ($i = 0; $i < sizeof($resultado) ; $i++) {
  $aux = $resultado[$i];
  echo '<div class="row lolp">
      <div class="card blue-grey darken-3 col l8 m8 offset-l2 offset-m2 lolpfilter">
        <div class="card-content white-text">
          <div class="row">
            <div class="col l3 m3">
              <br>
              <img src="assets/img/perfil_placeholder.jpg" alt="" class="circle responsive-img" width="150" height="150">
              <div class="age center" style="display:none">
                '. $aux["fechanacimiento"] .'
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
                    <button class="waves-effect waves-light btn blue" type="button" name="contact" >Profile</button>
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
