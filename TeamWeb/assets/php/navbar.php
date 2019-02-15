<!-- ========== Start Navbar ============== -->
<?php include_once('assets/php/server.php') ?>
<ul id="jugadores" class="dropdown-content">
  <li><a href="LOL_Players.php" class="black-text">LOL</a></li>
  <li><a href="OW_Players.php" class="black-text">OW</a></li>
</ul>
<ul id="equipos" class="dropdown-content">
  <li><a href="LOL_Teams.php" class="black-text">LOL</a></li>
  <li><a href="OW_Teams.php" class="black-text">OW</a></li>
  <?php
    if(!empty($_SESSION["username"])){
      $id = $_SESSION["userid"];
      echo "<li id=''><a href='Group_Register.php?user=".$id."' class='black-text'>Create Group</a></li>";
    }else {
    }
  ?>
</ul>
<nav class="white">
  <div class="nav-wrapper hide-on-large-only">
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="small material-icons black-text">menu</i></a>

  </div>
  <div class="nav-wrapper hide-on-med-and-down">
    <a href="Home.php" class="brand-logo black-text"> <img class="responsive-img logon" src="assets/img/logo_template.png" alt="Logo"></a>
    <ul class="hide-on-med-and-down right">
      <li class="divider-left menu"><a href="Home.php" class="black-text">Inicio</a></li>
      <li class="divider-left divider-right"><a class="dropdown-trigger black-text" href="#!" data-target="jugadores">Jugadores</a></li>
      <li class="divider-right"><a class="dropdown-trigger black-text" href="#!" data-target="equipos">Equipos</a></li>

        <?php
          if(!empty($_SESSION["username"])){
            $id = $_SESSION["userid"];
            echo "<li id='profilenav' style='padding-left:45%;'><a href='Profile.php?user=".$id."' class='waves-effect waves-light btn blue'>Aqui  Perfil</a></li>";
          }else {
            echo "<li class='login'><a href='Login.php' class='waves-effect waves-dark btn white black-text'>Log-in</a></li>";
            echo "<li ><a href='Register.php' class='waves-effect waves-light btn blue'>Register</a></li>";
          }
        ?>
    </ul>
  </div>
</nav>

<ul id="slide-out" class="sidenav">
  <div class="logom">
    <a href="Home.php"><img class="responsive-img" src="assets/img/logo_template.png" alt="Logo"></a>
  </div>
  <li class="divider-top"><a href="Home.php" class="black-text">Inicio</a></li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Jugadores<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="LOL_Players.php" class="black-text">LOL</a></li>
            <li><a href="OW_Players.php" class="black-text">OW</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">Equipos<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="LOL_Teams.php" class="black-text">LOL</a></li>
            <li><a href="OW_Teams.php" class="black-text">na</a></li>


          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li>
        <a class="collapsible-header">General<i class="material-icons">arrow_drop_down</i></a>
        <div class="collapsible-body">
          <ul>
            <li><a href="Contact.php" class="black-text">Contact</a></li>
            <li><a href="Privacy_Policy.php" class="black-text">Privacy</a></li>
            <li><a href="Support.php" class="black-text">FAQ</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>


</ul>
<!-- ========== End of Navbar ============== -->
