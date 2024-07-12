<?php
include "header.php"; 

session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo "Hello, " .  $username . "!";
} else {
  echo 'Error: You are not logged in';
}

?>

<button><a href="index.php">Go to Home Page</a></button>

<?php include "footer.php"; ?>
