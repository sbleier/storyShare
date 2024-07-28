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
        $is_approved = $row["is_approved"];

        if (!$is_approved){
            echo "<p class='story'>";
            echo "<strong>$title - <em>$author</em></strong>";
            echo "<br>$content</p>";
            echo "</div>";
         } 
      
      }
    } else {
      echo "No stories found";
    }
    

    ?>
<button class="btn btn-primary"><a href="index.php">Go to Home Page</a></button>

<?php include "footer.php"; ?>
