<?php require "../helpers.php";
//var_dump($_SERVER); 
$rawcontent = file_get_contents("../text-08-20.txt");
$content = explode("++++", $rawcontent);
//var_dump($content[1]);
$rawmeta = $content[0];
$meta = explode(":", $rawmeta);
var_dump($meta);
$title = $meta[1];
die;
$text = $content[1];
journalentry($title, $text);

