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
  <script type="text/javascript" src="assets/js/rellenarperfil.js"></script>
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
             <label class="left" style="margin-left:10px;">OW_Nickname</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="ow_nick" type="text" class="validate" name="ow_nick" autocomplete="off">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">OW_Code</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="ow_code" type="text" class="validate" name="ow_code" autocomplete="off">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">LOL_Nickname</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="lol_nick" type="text" class="validate" name="lol_nick" autocomplete="off">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">LOL_Region</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="lol_region" type="text" class="validate" name="lol_region" autocomplete="off">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">OW_Region</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="ow_region" type="text" class="validate" name="ow_region" autocomplete="off">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">OW_Plataforma</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="ow_plataforma" type="text" class="validate" name="ow_plataforma" autocomplete="off">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">Languages</label> <br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="languages" type="text" class="validate" name="languages" autocomplete="off" >
             </div>
           </div>

           <div class="row">
             <div class="input-field col s10" style="color: #939E9E">
               Date of birth:<input id="edad" type="date" name="cumpleanios" step="1" value="<?php echo date("Y-m-d");?>">
             </div>
           </div>


          <div class="file-field input-field">
            <div class="btn">
              <span for="imagen">File</span>
              <input id="imagen" name="imagen" size="130" type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <div id="miputamadre">
            asdsad
          </div>


           <div class="center">
             <button type="submit" class="waves-effect waves-light btn" name="edit_profile">Complete edit</button>
           </div>

           <input type="text" id="nose" name="" value="">

         </div>

       </div>
     </form>
     </div>
   </div>



  <!-- ========== End of Content ============== -->
  <?php include('assets/php/footer.php') ?>
</body>

</html>
