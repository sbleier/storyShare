<?php include "header.php";
require 'dhb.inc';

// Fetch topics from the database
$sql_topics = "SELECT * FROM topics";
$result_topics = $conn->query($sql_topics);

// Fetch positions from the database
$sql_positions = "SELECT * FROM positions";
$result_positions = $conn->query($sql_positions);
?>
       <form name="StorySubmission" method="post" action="results.php">
    <!-- User information -->
    <fieldset id="user_info">
        <legend>User Information</legend>
        <label for="fname">First Name:*</label>
        <input type="text" id="fname" name="first_name" placeholder="First" size="8" required/>
        <label for="lname">Last Name:*</label>
        <input type="text" id="lname" name="last_name" placeholder="Last" size="8" required /><br>
        <label for="email">Email:*</label>
        <input type="email" id="email" name="email" placeholder="story@example.com" required /><br>
        <input type="checkbox" id="show_email" name="show_email" value="show_email"/>
        <label for="show_email">Share Email with Users?</label><br> 
        <label for="position">Position*</label><br>
        <select name="position" id="position" required>
            <?php
            if ($result_positions->num_rows > 0) {
                // Output data of each row
                while($row = $result_positions->fetch_assoc()) {
                    echo '<option value="' . htmlspecialchars($row["position_id"]) . '">' . htmlspecialchars($row["position_name"]) . '</option>';
                }
            } else {
                echo '<option value="">No positions available</option>';
            }
            ?>
        </select>
    </fieldset>
    
    <!-- Story information -->
    <fieldset id="story_info"> 
        <legend>Story Information</legend>
        <div id="title-and-story">
            <label for="title">Story Title:</label>
            <input type="text" name="title" id="title" value="" required/><br>
            <label for="story">Enter the story:</label><br>
            <textarea id="story" name="story" rows="5" cols="40" placeholder="Your story here:" required></textarea><br>
        </div>
        
        <!-- Topics -->
        <div id="topics">
            <span>Choose which topics your story belongs to:</span><br>
            <?php
            if ($result_topics->num_rows > 0) {
                // Output data of each row
                while($row = $result_topics->fetch_assoc()) {
                    echo '<input type="checkbox" id="' . htmlspecialchars($row["value"]) . '" name="topic[]" value="' . htmlspecialchars($row["value"]) . '" />';
                    echo '<label for="' . htmlspecialchars($row["value"]) . '">' . htmlspecialchars($row["name"]) . '</label><br>';
                }
            } else {
                echo "No topics available.";
            }
            $conn->close();
            ?>
        </div>
    </fieldset>
    
    <button type="submit" value="submit">Submit Story</button>
</form>

<?php include "footer.php"; ?>