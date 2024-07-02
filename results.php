<?php

$title = htmlspecialchars($_POST['title']);
if (!empty($_POST['topic'])){
    $topics = $_POST['topic'];
}

echo "<p>Thank you for submitting your story \"" . $title . "\"<br>";
echo "We may be in touch with you regarding clarifications on the story.";

if (!empty($topics)){
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