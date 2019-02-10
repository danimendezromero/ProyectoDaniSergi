<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'teamweb');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $fecha=date("Y/m/d");

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM usuario WHERE nickname='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO usuario (nickname, email, password, fecha_creacion)
  			  VALUES('$username', '$email', '$password', '$fecha')";
  	mysqli_query($db, $query);
  	header('location: Login.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM usuario WHERE nickname='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $row = $results->fetch_assoc();
      $_SESSION['userid'] = $row["id_usuario"];
  	  $_SESSION['username'] = $username;
      header('location: Home.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

// Edit profile
if (isset($_POST['edit_profile'])) {
  // receive all input values from the form

  $id= $_SESSION['userid'];

  $ow_nick = mysqli_real_escape_string($db, $_POST['ow_nick']);
  $lol_nick = mysqli_real_escape_string($db, $_POST['lol_nick']);
  $ow_region = mysqli_real_escape_string($db, $_POST['ow_region']);
  $lol_region = mysqli_real_escape_string($db, $_POST['lol_region']);
  $languages = mysqli_real_escape_string($db, $_POST['languages']);
  $code = mysqli_real_escape_string($db, $_POST['ow_code']);
  $plataforma = mysqli_real_escape_string($db, $_POST['ow_plataforma']);



  // edit profile

  	$query = "UPDATE `usuario` SET `idioma`='$languages',`ow_nickname`='$ow_nick',`lol_nickname`='$lol_nick',`ow_region`='$ow_region',`lol_region`='$lol_region',`ow_code`='$code',`ow_plataforma`='$plataforma' WHERE `id_usuario`=$id";


  	mysqli_query($db, $query);
  	header('location: Profile.php?user=' . $id);

}

// Group register
if (isset($_POST['create_team'])) {
  // receive all input values from the form

  $fecha=date("Y/m/d");
  $id= $_SESSION['userid'];

  $name = mysqli_real_escape_string($db, $_POST['nombre']);
  $region = mysqli_real_escape_string($db, $_POST['region']);


  // edit profile

  	$query = "INSERT INTO equipo (nombre,fechacreacion,idioma,creador)
    VALUES('$name','$fecha','$region','$id')";

  	mysqli_query($db, $query);
  	header('location: home.php?user=' . $id);

}


// LOGOUT USER
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location: Home.php');
  }

//foto perfil
//$idfoto= $_SESSION['userid'];
//$query1 = "SELECT ruta_imagen FROM usuarios WHERE id_usuario='$idfoto'";
//$result1 = mysql_query($db, $query);
//while ($row=mysql_fetch_array($result)){
    //$ruta_img = $row["ruta_imagen"];
//}




?>
