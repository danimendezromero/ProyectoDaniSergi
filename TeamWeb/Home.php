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
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/perfilapi.js"></script>
    <script type="text/javascript" src="assets/js/perfilapiow.js"></script>
    <script type="text/javascript" src="assets/js/rellenarperfil.js"></script>
    <title>Home</title>
  </head>
  <body>
    <?php include('assets/php/navbar.php') ?>
    <!-- ========== Start of Content ============== -->
    <main>
    <!--<?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="Home.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>-->
    <div class="container" >
      <div class="row perfil" >
        <div class="card #546e7a col l6 m6" style="background-color:#546e7a; -webkit-box-shadow: none; box-shadow: none ">
          <div class="center" style="padding-top:20px;">
            <img class="image1" id="fotoperfil" src="assets/img/leaguehome.jpg" border="1" alt="Este es el ejemplo de un texto alternativo" width="400px" height="400px">
          </div>
        </div>
        <div class="card col l6 m6" style="background-color:#546e7a; -webkit-box-shadow: none; box-shadow: none ">
            <div class="center" style="padding-top:20px;">
              <img class="image2" id="fotoperfil" src="assets/img/csgohome.jpg" border="1" alt="Este es el ejemplo de un texto alternativo" width="400px" height="400px">
            </div>
        </div>

              <div class="row mostrarono">
                  <div class="col s12 " style="margin-top:20px">
                    <ul class="tabs darken-3 tabb1" style="background-color:#546e7a">
                      <li class="tab offset-s3 col s3"><a class="active white-text" href="#test1">Players</a></li>
                      <li class="tab col s3"><a class="white-text" href="#test2">Groups</a></li>
                    </ul>
                  </div>
                  <div id="test1" class="col l12" style="margin-top: -25px;">
                    <form method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <div class="row " style="margin-bottom: 0px;">
                      <div class="card blue-grey darken-3 col l12 m12  lolpfilter">
                        <div class="card-content white-text">
                          <div class="nose" style="float:left; padding-left:3%; margin-top:-15px">
                            <button type="button" class="advanced waves-effect waves-light center btn lolpfilter deep-orange darken-3">Advanced Search</button>
                          </div>
                        <div id="buscador" style="float:left; padding-left:8%;">
                            <input type="text" placeholder="Search Player" id="autocomplete-input" class="autocomplete black-text" name="buscar">
                        </div>
                        <button style="margin-top:10px; margin-bottom:10px; margin-left:5px;" value="Buscar" class="waves-effect waves-light btn deep-orange darken-3"><i class="material-icons">search</i></button>
                        </div>
                          <div class="card-action advanced-container" style="display:none;">
                          <div class="roles text-white" style="float:left;" >
                            <h6>Roles</h6>
                            <p >
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span class="white-text">img1</span>
                              </label>
                            </p>
                            <p >
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span class="white-text">img2</span>
                              </label>
                            </p>
                            <p >
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span class="white-text">img3</span>
                              </label>
                            </p>
                            <p >
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span class="white- text">img4</span>
                              </label>
                            </p>
                            <p >
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span class="white-text">img5</span>
                              </label>
                            </p>

                          </div>

                           <div class="input-field" style="float:left; padding-left:10%;">
                              <select>
                                <option value="" disabled selected>Choose Region</option>
                                <option value="1">EU</option>
                                <option value="2">NA</option>
                                <option value="3">KR</option>
                              </select>
                            </div>
                            <div class="input-field" style="float:left; padding-left:10%;">
                               <select>
                                 <option value="" disabled selected>Choose Server</option>
                                 <option value="1">EU</option>
                                 <option value="2">NA</option>
                                 <option value="3">KR</option>
                               </select>
                             </div>


                            <div class="mb-1 center">
                              <button class="waves-effect waves-light center btn lolpfilter">Update search</button>
                            </div>
                            </div>

                      </div>
                    </div>
                    </form>
                  </div>
                  <div id="test2" class="col s12" style="margin-top: -25px;"  >
                    <form method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                  <div class="row " style="margin-bottom: 0px;">
                    <div class="card blue-grey darken-3 col l12 m12  lolpfilter">
                      <div class="card-content white-text">
                        <div class="nose" style="float:left; padding-left:3%; margin-top:-15px">
                          <button type="button" class="advanced waves-effect waves-light center btn lolpfilter deep-orange darken-3">Advanced Search</button>
                        </div>
                      <div id="buscador" style="float:left; padding-left:8%;">
                          <input type="text" placeholder="Search Player" id="autocomplete-input" class="autocomplete black-text" name="buscar">
                      </div>
                      <button style="margin-top:10px; margin-bottom:10px; margin-left:5px;" value="Buscar" class="waves-effect waves-light btn deep-orange darken-3"><i class="material-icons">search</i></button>
                      </div>
                        <div class="card-action advanced-container" style="display:none;">
                        <div class="roles text-white" style="float:left;" >
                          <h6>Roles</h6>
                          <p >
                            <label>
                              <input type="checkbox" class="filled-in" />
                              <span class="white-text">img1</span>
                            </label>
                          </p>
                          <p >
                            <label>
                              <input type="checkbox" class="filled-in" />
                              <span class="white-text">img2</span>
                            </label>
                          </p>
                          <p >
                            <label>
                              <input type="checkbox" class="filled-in" />
                              <span class="white-text">img3</span>
                            </label>
                          </p>
                          <p >
                            <label>
                              <input type="checkbox" class="filled-in" />
                              <span class="white- text">img4</span>
                            </label>
                          </p>
                          <p >
                            <label>
                              <input type="checkbox" class="filled-in" />
                              <span class="white-text">img5</span>
                            </label>
                          </p>

                        </div>

                         <div class="input-field" style="float:left; padding-left:10%;">
                            <select>
                              <option value="" disabled selected>Choose Region</option>
                              <option value="1">EU</option>
                              <option value="2">NA</option>
                              <option value="3">KR</option>
                            </select>
                          </div>
                          <div class="input-field" style="float:left; padding-left:10%;">
                             <select>
                               <option value="" disabled selected>Choose Server</option>
                               <option value="1">EU</option>
                               <option value="2">NA</option>
                               <option value="3">KR</option>
                             </select>
                           </div>


                          <div class="mb-1 center">
                            <button class="waves-effect waves-light center btn lolpfilter">Update search</button>
                          </div>
                          </div>

                    </div>
                  </div>
                  </form></div>
                </div>
                <div class="row mostrarono2" style="display:none;">
                    <div class="col s12 " style="margin-top:20px">
                      <ul class="tabs darken-3 tabb1" style="background-color:#546e7a">
                        <li class="tab offset-s3 col s3"><a class="active white-text" href="#test11">Players</a></li>
                        <li class="tab col s3"><a class="white-text" href="#test22">Groups</a></li>
                      </ul>
                    </div>
                    <div id="test11" class="col l12" style="margin-top: -25px;">
                      <form method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                      <div class="row " style="margin-bottom: 0px;">
                        <div class="card blue-grey darken-3 col l12 m12  lolpfilter">
                          <div class="card-content white-text">
                            <div class="nose" style="float:left; padding-left:3%; margin-top:-15px">
                              <button type="button" class="advanced waves-effect waves-light center btn lolpfilter deep-orange darken-3">Advanced Search</button>
                            </div>
                          <div id="buscador" style="float:left; padding-left:8%;">
                              <input type="text" placeholder="Search Player" id="autocomplete-input" class="autocomplete black-text" name="buscar">
                          </div>
                          <button style="margin-top:10px; margin-bottom:10px; margin-left:5px;" value="Buscar" class="waves-effect waves-light btn deep-orange darken-3"><i class="material-icons">search</i></button>
                          </div>
                            <div class="card-action advanced-container" style="display:none;">
                            <div class="roles text-white" style="float:left;" >
                              <h6>Roles</h6>
                              <p >
                                <label>
                                  <input type="checkbox" class="filled-in" />
                                  <span class="white-text">img1</span>
                                </label>
                              </p>
                              <p >
                                <label>
                                  <input type="checkbox" class="filled-in" />
                                  <span class="white-text">img2</span>
                                </label>
                              </p>
                              <p >
                                <label>
                                  <input type="checkbox" class="filled-in" />
                                  <span class="white-text">img3</span>
                                </label>
                              </p>
                              <p >
                                <label>
                                  <input type="checkbox" class="filled-in" />
                                  <span class="white- text">img4</span>
                                </label>
                              </p>
                              <p >
                                <label>
                                  <input type="checkbox" class="filled-in" />
                                  <span class="white-text">img5</span>
                                </label>
                              </p>

                            </div>

                             <div class="input-field" style="float:left; padding-left:10%;">
                                <select>
                                  <option value="" disabled selected>Choose Region</option>
                                  <option value="1">EU</option>
                                  <option value="2">NA</option>
                                  <option value="3">KR</option>
                                </select>
                              </div>
                              <div class="input-field" style="float:left; padding-left:10%;">
                                 <select>
                                   <option value="" disabled selected>Choose Server</option>
                                   <option value="1">EU</option>
                                   <option value="2">NA</option>
                                   <option value="3">KR</option>
                                 </select>
                               </div>


                              <div class="mb-1 center">
                                <button class="waves-effect waves-light center btn lolpfilter">Update search</button>
                              </div>
                              </div>

                        </div>
                      </div>
                      </form>
                    </div>
                    <div id="test22" class="col s12" style="margin-top: -25px;"  >
                      <form method="GET" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <div class="row " style="margin-bottom: 0px;">
                      <div class="card blue-grey darken-3 col l12 m12  lolpfilter">
                        <div class="card-content white-text">
                          <div class="nose" style="float:left; padding-left:3%; margin-top:-15px">
                            <button type="button" class="advanced waves-effect waves-light center btn lolpfilter deep-orange darken-3">Advanced Search</button>
                          </div>
                        <div id="buscador" style="float:left; padding-left:8%;">
                            <input type="text" placeholder="Search Player" id="autocomplete-input" class="autocomplete black-text" name="buscar">
                        </div>
                        <button style="margin-top:10px; margin-bottom:10px; margin-left:5px;" value="Buscar" class="waves-effect waves-light btn deep-orange darken-3"><i class="material-icons">search</i></button>
                        </div>
                          <div class="card-action advanced-container" style="display:none;">
                          <div class="roles text-white" style="float:left;" >
                            <h6>Roles</h6>
                            <p >
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span class="white-text">img1</span>
                              </label>
                            </p>
                            <p >
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span class="white-text">img2</span>
                              </label>
                            </p>
                            <p >
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span class="white-text">img3</span>
                              </label>
                            </p>
                            <p >
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span class="white- text">img4</span>
                              </label>
                            </p>
                            <p >
                              <label>
                                <input type="checkbox" class="filled-in" />
                                <span class="white-text">img5</span>
                              </label>
                            </p>

                          </div>

                           <div class="input-field" style="float:left; padding-left:10%;">
                              <select>
                                <option value="" disabled selected>Choose Region</option>
                                <option value="1">EU</option>
                                <option value="2">NA</option>
                                <option value="3">KR</option>
                              </select>
                            </div>
                            <div class="input-field" style="float:left; padding-left:10%;">
                               <select>
                                 <option value="" disabled selected>Choose Server</option>
                                 <option value="1">EU</option>
                                 <option value="2">NA</option>
                                 <option value="3">KR</option>
                               </select>
                             </div>


                            <div class="mb-1 center">
                              <button class="waves-effect waves-light center btn lolpfilter">Update search</button>
                            </div>
                            </div>

                      </div>
                    </div>
                    </form></div>
                  </div>

                  <div class="row">
                    <img src="assets/img/pergamino11.png" alt="" class="responsive-img img1" style="width:400;height:300px; padding-left:7%;">
                    <img src="assets/img/pergamino22.png" alt="" class="responsive-img img1" style="width:400;height:300px; padding-left:4%">
                    <img src="assets/img/pergamino33.png" alt="" class="responsive-img img1" style="width:400;height:300px; padding-left:4%">
                    <!--<img src="assets/img/pergamino44.png" alt="" class="responsive-img img1" style="width:400;height:300px; padding-left:4%">-->
                  </div>
          </div>
        </div>

</main>



    <!-- ========== End of Content ============== -->
    <?php include('assets/php/footer.php') ?>
  </body>
</html>
