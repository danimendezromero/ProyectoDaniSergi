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
    <form method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <div class="row lolp" style="margin-bottom: 0px;">
      <div class="card blue-grey darken-3 col l8 m8 offset-l2 offset-m2 lolpfilter">
        <div class="card-content white-text">
          <div class="nose" style="float:left; padding-left:3%; margin-top:-15px">
            <button type="button" class="advanced waves-effect waves-light center btn lolpfilter deep-orange darken-3">Advanced Search</button>
          </div>
        <div id="buscador" style="float:left; padding-left:8%;">
            <input type="text" placeholder="Search Player" id="autocomplete-input" class="autocomplete black-text" name="buscar">
        </div>
        <input type="submit" class="btn" value="Buscar">
        </div>
          <div class="card-action advanced-container" style="display:none;">
          <div class="roles text-white" style="float:left;" >
            <h6>Roles</h6>
            <p >
              <label>
                <input type="checkbox" class="filled-in" />
                <span class="white-text">img1</span>
              </label>
            </p>
            <p >
              <label>
                <input type="checkbox" class="filled-in" />
                <span class="white-text">img2</span>
              </label>
            </p>
            <p >
              <label>
                <input type="checkbox" class="filled-in" />
                <span class="white-text">img3</span>
              </label>
            </p>
            <p >
              <label>
                <input type="checkbox" class="filled-in" />
                <span class="white- text">img4</span>
              </label>
            </p>
            <p >
              <label>
                <input type="checkbox" class="filled-in" />
                <span class="white-text">img5</span>
              </label>
            </p>

          </div>

           <div class="input-field" style="float:left; padding-left:10%;">
              <select>
                <option value="" disabled selected>Choose Region</option>
                <option value="1">EU</option>
                <option value="2">NA</option>
                <option value="3">KR</option>
              </select>
            </div>
            <div class="input-field" style="float:left; padding-left:10%;">
               <select>
                 <option value="" disabled selected>Choose Server</option>
                 <option value="1">EU</option>
                 <option value="2">NA</option>
                 <option value="3">KR</option>
               </select>
             </div>


            <div class="mb-1 center">
              <button class="waves-effect waves-light center btn lolpfilter">Update search</button>
            </div>
            </div>

      </div>
    </form>
    <!--<form method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <div class="row lolp" style="margin-bottom: 0px;">
    <div class="card blue-grey darken-3 col l8 m8 offset-l2 offset-m2 lolpfilter">
      <div class="card-content white-text row">
      <div id="buscador" class="col l10">
          <input type="text" placeholder="Search Player" id="autocomplete-input" class="autocomplete black-text" name="buscar">
      </div>
      <div class="col l2">
        <input type="submit" value="Buscar">
      </div>

      </div>
        <div class="card-action">
        <div class="roles text-white" style="float:left;" >
          <h6>Roles</h6>
          <p >
            <label>
              <input type="checkbox" class="filled-in" />
              <span class="white-text">img1</span>
            </label>
          </p>
          <p >
            <label>
              <input type="checkbox" class="filled-in" />
              <span class="white-text">img2</span>
            </label>
          </p>
          <p >
            <label>
              <input type="checkbox" class="filled-in" />
              <span class="white-text">img3</span>
            </label>
          </p>
          <p >
            <label>
              <input type="checkbox" class="filled-in" />
              <span class="white- text">img4</span>
            </label>
          </p>
          <p >
            <label>
              <input type="checkbox" class="filled-in" />
              <span class="white-text">img5</span>
            </label>
          </p>

        </div>

         <div class="input-field" style="float:left; padding-left:10%;">
            <select>
              <option value="" disabled selected>Choose Region</option>
              <option value="1">EU</option>
              <option value="2">NA</option>
              <option value="3">KR</option>
            </select>
          </div>
          <div class="input-field" style="float:left; padding-left:10%;">
             <select>
               <option value="" disabled selected>Choose Server</option>
               <option value="1">EU</option>
               <option value="2">NA</option>
               <option value="3">KR</option>
             </select>
           </div>


          <div class="mb-1 center">
            <button class="waves-effect waves-light center btn lolpfilter">Update search</button>
          </div>
          </div>

    </div>
  </form>

  </div>
  --->
  <div class="players">
  <?php
  $_POST["game"] = "1";
  $_POST["table"] = "usuario";
  include('assets/sqlquery/buscar2.php') ?>
<?php
for ($i = 0; $i < sizeof($resultado) ; $i++) {
  $aux = $resultado[$i];
  echo '<div class="row lolp">
      <div class="card blue-grey darken-3 col l8 m8 offset-l2 offset-m2 lolpfilter">
        <div class="card-content white-text">
          <div class="row">
            <div class="col l3">
              <br>
              <img src="assets/img/perfil_placeholder.jpg" alt="" class="circle responsive-img" width="150" height="150" style="margin-left:15%">
              <div class="age center" style="display:none">
                '. $aux["fechanacimiento"] .'
              </div>
            </div>
            <div class="col l9">
              <div class="row">
                <div class="col l9">
                  <div class="name black-text">
                    <h4>'. $aux["nickname"] .'</h4>
                    <h6><b>LOL: '. $aux["lol_nickname"] .'</b></h6>
                  </div>
                </div>
                <div class="col l3">
                  <div class="contact">
                    <button class="waves-effect waves-light btn blue" type="button" name="contact" >Profile</button>
                  </div>
                </div>
              </div>
              <div class="divider"></div>
              <div class="row">
                <div class="col l9 roles">
                  <img src="assets/img/roles_placeholder.png" alt="" class="responsive-img img1">
                  <img src="assets/img/roles_placeholder.png" alt="" class="responsive-img img2">
                  <img src="assets/img/roles_placeholder.png" alt="" class="responsive-img img3">
                </div>
                <div class="col l3">
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

    <!-- ========== End of Content ============== -->
    <?php include('assets/php/footer.php') ?>
  </body>
</html>
