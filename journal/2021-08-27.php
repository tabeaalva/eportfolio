<?php require "../helpers.php";
$title = "Lerndokumentation IPERKA"; 
$contents = file_get_contents("../text-08-27.txt");
journalentry($title, $contents);

