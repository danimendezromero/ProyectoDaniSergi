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
       <div class="card blue-grey darken-1">
         <div class="card-content white-text">
           <span class="card-title">Register</span>
           <?php include('assets/php/errors.php'); ?>
           <div class="row">
             <div class="input-field col s10" style="margin-bottom:-15px">
               <input id="nombre" type="text" class="validate" name="nombre" autocomplete="off">
               <label for="nombre">Nombre equipo*</label>
             </div>
           </div>
           <br>
           <div class="row" style="margin-left:0px">
             <p>Region</p>
             <br>
             <select class="browser-default" name="region" id="region">
               <option value="" disabled selected>Choose your option</option>
               <option value="1">EUW</option>
               <option value="2">NA</option>
               <option value="3">BR</option>
               <option value="4">KR</option>
               <option value="5">TR</option>
               <option value="6">LAS</option>
               <option value="7">LAN</option>
               <option value="8">OCE</option>
               <option value="9">EUNE</option>
               <option value="10">RU</option>
             </select>
           </div>

             <button type="submit" class="waves-effect waves-light btn" style="margin-left:37%; margin-top:20px; margin-bottom:20px; " name="create_team">Create Team</button>

         </div>



       </div>
     </form>
     </div>
   </div>



  <!-- ========== End of Content ============== -->
  <?php include('assets/php/footer.php') ?>
</body>

</html>
