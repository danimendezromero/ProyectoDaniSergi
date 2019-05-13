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
  <script type="text/javascript" src="assets/js/infoOW.js"></script>
  <title>Profile</title>
</head>

<body>

  <!-- ========== Start of Content ============== -->
  <main>


<?php include('assets/php/navbar.php') ?>
  <div class="container">
    <div class="row perfil">
      <div class="card blue-grey darken-3 offset-l1 col l3 m3">
        <table class="responsive-table">
        <thead>
          <tr>
              <th></th>
              <th style="padding-left:15px;">Healer</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="zen"><img src="assets/img/zenyatta.png" height="60px" alt=""><br><move style="margin-left:5px;">Zenyatta</move></td>
            <td class="lu"><img src="assets/img/lucio.png" height="60px" alt=""><br><move style="margin-left:20px;">Lúcio</move></td>
            <td class="mer"><img src="assets/img/mercy.png" height="60px" alt=""><br><move style="margin-left:20px;">Mercy</move></td>
          </tr>
          <tr>
            <td></td>
            <td style="padding-left:20px;"><b>DPS</b></td>
            <td></td>
          </tr>
          <tr>
            <td class="sol"><img src="assets/img/soldado.png" height="60px" alt=""><br><move style="margin-left:5px;">Soldado</move></td>
            <td class="tr"><img src="assets/img/tracer.png" height="60px" alt=""><br><move style="margin-left:20px;">Tracer</move></td>
            <td class="gen"><img src="assets/img/genji.png" height="60px" alt=""><br><move style="margin-left:20px;">Genji</move></td>
          </tr>
          <tr>
            <td></td>
            <td style="padding-left:15px;"><b>Tank</b></td>
            <td></td>
          </tr>
          <tr>
            <td class="rein"><img src="assets/img/reinhardt.png" height="60px" alt=""><br><move style="margin-left:2px;">Reinhardt</move></td>
            <td class="road"><img src="assets/img/roadhog.png" height="60px" alt=""><br><move style="margin-left:2px;">Roadhog</move></td>
            <td class="dv"><img src="assets/img/dva.png" height="60px" alt=""><br><move style="margin-left:20px;">D.Va</move></td>
          </tr>
        </tbody>
      </table>


        </div>

        <div class="card col l7 m7 backgroundd lucio " style="-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none; display:none" >
          <div class="row">
          <div id="test1" class="col s12">
              <div class="row">
                <div class="col s12 m12">
                  <div class="card blue-grey darken-3" style="height:650px; padding-top:20px;padding-left:20px;">
                    <div class="card-content white-text" style="background-image: url('assets/img/luciof.png'); height:600px; background-repeat: no-repeat;">
                      <div class="" style="text-align:center; padding-top:130px; padding-left:330px;">
                        <h4>LÚCIO</h4>
                        <h6>An international celebrity who fights for <br>social change through his music and actions.</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="card col l7 m7 backgroundd zenyatta" style="-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none; display:" >
        <div class="row">
        <div id="test1" class="col s12">
            <div class="row">
              <div class="col s12 m12">
                <div class="card blue-grey darken-3" style="height:550px; padding-top:20px;padding-left:20px;">
                  <div class="card-content white-text" style="background-image: url('assets/img/zenyattaf.png'); height:600px; background-repeat: no-repeat;">
                    <div class="" style="text-align:center; padding-top:130px; padding-left:330px;">
                      <h4>ZENYATTA</h4>
                      <h6>An omnic monk who wanders the world <br>in search of spiritual enlightenment.</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="card col l7 m7 backgroundd mercy" style="-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none; display:none" >
      <div class="row">
      <div id="test1" class="col s12">
          <div class="row">
            <div class="col s12 m12">
              <div class="card blue-grey darken-3" style="height:650px; padding-top:20px;padding-left:20px;">
                <div class="card-content white-text" style="background-image: url('assets/img/mercyf.png'); height:600px; background-repeat: no-repeat;">
                  <div class="" style="text-align:center; padding-top:130px; padding-left:330px;">
                    <h4>MERCY</h4>
                    <h6>A guardian angel, peerless healer, <br> brilliant medical researcher, and staunch <br> advocate for peace.</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="card col l7 m7 backgroundd soldado" style="-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none; display:none" >
    <div class="row">
    <div id="test1" class="col s12">
        <div class="row">
          <div class="col s12 m12">
            <div class="card blue-grey darken-3" style="height:650px; padding-top:20px;padding-left:20px;">
              <div class="card-content white-text" style="background-image: url('assets/img/soldadof.png'); height:600px; background-repeat: no-repeat;">
                <div class="" style="text-align:center; padding-top:130px; padding-left:330px;">
                  <h4>SOLDADO</h4>
                  <h6>A vigilante who will stop at nothing to <br> bring the enemies of Overwatch to justice.</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="card col l7 m7 backgroundd tracer" style="-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none; display: none" >
  <div class="row">
  <div id="test1" class="col s12">
      <div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-3" style="height:650px; padding-top:20px;padding-left:20px;">
            <div class="card-content white-text" style="background-image: url('assets/img/tracerf.png'); height:600px; background-repeat: no-repeat;">
              <div class="" style="text-align:center; padding-top:130px; padding-left:330px;">
                <h4>TRACER</h4>
                <h6>A former Overwatch agent, <br> time-jumping adventurer, and irrepressible <br> force for good.</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<div class="card col l7 m7 backgroundd genji" style="-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none; display: none" >
  <div class="row">
  <div id="test1" class="col s12">
      <div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-3" style="height:650px; padding-top:20px;padding-left:20px;">
            <div class="card-content white-text" style="background-image: url('assets/img/genjif.png'); height:600px; background-repeat: no-repeat;">
              <div class="" style="text-align:center; padding-top:130px; padding-left:330px;">
                <h4>GENJI</h4>
                <h6>A cyborg ninja and deadly <br>warrior who has found peace <br>with his mechanical body.</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<div class="card col l7 m7 backgroundd reinhardt" style="-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none; display: none" >
  <div class="row">
  <div id="test1" class="col s12">
      <div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-3" style="height:650px; padding-top:20px;padding-left:20px;">
            <div class="card-content white-text" style="background-image: url('assets/img/reinhardtff.png'); height:600px; background-repeat: no-repeat;">
              <div class="" style="text-align:center; padding-top:130px; padding-left:420px;">
                <h4>REINHARDT</h4>
                <h6>A champion of a bygone age, <br> who lives by the knightly <br> codes of valor, justice, <br> and courage.</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<div class="card col l7 m7 backgroundd dva" style="-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none; display: none" >
  <div class="row">
  <div id="test1" class="col s12">
      <div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-3" style="height:650px; padding-top:20px;padding-left:20px;">
            <div class="card-content white-text" style="background-image: url('assets/img/dvaff.png'); height:600px; background-repeat: no-repeat;">
              <div class="" style="text-align:center; padding-top:200px; padding-left:420px;">
                <h4>D.VA</h4>
                <h6>A former pro gamer who now <br>pilots a state-of-the-art mech <br> in defense of her homeland.</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<div class="card col l7 m7 backgroundd roadhog" style="-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none; display: none" >
  <div class="row">
  <div id="test1" class="col s12">
      <div class="row">
        <div class="col s12 m12">
          <div class="card blue-grey darken-3" style="height:650px; padding-top:20px;padding-left:20px;">
            <div class="card-content white-text" style="background-image: url('assets/img/ROADHOGF.png'); height:600px; background-repeat: no-repeat;">
              <div class="" style="text-align:center; padding-top:200px; padding-left:350px;">
                <h4>ROADHOG</h4>
                <h6>A ruthless killer with <br> tremendous strength and a <br> reputation for cruelty and <br>wanton destruction.</h6>
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
</main>
  <!-- ========== End of Content ============== -->
  <?php include('assets/php/footer.php') ?>
</body>
</html>
