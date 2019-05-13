<?php include_once('assets/php/server.php') ?>
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
    <title>Drop Out</title>
  </head>
  <body>
    <?php include('assets/php/navbar.php') ?>
    <!-- ========== Start of Content ============== -->
    <main>
    <div class="row" style="padding-top:30px; Width:500px">
        <div class="col s12">
          <div class="card blue-grey darken-3">
            <form method="post" action="Baja.php">
            <div class="card-content white-text">
              <span class="card-title">Drop Out</span>
              <?php include('assets/php/errors.php'); ?>
              <div class="row">
                <div class="input-field col s10" style="margin-bottom:-5px">
                  <input id="why" type="text" class="validate" name="why">
                  <label for="why">Why do you want to drop out?*</label>
                </div>
              </div>
              <div class="row cuadrado2" style="margin-bottom:-10px">
                <div class="input-field col s10">
                  <input id="pin" type="number" class="validate" name="pin">
                  <label for="pin">Pin*</label>
                </div>
              </div>
              <button type="submit" class="waves-effect waves-light btn" name="del_user" style="margin-left:13%; margin-bottom: 20px; width:300px;">Drop User</button>


            </div>

          </form>
          </div>
        </div>
      </div>

</main>
    <!-- ========== End of Content ============== -->
    <?php include('assets/php/footer.php') ?>
  </body>
</html>
