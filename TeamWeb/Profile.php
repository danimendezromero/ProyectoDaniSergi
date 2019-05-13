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
  <script type="text/javascript" src="assets/js/perfilapiow.js"></script>
  <script type="text/javascript" src="assets/js/rellenarperfil.js"></script>
  <title>Profile</title>
</head>

<body>
<?php include('assets/php/navbar.php') ?>
  <!-- ========== Start of Content ============== -->
  <main>
  <?php include('assets/php/perfilquery.php') ?>
  <?php
  if($user["fechanacimiento"]!="0000-00-00"){
    $hoy = new DateTime();
    $fecha = new DateTime($user["fechanacimiento"]);
    $anys = $hoy->diff($fecha);
    $edad=$anys->y;
  }else{
    $edad = "-";
  }
  if(isset($user["image"])){
    $img = "assets/userimg/".$user["image"].".jpg";
  }else{
    $img = "assets/userimg/0.jpg";
  }

  ?>
  <div class="container">
    <div class="row perfil">
      <div class="card blue-grey darken-3 offset-l1 col l3 m3">
        <div class="center" style="padding-top:20px;">
          <img class="circle" id="fotoperfil" src="<?php echo $img ?>" border="1" alt="Este es el ejemplo de un texto alternativo" width="150" height="150">
        </div>
        <p id="nickname" class="grey-text text-lighten-3 center textoprin"><?php echo $user["nickname"] ?></p>
        <p class="grey-text text-lighten-3 center textoprin"><?php echo $edad ?> y/o</p>
        <p class="textotitulo">Languages</p>
        <p id="languages" class="textoclas"><?php echo $user['idioma'] ?></p>
        <p class="textotitulo">OW Nickname</p>
        <p id="ownick" class="textoclas"><?php echo $user['ow_nickname'] ?></p>
        <p class="textotitulo">OW server region</p>
        <p id="owregion" class="textoclas"><?php echo $user['ow_region'] ?></p>
        <p class="textotitulo">LOL Nickname</p>
        <p id="lolnick" class="textoclas"><?php echo $user['lol_nickname'] ?></p>
        <p class="textotitulo">Lol Server</p>
        <p id="lolregion" class="textoclas"><?php echo $user['lol_region'] ?></p>
        <div class="center" style="margin-bottom:10%; padding-top:3%">
          <?php
          if(isset($_SESSION["userid"])){
              $id = $_SESSION["userid"];
              if($_GET["user"]==$id){
                echo "<li style='list-style:none;'><a href='EditProfile.php' class='waves-effect waves-light btn blue-grey darken-2'>Edit Profile</a></li>";
              }
            }
          ?>
        </div>


        </div>

        <div class="card col l7 m9 backgroundd " style="-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;" >
          <div class="row">
          <div class="col s12">
            <ul class="tabs blue-grey darken-3 tabb1">
                <li class="tab col s3"><a href="#test1" class="active white-text">LOL</a></li>
              <li class="tab col s3"><a href="#test2" class="white-text">OW</a></li>
            </ul>
          </div>
          <div id="test1" class="col s12">

              <div class="row">
                <div class="col s12 m12">
                  <div class="card blue-grey darken-3">
                    <div class="card-content white-text">
                      <span class="card-title">Top 3 champs</span>
                      <img class="circle" id="lolimg1" style="margin-left:8%;" src="assets/img/prueba.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                      <img class="circle" id="lolimg2" style="margin-left:5%;" src="assets/img/prueba.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                      <img class="circle" id="lolimg3" style="margin-left:5%;" src="assets/img/prueba.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col s12 m12">
                  <div class="card blue-grey darken-3">
                    <div class="card-content white-text"  style="height:180px;">
                      <span class="card-title">Statics</span>
                          <div style="float:left;padding-left:3%" class="center">
                          <img src="assets/img/winrate.png"  alt="Este es el ejemplo de un texto alternativo" width="40" height="40">
                          <br><span id="lolwinrate">WinRate</span>
                          </div>
                          <div style="float:left;padding-left:8%" class="center">
                          <img src="assets/img/probar.png" alt="Este es el ejemplo de un texto alternativo" width="40" height="40">
                          <br><span id="lolplayed">Matches played</span>
                          </div>
                          <div style="float:left;padding-left:8%" class="center">
                          <img src="assets/img/kd.png"  alt="Este es el ejemplo de un texto alternativo" width="40" height="40">
                          <br><span id="lolkda">K/D</span>
                          </div>
                          <div style="float:left;padding-left:8%" class="center">
                          <img src="assets/img/killass.png" alt="Este es el ejemplo de un texto alternativo" width="40" height="40">
                          <br><span id="lolkp">Participation</span>
                          </div>
                          <div style="float:left;padding-left:8%" class="center">
                          <img src="assets/img/probar.png"  alt="Este es el ejemplo de un texto alternativo" width="40" height="40">
                          <br><span id="lolrank">Ranking</span>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div id="test2" class="col s12"><div class="row">
            <div class="col s12 m12">
              <div class="card blue-grey darken-3">
                <div class="card-content white-text">
                  <span class="card-title">Top 3 heroes</span>
                  <img class="circle" id="owimg1" style="margin-left:8%;" src="assets/img/pruebaow.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                  <img class="circle" id="owimg2" style="margin-left:5%;" src="assets/img/pruebaow.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                  <img class="circle" id="owimg3" style="margin-left:5%;" src="assets/img/pruebaow.png" border="1" alt="Este es el ejemplo de un texto alternativo" width="130" height="130">
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col s12 m12">
              <div class="card blue-grey darken-3">
                <div class="card-content white-text"  style="height:180px;">
                  <span class="card-title">Statics</span>
                      <div style="float:left;padding-left:3%" class="center">
                      <img style="" src="assets/img/winrate.png"  alt="Este es el ejemplo de un texto alternativo" width="40" height="40">
                      <br><span id="owwinrate">WinRate</span>
                      </div>
                      <div style="float:left;padding-left:8%" class="center">
                      <img  src="assets/img/probar.png" alt="Este es el ejemplo de un texto alternativo" width="40" height="40">
                      <br><span id="owplayed">Matches played</span>
                      </div>
                      <div style="float:left;padding-left:8%" class="center">
                      <img  src="assets/img/kd.png"  alt="Este es el ejemplo de un texto alternativo" width="40" height="40">
                      <br><span id="owkda">K/D</span>
                      </div>
                      <div style="float:left;padding-left:8%" class="center">
                      <img  src="assets/img/killass.png" alt="Este es el ejemplo de un texto alternativo" width="40" height="40">
                      <br><span id="healing">HealingDone</span>
                      </div>
                      <div style="float:left;padding-left:8%" class="center">
                      <img  src="assets/img/probar.png"  alt="Este es el ejemplo de un texto alternativo" width="40" height="40">
                      <br><span id="owrank">TRN</span>
                      </div>
                </div>
              </div>
            </div>
          </div></div>
        </div>
      </div>

    </div>

  </div>


  </main>
  <!-- ========== End of Content ============== -->
  <?php include('assets/php/footer.php') ?>
</body>
</html>
