<?php
session_start();
include 'header.php'; 

//link to file that connects to database
require 'dhb.Inc';

//code that tells error information if not working (REMOVE before finish project)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//set variables using story_submit form
//when applicable, variables are first trimmed before being assigned
//authorName is fName and lName put together
$authorName = (isset($_POST['first_name']) ? trim($_POST['first_name']) : '') . ' ' . (isset($_POST['last_name']) ? trim($_POST['last_name']) : '');
$email = isset($_POST['email']) ? trim($_POST['email']) : '';

//showemail is a variable that works like a boolean - if the user doesn't click on the checkbox to show it, it will be set to 0 ('false')
$showEmail = isset($_POST['show_email']) ? true : false;

//the select values in the form are numbers that refer to the position_id in the positions table
$positionId= isset($_POST['position']) ? intval($_POST['position']) : 0;
$title= isset($_POST['title']) ? trim($_POST['title']) : '';
$story= isset($_POST['story']) ? trim($_POST['story']) : '';

//this is array of checked topics that will be empty if no topics chosen
$selectedTopics = isset($_POST['topic']) ? $_POST['topic'] : [];

//this is an empty array to fill with the topic_ids
$topicIdsArray = [];

//foreach loops that fills the topic_ids array with the correct ids using the variable to match topic_name with topic_id
foreach ($selectedTopics as $topicName) {
    $sql = "SELECT topic_id FROM topics WHERE topic_name = '$topicName'";
    $result = mysqli_query($conn, $sql);
    
    if ($result && $row = mysqli_fetch_assoc($result)) {
        $topicIdsArray[] = $row['topic_id'];
    }
}

//covert topic_ids array to json because that's what's used in stories table
$topicIdsJson = json_encode($topicIdsArray);

/*query to insert. 
 * NOTE WHAT IS NOT INSERTED:
 * story_id is automated, is_approved is defaulted to false/0 and has to changed by admins
 * date_posted is default to current time
 */
$query = "INSERT INTO stories(title, author, content,  author_email, show_email, topic_ids, position_id) "
        . "VALUES ('$title', '$authorName', '$story', '$email', '$showEmail', '$topicIdsJson', '$positionId')";

//if it works sends successful message
if(mysqli_query($conn, $query)){
    echo "<p>Thank you for submitting your story \"" . $title . "\".<br>";
    echo "We may be in touch with you regarding clarifications on the story.";
}



//i commented this out because didn't have time/patience to connect it to proper database
/*
if (!empty($selectedTopics)){
    echo "<br>Check out some other stories we have on the "; 

    if (is_array($topics) && count($topics) == 2){
        echo "topics of ";
        echo implode(" and ", $topics);
    } 
    else if (is_array($topics) && count($topics) > 2){
        echo "topics of ";
        echo implode(", and ", $topics);
    }
    else {
        echo "topic of";
        echo $topics;
    }
    echo ".</p> ";
}
*/
include "footer.php";
