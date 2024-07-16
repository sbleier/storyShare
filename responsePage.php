<?php
session_start();
include 'header.php'; 

//code that tells error information if not working (REMOVE before finish project)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//set variables using login.php form
$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

//link to file that connects to database
require 'dhb.Inc';

//search database for username and password variables
$squl = "SELECT username FROM AuthorizedUsers WHERE username ='$username' AND password = '$password'";
$result = mysqli_query($conn, $squl);

//error handling 
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}


$valid_login=false;

//checks if database has username and password matches
if (mysqli_num_rows($result) > 0) {
    $valid_login = true;
}

$_SESSION['logged_in'] = $valid_login;
$_SESSION['username'] = $username;

if ($valid_login) {
  setcookie('username', $username, time() + (86400 * 30), "/"); // Expires in 30 days

  echo "Login successful! Welcome, " . htmlspecialchars($username) . "!";
  echo "<br><a href='contentPage.php'>Go to Content Page</a>";
} 
else {
  echo "Invalid username or password.";
}

include 'footer.php'; 
