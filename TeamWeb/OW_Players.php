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

    <div class="players">
    <?php
    $_POST["table"] = "usuario";
    include('assets/sqlquery/buscarOW.php') ?>
  <?php
  for ($i = 0; $i < sizeof($resultado) ; $i++) {
    $aux = $resultado[$i];
    echo '<div class="row lolp">
        <div class="card blue-grey darken-3 col l8 m8 offset-l2 offset-m2 lolpfilter">
          <div class="card-content white-text">
            <div class="row">
              <div class="col l3">
                <br>
                <img src="assets/img/perfil_placeholder.jpg" alt="" class="circle responsive-img" width="150" height="150">
              </div>
              <div class="col l9">
                <div class="row">
                  <div class="col l9">
                    <div class="name black-text">
                      <h4>'. $aux["nickname"] .'</h4>
                      <h6><b> '. $aux["ow_nickname"] .'#'. $aux["ow_code"] .'</b></h6>
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
                    </div>
                      <br>
                    <div class="server">
                      <p class="grey-text">Server</p>
                      <p>'. strtoupper($aux["ow_region"]) .'</p>
                    </div>
                    <div class="age" style="display:none">
                    <p class="grey-text">Age</p>
                    <p>'. $aux["fechanacimiento"] .'</p>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <input type="text" style="display:none;" name="plataforma" value="'. $aux["ow_plataforma"] .'" >
        <input type="text" style="display:none;" name="region" value="'. $aux["ow_region"] .'" >
        </div>';
        } ?>
    </div>

    <!-- ========== End of Content ============== -->
    <?php include('assets/php/footer.php') ?>
  </body>
</html>
