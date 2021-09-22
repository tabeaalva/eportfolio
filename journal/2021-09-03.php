<?php require "../helpers.php";
$title = "Lerndokumentation Problemlösungskonzepte"; 
$contents = file_get_contents("../text-09-03.txt");
journalentry($title, $contents);
