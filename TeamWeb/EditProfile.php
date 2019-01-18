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
       <form method="post" action="register.php">
       <div class="card blue-grey darken-1">
         <div class="card-content white-text">
           <span class="card-title">Edit Profile</span>
           <div class="row">
             <div class="input-field col s10">
               <input id="ow_nick" type="text" class="validate" name="username" autocomplete="off">
               <label for="ow_nick">OW_Nickname</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s10">
               <input id="lol_nick" type="text" class="validate" name="username" autocomplete="off">
               <label for="lol_nick">LOL_Nickname</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s10">
               <input id="lol_region" type="text" class="validate" name="username" autocomplete="off">
               <label for="lol_region">LOL_Region</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s10">
               <input id="ow_region" type="text" class="validate" name="username" autocomplete="off">
               <label for="ow_region">OW_Region</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s10">
               <input id="languages" type="text" class="validate" name="username" autocomplete="off">
               <label for="languages">Languages</label>
             </div>
           </div>
           <div class="center">
             <button type="submit" class="waves-effect waves-light btn" name="edit_profile">Complete edit</button>
           </div>

         </div>

       </div>
     </form>
     </div>
   </div>



  <!-- ========== End of Content ============== -->
  <?php include('assets/php/footer.php') ?>
</body>

</html>
