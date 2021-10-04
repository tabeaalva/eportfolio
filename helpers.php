<?php 
function journalentry($title, $contents){
    include "../templates/journalentry.phtml";
}
function parse_content($rawcontent){
    //splits the text from the title
    $content = explode("++++", $rawcontent);
    //the defintion of the the title
    $rawmeta = $content[0];
    //splits key from value
    $meta = explode(":", $rawmeta);
    //is the splittet version: just the value
    $title = $meta[1];
    //the splittet text
    $text = $content[1];
    //should give the result from the function
    $result = [
        "title" => $title,
        "text" => $text,
    ];
    //returns the result
    return $result;
}


 