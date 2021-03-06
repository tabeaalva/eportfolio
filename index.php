
<?php 
require "helpers.php";
$uri = $_SERVER["REQUEST_URI"];
$entrys = [
    "/journal/2021-08-20" => "text-08-20.txt",
    "/journal/2021-08-27" => "text-08-27.txt",
    "/journal/2021-09-03" => "text-09-03.txt",
    "/journal/2021-09-17" => "text-09-17.txt",
    "/journal/2021-09-24" => "text-09-24.txt",
    "/" => "maintext.txt",
    "/journal" => "text.txt",
    "/journal/" => "text.txt"
];
$file =  $entrys[$uri];
$rawcontent = file_get_contents(__DIR__ . "/content/" . $file);
$content = parse_content($rawcontent);

$template = "journalentry";
if ($uri === "/" ||$uri === "/journal" || $uri === "/journal/") {
    $template = "journalindex";
} 
template($template, $content);