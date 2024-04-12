<?php
session_start();

// // initializing variables
$username = "";
$email    = "";
$errors = array();


$db = mysqli_connect('localhost', 'root', '', 'demo');//asthmacare

// ///////////////////////////////REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['user']);
  $email = mysqli_real_escape_string($db, $_POST['email_sign']);
  if (strpos($email, '@gmail.com') === false) {
    array_push($errors, "Only Gmail addresses are allowed");
  }
  $password_1 = mysqli_real_escape_string($db, $_POST['passw']);
  $password_2 = mysqli_real_escape_string($db, $_POST['con_passw']);

  if ($password_1 != $password_2) {
	  array_push($errors, "The two passwords do not match");
  }
  $user_type = 'user';

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
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
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, user_type)
  	VALUES('$username', '$email', '$password', '$user_type')";
  	mysqli_query($db, $query);

    $_SESSION['username'] = $username;
    $_SESSION['user_type'] =  $user_type;
    $_SESSION['email'] =  $email;
      
  	header('location: index.php');
  }
}

// ...
// ...
////////////////////////////////////////////////////////////////////////////////////////////////////////////
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['email_log']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_array($results);
  	  $_SESSION['username'] = $row['username'];
      $_SESSION['admin_name'] = $row['user_type'];
  	  $_SESSION['id'] = $row['id'];
      $_SESSION['email'] =  $row['email'];
      
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
