<?php include_once('assets/php/server.php') ?>
<?php
if(!isset($_SESSION["userid"])){
  header('location: Login.php');
}
?>
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
  <style type = "text/css">
    select{
       width: initial;
       padding: initial;
       border-radius: initial;
       height: initial;
       display: initial;
    }
  </style>
  <link rel="stylesheet" href="assets/css/estils.css?v=<?php echo time(); ?>">
  <!-- ========== Icons ============== -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <!-- ========== JavaScript ============== -->
  <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <title>EditProfile</title>
</head>
<body>
  <?php include('assets/php/navbar.php') ?>

  <!-- ========== Start of Content ============== -->
  <main>
  <?php
  $_GET["user"] = $_SESSION["userid"];
  include('assets/php/perfilquery.php') ?>
  <?php
  $edad = $user["fechanacimiento"];
  if($edad=="0000-00-00"){
    $edad = "";
  }
  ?>
  <div class="row" style="padding-top:30px; Width:500px">
     <div class="col s12">
       <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
       <div class="card  blue-grey darken-3">
         <div class="card-content white-text">
           <span class="card-title">Edit Profile</span>
           <div class="row" style="margin-top:30px">
             <label class="left" style="margin-left:10px;">OW_Nickname</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="ow_nick" type="text" name="ow_nick" autocomplete="off" value="<?php echo $user["ow_nickname"] ?>">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">OW_Code</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="ow_code" type="text" name="ow_code" autocomplete="off" value="<?php echo $user["ow_code"] ?>">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">OW_Region</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="ow_region" type="text" name="ow_region" autocomplete="off" value="<?php echo $user["ow_region"] ?>">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">OW_Platform</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="ow_plataforma" type="text" name="ow_plataforma" autocomplete="off" value="<?php echo $user["ow_plataforma"] ?>">
             </div>
           </div>
           <div class="row" style="margin-left:0px">
             <p class="grey-text">Ow_position</p>
             <br>
             <select class="browser-default" name="ow_posicion" id="ow_posicion">
               <option value="" disabled selected>Choose your option</option>
               <option value="">Nothing</option>
               <option value="tank">Tank</option>
               <option value="support">Support</option>
               <option value="dps">Dps</option>
             </select>
           </div>
           <div class="row" style="margin-left:0px">
             <p class="grey-text">Lol_position</p>
             <br>
             <select class="browser-default" name="lol_posicion" id="lol_posicion">
               <option value="" disabled selected>Choose your option</option>
               <option value="">Nothing</option>
               <option value="top">Top</option>
               <option value="mid">Mid</option>
               <option value="bot">Bot</option>
               <option value="support">Support</option>
               <option value="jungle">Jungle</option>
             </select>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">LOL_Nickname</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="lol_nick" type="text" name="lol_nick" autocomplete="off" value="<?php echo $user["lol_nickname"] ?>">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">LOL_Region</label><br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="lol_region" type="text" name="lol_region" autocomplete="off" value="<?php echo $user["lol_region"] ?>">
             </div>
           </div>
           <div class="row">
             <label class="left" style="margin-left:10px;">Languages</label> <br>
             <div class="input-field col s10" style="margin-top: -5px">
               <input id="languages" type="text" name="languages" autocomplete="off" value="<?php echo $user["idioma"] ?>">
             </div>
           </div>

           <div class="row">
              <div class="col s10" style="margin-top: -5px">
                <label >Date</label> <br>
                <p class="text-grey"><input type="text" id="datepicker" class="DatePicker" autocomplete="off" name="edad" value="<?php echo $edad ?>"/></p>
              </div>
           </div>

           <div class="row">
              <div class="col s10" style="margin-top: -5px">
           <div class="file-field input-field">
           <div class="btn">
             <span for="image">File</span>
             <input id="image" name="image" size="50" type="file">
           </div>
           <div class="file-path-wrapper">
             <input class="file-path" type="text">
           </div>
         </div>
       </div>
    </div>
           <div class="center">
             <button type="submit" class="waves-effect waves-light btn blue" name="save_edit">Save</button>
             <button type="submit" class="waves-effect waves-light btn red" name="cancel">Cancel</button>
           </div>

         </div>

       </div>
     </form>
     </div>
   </div>



   </main>

  <!-- ========== End of Content ============== -->
  <?php include('assets/php/footer.php') ?>
</body>

</html>
