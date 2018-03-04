<?php
//require source file
require_once("src/convert-into-link.php");

//type the string you can use get and post method here
$string = "It is #example string you can #test #more.";

// create object
$ConvertHashtags = new ConvertIntoLink;

// call the function in classs
$result = $ConvertHashtags -> Convert($string);

// print result
echo $result;
?>