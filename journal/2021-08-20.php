<?php require "../helpers.php";
//var_dump($_SERVER); 

$rawcontent = file_get_contents("../text-08-20.txt");
$content = parse_content($rawcontent);
journalentry($content["title"], $content["text"]);

