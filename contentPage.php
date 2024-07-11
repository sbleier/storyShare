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

<form method="post" action="responcePage.php">
    <button type="submit" value="Submit">Go Back</button>
</form>

<?php include "footer.php"; ?>
