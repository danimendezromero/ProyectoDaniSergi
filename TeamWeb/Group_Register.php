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
    <title>Group_Register</title>
  </head>
  <body>
    <?php include('assets/php/navbar.php') ?>

    <!-- ========== Start of Content ============== -->
<div class="row" style="padding-top:30px; Width:500px">
  <div class="col s12">
    <div class="card blue-grey darken-1">
      <div class="card-content white-text">
        <span class="card-title">Team Register</span>
        <div class="row">
          <div class="input-field col s10">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Team Name*</label>
          </div>
        </div>
        <div class="row" style="margin-left:0px">
          <label>Region</label>
          <select class="browser-default">
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
        <div class="row" style="margin-left:0px">
          <label>Add Logo</label>
          <div class="file-field input-field">
            <div class="btn">
              <span>Browse</span>
              <input type="file" />
            </div>

            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Upload file" />
            </div>
          </div>
        </div>

      </div>
      <div class="card-action">

        <a class="waves-effect waves-light btn" style="margin-left:37%; margin-top:10px;margin-bottom:10px;">Create Team</a>
      </div>
    </div>
  </div>
</div>


    <!-- ========== End of Content ============== -->

    <?php include('assets/php/footer.php') ?>
  </body>
</html>
