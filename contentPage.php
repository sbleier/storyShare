<?php
include "header.php"; 
session_start();
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo "Hello, $username!";
} else {
  echo 'Error: You are not logged in';
}

?>

<form method="post" action="responcePage.php">
  <input type="submit" value="Submit">
</form>

<?php include "footer.php"; ?>
