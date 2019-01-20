<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!-- ========== Favicon ============== -->
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon_template.png" />
  <!-- ========== Fonts ============== -->
  <link rel="stylesheet" href="">
  <!-- ========== CSS ============== -->
  <link rel="stylesheet" href="assets/css/materialize.min.css">
  <link rel="stylesheet" href="assets/css/estils.css">
  <!-- ========== Icons ============== -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- ========== JavaScript ============== -->
  <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/js/perfilapi.js"></script>
  <title>Profile</title>
</head>

<body>
<?php include('assets/php/navbar.php') ?>
  <!-- ========== Start of Content ============== -->

  <div class="container" >
    <div class="row perfil">
      <div class="card blue offset-l1 col l3">
        <div class="card green offset-m1 col m10 fotoperfil">


        </div>
        <p id="nickname" class="grey-text text-lighten-3 center textoprin">Mofitex</p>
        <p class="grey-text text-lighten-3 center textoprin">19 y/o</p>
        <p class="textotitulo">Languages</p>
        <p class="textoclas">EN, ES</p>
        <p class="textotitulo">OW Nickname</p>
        <p class="textoclas">Morfitex</p>
        <p class="textotitulo">LOL Nickname</p>
        <p id="lolnick" class="textoclas"></p>
        <p class="textotitulo">Lol server region</p>
        <p id="lolregion" class="textoclas"></p>
        <p class="textotitulo">OW server region</p>
        <p class="textoclas">EU monos</p>
        <div class="center" style="margin-bottom:8%">
          <li ><a href='EditProfile.php' class='waves-effect waves-light btn blue'>Edit Profile</a></li>
        </div>


      </div>

      <div class="card red col l7 ">
        <div class="row">
          <div class="col s12">
            <ul class="tabs red tabb1">
                <li class="tab col s3"><a href="#test1" class="active white-text">LOL</a></li>
              <li class="tab col s3"><a href="#test2" class="white-text">OW</a></li>
            </ul>
          </div>
          <div id="test1" class="col s12">

              <div class="row">
                <div class="col s12 m12">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                      <span class="card-title">Top 3 champs</span>
                      <img id="lolimg1" style="margin-left:10%;" src="assets/img/prueba.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                      <img id="lolimg2" style="margin-left:5%;" src="assets/img/prueba.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                      <img id="lolimg3" style="margin-left:5%;" src="assets/img/prueba.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col s12 m12">
                  <div class="card blue-grey darken-1">
                    <div class="card-content white-text"  style="height:180px;">
                      <span class="card-title">Statics</span>
                          <div style="float:left;padding-left:5%" class="center">
                          <img src="assets/img/winrate.png"  alt="Este es el ejemplo de un texto alternativo" width="50" height="50">
                          <br><span id="lolwinrate">Win%</span>
                          </div>
                          <div style="float:left;padding-left:8%" class="center">
                          <img src="assets/img/probar.png" alt="Este es el ejemplo de un texto alternativo" width="50" height="50">
                          <br><span id="lolplayed">Matches played</span>
                          </div>
                          <div style="float:left;padding-left:8%" class="center">
                          <img src="assets/img/kd.png"  alt="Este es el ejemplo de un texto alternativo" width="50" height="50">
                          <br><span id="lolkda">K/D</span>
                          </div>
                          <div style="float:left;padding-left:8%" class="center">
                          <img src="assets/img/killass.png" alt="Este es el ejemplo de un texto alternativo" width="50" height="50">
                          <br><span id="lolkp">Participation</span>
                          </div>
                          <div style="float:left;padding-left:8%" class="center">
                          <img src="assets/img/probar.png"  alt="Este es el ejemplo de un texto alternativo" width="50" height="50">
                          <br><span id="lolrank">Ranking</span>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div id="test2" class="col s12"><div class="row">
            <div class="col s12 m12">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Top 3 heroes</span>
                  <img style="margin-left:10%;" src="assets/img/pruebaow.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                  <img style="margin-left:5%;" src="assets/img/pruebaow.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                  <img style="margin-left:5%;" src="assets/img/pruebaow.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col s12 m12">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text"  style="height:180px;">
                  <span class="card-title">Statics</span>
                      <div style="float:left;padding-left:5%" class="center">
                      <img style="" src="assets/img/winrate.png"  alt="Este es el ejemplo de un texto alternativo" width="50" height="50">
                      <br><span >Win%</span>
                      </div>
                      <div style="float:left;padding-left:8%" class="center">
                      <img  src="assets/img/probar.png" alt="Este es el ejemplo de un texto alternativo" width="50" height="50">
                      <br><span >Matches played</span>
                      </div>
                      <div style="float:left;padding-left:8%" class="center">
                      <img  src="assets/img/kd.png"  alt="Este es el ejemplo de un texto alternativo" width="50" height="50">
                      <br><span >K/D</span>
                      </div>
                      <div style="float:left;padding-left:8%" class="center">
                      <img  src="assets/img/killass.png" alt="Este es el ejemplo de un texto alternativo" width="50" height="50">
                        <br><span >Healing</span>
                      </div>
                      <div style="float:left;padding-left:8%" class="center">
                      <img  src="assets/img/probar.png"  alt="Este es el ejemplo de un texto alternativo" width="50" height="50">
                      <br><span >Ranking</span>
                      </div>
                </div>
              </div>
            </div>
          </div></div>
        </div>
      </div>

    </div>

  </div>

  <!-- ========== End of Content ============== -->
  <?php include('assets/php/footer.php') ?>
</body>
</html>
