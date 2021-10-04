<?php 
function journalentry($title, $contents, $meta){
    include "../templates/journalentry.phtml";
}
function journalindex($title, $contents, $meta){
    include "../templates/journalindex.phtml";
}
function parse_content($rawcontent){
    //splits the text from the title
    $content = explode("++++", $rawcontent);
    //the defintion of the the title
    $metablock = $content[0];
    $rawmeta = explode("----", $metablock);
    $meta = [];
    foreach ($rawmeta as $metaline) {
        //splits key from value
        $metaentry = explode(":", $metaline);
        //removes all spaces around the value
        $key = trim($metaentry[0]);
        $value = trim($metaentry[1]);
        $meta[$key] = $value;
    }
    //the splittet version: just the value
    $title = $meta["title"];
    //the splittet text
    $text = $content[1];
    //should give the result from the function
    $result = [
        "title" => $title,
        "text" => $text,
        "meta" => $meta,
    ];
    //returns the result
    return $result;
}
 


 