<?php  
include "header.php"; ?>

<h1>Browse Stories:</h1>

<?php
//link to file that connects to database
require 'dhb.Inc';

    $story_query = "SELECT * FROM stories"; 
    $story_result = mysqli_query($conn, $story_query);

    if (mysqli_num_rows($story_result) > 0) {
      while ($row = mysqli_fetch_assoc($story_result)) {
        // Access story data and display them within HTML elements
        $title = $row["title"];
        $author = $row["author"];
        $content = $row["content"];
        $is_approved = $row["is_approved"];

        if ($is_approved){
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

<?php include "footer.php"; ?>
