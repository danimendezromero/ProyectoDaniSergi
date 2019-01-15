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
    <title>LOL Players</title>
  </head>
  <body>
    <?php include('assets/php/navbar.php') ?>
    <!-- ========== Start of Content ============== -->

      <div class="loltab row">
      <div class="col l9 offset-l1">
        <ul class="tabs">
          <li class="tab col l6"><a id="lolplayers" href="LOL_Players.html">LOL</a></li>
          <li class="tab col l6"><a id="csgoplayers" href="CSGO_Players.html">CS:GO</a></li>
        </ul>
      </div>
    </div>

    <div class="row lolp">
      <div class="card blue col l2 offset-l1 lolpfilter">
        <div class="card-content white-text">
          <div class="roles text-white lolpfilter">
            <h6>Roles</h6>
            <p>
              <label>
                <input type="checkbox" class="filled-in" />
                <span class="white-text">img1</span>
              </label>
            </p>
            <p>
              <label>
                <input type="checkbox" class="filled-in" />
                <span class="white-text">img2</span>
              </label>
            </p>
            <p>
              <label>
                <input type="checkbox" class="filled-in" />
                <span class="white-text">img3</span>
              </label>
            </p>
            <p>
              <label>
                <input type="checkbox" class="filled-in" />
                <span class="white-text">img4</span>
              </label>
            </p>
            <p>
              <label>
                <input type="checkbox" class="filled-in" />
                <span class="white-text">img5</span>
              </label>
            </p>
          </div>
          <div class="input-field col l12 lolpfilter">
            <select>
              <option value="" disabled selected>Server</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
          <div class="input-field col l12 lolpfilter">
            <select>
              <option value="" disabled selected>Region</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
          <div class="input-field col l12 lolpfilter">
            <select>
              <option value="" disabled selected>Language</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
          </div>
            <div class="col l12">
              <label class="white-text">Age</label>
              <div id="test-slider" class="my-1"></div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="mb-1">
              <button class="waves-effect waves-light center btn lolpfilter">Update search</button>
            </div>
        </div>
      </div>

      <div class="card col l7 lolpshow p-1">
        <div class="card-content white-text grey darken-2">
          <div class="row">
            <div class="col l3 ">
              <br>
              <img src="assets/img/perfil_placeholder.jpg" alt="" class="circle responsive-img" width="150" height="150">
              <div class="age center">
                20 Years

              </div>
              <div class="region center">
                Spain
              </div>
              <div class="objetive center">
                Competitive player
              </div>
            </div>
            <div class="col l9">
              <div class="row">
                <div class="col l9">
                  <div class="name black-text">
                    <h4>Mofitex</h4>
                  </div>
                </div>
                <div class="col l3">
                  <div class="contact">
                    <button class="waves-effect waves-light btn blue" type="button" name="contact" >Contact</button>
                  </div>
                </div>
              </div>
              <div class="divider"></div>
              <div class="row">
                <div class="col l9 roles">
                  <img src="assets/img/roles_placeholder.png" alt="" class="responsive-img">
                  <img src="assets/img/roles_placeholder.png" alt="" class="responsive-img">
                  <img src="assets/img/roles_placeholder.png" alt="" class="responsive-img">
                </div>
                <div class="col l3">
                  <div class="language">
                    <p class="grey-text">Languages</p>
                    <p>CA,ES</p>
                    <br>
                    <p class="grey-text">Server</p>
                    <p>EU West</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== End of Content ============== -->
    <?php include('assets/php/footer.php') ?>
  </body>
</html>
