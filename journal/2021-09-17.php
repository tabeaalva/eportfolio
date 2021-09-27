<?php require "../helpers.php";
$title = "Projektmanagement & Präsentationen"; 
$contents = file_get_contents("../text-09-17.txt");
journalentry($title, $contents);
