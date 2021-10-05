<?php 
function template($name, $attribut){
    extract($attribut);
    include __DIR__ . "/templates/" . $name . ".phtml";
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
    // $result = [
    //     "title" => $title,
    //     "text" => $text,
    //     "meta" => $meta,
    // ];
    $result = compact("title", "text", "meta");
    //returns the result
    return $result;
}
 


 