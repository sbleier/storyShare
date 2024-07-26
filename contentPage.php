<?php
session_start();
include "header.php"; 

//link to file that connects to database
require 'dhb.Inc';

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo "Hello, " .  $username . "!";
} else {
  echo 'Error: You are not logged in';
}

    $story_query = "SELECT * FROM stories"; 
    $story_result = mysqli_query($conn, $story_query);

    if (mysqli_num_rows($story_result) > 0) {
      echo "<h2>Stories:</h2>";
      while ($row = mysqli_fetch_assoc($story_result)) {
        // Access story data and display them within HTML elements
        $title = $row["title"];
        $author = $row["author"];
        $content = $row["content"];

        echo "<div class='story'>";
        echo "<h4>$title - <em>$author</em></h3>";
        echo "<p>$content</p>";
        echo "</div>";
      }
    } else {
      echo "No stories found";
    }

    ?>
<button><a href="index.php">Go to Home Page</a></button>

<?php include "footer.php"; ?>
