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

  <title>Profile</title>
</head>

<body>
<?php include('assets/php/navbar.php') ?>
  <!-- ========== Start of Content ============== -->
  <main>
<?php include('assets/php/teamquery.php') ?>
  <div class="container">
    <div class="row" style="margin-top: 20px;">

        <div class="card col offset-l1 l10 m9 backgroundd " style="-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;  margin-bottom:-30px;" >
          <div class="row">
          <div id="test1" class="col l12">

              <div class="row">
                <div class="col l12 m12">
                  <div class="card blue-grey darken-3">
                          <div class="card-content white-text">
                            <?php include('assets/php/errors.php'); ?>
                            <div class="row">
                              <div class="col l10 s10 m10">
                                <br>
                                <img style="float:left" src="assets/teamimg/<?php echo $team["image"]  ?>.jpg" alt="" class="circle responsive-img" width="150">
                                <div class="name black-text" style="float:left; margin: 35px;">
                                  <h4><?php echo $team["nombre"] ?></h4>

                                </div>
                              </div>

                              <div class="col l2 m1 s1">

                                <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                  <?php
                                    if(isset($_SESSION["userid"]) && $team["creador"]==$_SESSION["userid"]){
                                      echo "<button class='waves-effect waves-light btn red' name='Delete'>Delete Team</button>";
                                    }
                                   ?>

                                </form>
                              </div>
                              <div class="col l9 m9">
                                <div class="row" style="padding-top: 5%">
                                  <div class="col offset-l2 l12 m9 roles">
                                  <table>
                                    <tr>
                                      <form id="aform" method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                      <?php
                                      for ($i=0; $i < sizeof($members); $i++) {
                                        $aux = $members[$i];
                                          echo "<td class='center' id='tablag'><img src='assets/userimg/". $aux["image"] .".jpg' alt='' class='responsive-img img1' width='150'></td>";
                                      }
                                      for ($i=0; $i < 5-sizeof($members); $i++) {
                                          echo "<td class='center' id='tablag'><img src='assets/userimg/0.jpg' alt='' class='responsive-img img1' width='150'></td>";
                                      }

                                      ?>

                                    </tr>
                                    <tr>
                                      <?php
                                      for ($i=0; $i < sizeof($members); $i++) {
                                        $aux = $members[$i];
                                          echo "<td class='center' id='tablag'><a href='Profile.php?user=". $aux["id_usuario"] ."'>". $aux["nickname"] ."</a></td>";
                                      }

                                      for ($i=0; $i < 5 - sizeof($members); $i++) {

                                          echo "<td class='center' id='tablag'><a name='enviarsolicitud' onclick='enviarsolicitud();' href='javascript:void(0)'>Enviar solicitud</a></td>";
                                      }
                                      echo "<input name='solicitud' type='hidden'>";
                                      ?>

                                    </form>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                        </div>
                  </div>
                </div>
              </div>


        </div>
      </div>
      <div class='card col offset-l1 l10 m9 backgroundd ' style='-webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;' >
          <div class='row'>
          <div id='test1' class='col l12'>

              <div class='row'>
                <div class='col l12 m12'>
                  <div class='card blue-grey darken-3'>
                          <div class='card-content white-text'>
                            <div class='row'>

                            <div class="col offset-l1 l9 black-text">
                              <h3><b>Announcement</b></h3>
                          </div>
                          <?php
                            if(isset($_SESSION["userid"]) && $_SESSION["userid"]==$team["creador"]){
                          echo "<div class='col l2'>
                            <button id='edit' class='waves-effect waves-light btn blue'>Edit</button>
                          </div>";
                        }
                          ?>
                          </div>
                          <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']).'?team='.$_GET["team"] ?>">
                          <div class="row">
                            <div class="col offset-l1 l10 black-text logmsg">
                              <p><?php if($team["log"]==""){
                                echo "Write a message to the team.";
                              }else{
                                echo $team["log"];
                              }

                              ?></p>
                            </div>
                            <div class="col offset-l1 l10 black-text editlog" style="display:none;">
                              <textarea id="textarea1" name="log" class="materialize-textarea"><?php if($team["log"]==""){
                                echo "Write a message to the team.";
                              }else{
                                echo $team["log"];
                              }

                              ?></textarea>
                            </div>
                          </div>
                          <?php
                            if(isset($_SESSION["userid"]) && $_SESSION["userid"]==$team["creador"]){
                              echo "<div class='row'>
                                <div class='col offset-l9 l1'>
                                  <button style='display:none;' id='save' name='save_log' type='submit' class='waves-effect waves-light btn blue'>Save</button>
                                </div>
                                <div class='col l1'>
                                  <button style='display:none;' id='cancel' type='button' class='waves-effect waves-light btn red'>Cancel</button>
                                </div>
                              </div>";
                            }
                           ?>
                        </form>
                        </div>
                        </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
<?php

if($team["solicitudes"] ){

    echo   "<div class='card col offset-l1 l10 m9 backgroundd ' style='-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none;' >
        <div class='row'>
        <div id='test1' class='col l12'>

            <div class='row'>
              <div class='col l12 m12'>
                <div class='card blue-grey darken-3'>
                        <div class='card-content white-text'>
                          <div class='row'>

                          <div class='col l9 m9'>
                            <div class='row' style='padding-top: 5%'>
                              <div class='col offset-l2 l12 m9 '>
                                <div class='black-text' style=''>
                                  <h5><b>Solucitudes pendientes:</b></h5>";
                                  for ($i=0; $i < sizeof($solicitudes) ; $i++) {
                                    $aux = $solicitudes[$i];
                                    echo "<div class='row'>
                                    <div class='col l8'>
                                    <h6 style='float:left;'><a href='Profile.php?user=".$aux["id_usuario"]."'>". $aux["nickname"] ."</a> want to enter in your team </h6>
                                    </div>";

                                    if(isset($_SESSION["userid"]) && $_SESSION["userid"]==$team["creador"]){

                                      echo "<form method='POST' action='".htmlspecialchars($_SERVER['PHP_SELF']).'?team='.$_GET["team"]."'>
                                    <div class='col l2'>
                                      <button class='waves-effect waves-light btn green' style='list-style:none; float:left' name='Accept' value='". $aux["id_usuario"] ."'>Accept</button>
                                      </div>
                                      <div class'col l2'>
                                      <button class='waves-effect waves-light btn red' style='list-style:none; float:left;' name='Decline' value='". $aux["id_usuario"] ."'>Decline</button>
                                    </div>
                                    </div>
                                    </form>";
                                  }
                                  }
                              echo  "</div>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                      </div>
                </div>
              </div>
            </div>
      </div>
    </div>"; //end div solicitudes
  }
  ?>

    </div>

  </div>


  </main>
  <!-- ========== End of Content ============== -->
  <?php include('assets/php/footer.php') ?>
</body>
</html>
