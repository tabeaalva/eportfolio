<?php require "../helpers.php";
$title = "Lerndokumentation Kompetenzen"; 
$contents = file_get_contents("../text-08-20.txt");
journalentry($title, $contents);
