<?php include('assets/php/server.php') ?>
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
    <title>Login</title>
  </head>
  <body>
    <?php include('assets/php/navbar.php') ?>
    <!-- ========== Start of Content ============== -->
    <div class="row" style="padding-top:30px; Width:500px">
        <div class="col s12">
          <div class="card blue-grey darken-1">
            <form method="post" action="login.php">
            <div class="card-content white-text">
              <span class="card-title">Login</span>
              <?php include('assets/php/errors.php'); ?>
              <div class="row">
                <div class="input-field col s10">
                  <input id="last_name" type="text" class="validate" name="username">
                  <label for="last_name">Username/Email*</label>
                </div>
              </div>
              <div class="row cuadrado2">
                <div class="input-field col s10">
                  <input id="password" type="password" class="validate" name="password">
                  <label for="password">Password*</label>
                </div>
              </div>
              <div class="row cuadrado2">
                <div class="input-field col s10">
                  <p>
                    <label>
                      <input type="checkbox" />
                      <span style="margin-bottom: 15px;">Keep signed</span>
                    </label>
                  </p>
                  <p><a href="" class="white-text">Forgotten your password</a></p>
                  <p><a href="" class="white-text">Forgotten your username</a></p>
                  <p>
                </div>
              </div>

            </div>
            <div class="card-action cuadrado1">

              <button type="submit" class="waves-effect waves-light btn" name="login_user" style="margin-left:13%; margin-top:10px; width:300px;">Log In</button>
              <p class="f1" style="text-align:center">If you don't already have an account click <a href="">Register</a></p>
            </div>
          </form>
          </div>
        </div>
      </div>


    <!-- ========== End of Content ============== -->
    <?php include('assets/php/footer.php') ?>
  </body>
</html>
