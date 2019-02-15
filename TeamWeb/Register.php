<?php include_once('assets/php/server.php') ?>
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
  <link rel="stylesheet" href="assets/css/estils.css?v=<?php echo time(); ?>">
  <!-- ========== Icons ============== -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- ========== JavaScript ============== -->
  <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
  <title>Register</title>
</head>
<body>
  <?php include('assets/php/navbar.php') ?>

  <!-- ========== Start of Content ============== -->
  <div class="row" style="padding-top:30px; Width:500px">
     <div class="col s12">
       <form method="post" action="register.php" enctype="multipart/form-data">
       <div class="card blue-grey darken-3">
         <div class="card-content white-text">
           <span class="card-title">Register</span>
           <?php include('assets/php/errors.php'); ?>
           <div class="row">
             <div class="input-field col s10" style="margin-bottom:-15px">
               <input id="username" type="text" class="validate" name="username" autocomplete="off">
               <label for="username">Username*</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s10" style="margin-bottom:-15px">
               <input id="email" type="email" class="validate" name="email" autocomplete="off">
               <label for="email">Email*</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s10" >
               <input id="password" type="password" class="validate" name="password" autocomplete="off">
               <label for="password">Password*</label>
             </div>
           </div>

           <p style="margin-bottom:10px">
             <label>
               <input type="checkbox" class="filled-in" />
               <span style="font-size: 13px;">
                 I Agree to the Personal Data Consent</span>
             </label>
           </p>
           <p>
             <label>
               <input type="checkbox" class="filled-in" />
               <span style="font-size: 13px;">I Agree to the Terms of Use & Privacy Policy</span>
             </label>
             </p>
             <button type="submit" class="waves-effect waves-light btn" style="margin-left:37%; margin-top:20px; margin-bottom:20px; " name="reg_user">Register</button>
           <p class="f1" style="text-align:center">If you already have an account click <a href="login.php">Log In</a></p>
         </div>



       </div>
     </form>
     </div>
   </div>



  <!-- ========== End of Content ============== -->
  <?php include('assets/php/footer.php') ?>
</body>

</html>
