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

  	$query = "INSERT INTO usuario (nickname, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
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
  	  $_SESSION['username'] = $username;
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

// Edit profile
if (isset($_POST['edit_profile'])) {
  // receive all input values from the form
  $ow_nick = mysqli_real_escape_string($db, $_POST['ow_nick']);
  $lol_nick = mysqli_real_escape_string($db, $_POST['lol_nick']);
  $ow_region = mysqli_real_escape_string($db, $_POST['ow_region']);
  $lol_region = mysqli_real_escape_string($db, $_POST['lol_region']);
  $languages = mysqli_real_escape_string($db, $_POST['languages']);


  // edit profile

  	$query = "INSERT INTO usuario (ow_nickname, lol_nickname, ow_region, lol_region, idioma)
  			  VALUES('$ow_nick', '$lol_nick', '$ow_region', '$lol_region', '$ow_region', '$languages')";
  	mysqli_query($db, $query);
  	header('location: Profile.php');

}

// LOGOUT USER
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header('location: Home.php');
  }

?>
