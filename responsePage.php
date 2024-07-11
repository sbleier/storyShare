<?php
include 'header.php'; 
session_start();

$valid_usernames = ['user1', 'user2', 'user3'];
$valid_passwords = ['password1', 'password2', 'password3'];

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

$valid_login = false;

if (in_array($username, $valid_usernames)) {
  $index = array_search($username, $valid_usernames);
  if (password_verify($password, $valid_passwords[$index])) {
    $valid_login = true;
  }
}

$_SESSION['logged_in'] = $valid_login;
$_SESSION['username'] = $username;

if ($valid_login) {
  setcookie('username', $username, time() + (86400 * 30), "/"); // Expires in 30 days

  echo "Login successful! Welcome, " . $username . ".";
  echo "<br><a href='contentPage.php'>Go to Content Page</a>";
} 
else {
  echo "Invalid username or password.";
}

include 'footer.php'; 
