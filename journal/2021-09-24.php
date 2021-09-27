<?php require "../helpers.php";
$title = "Die Präsentation & das Konzept"; 
$contents = file_get_contents("../text-09-24.txt");
journalentry($title, $contents);