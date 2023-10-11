<?php

/* $a = $_GET['input'];
echo " <h1> $a </h1> ";  */


$str = "#This#is#a#text";
$separator = "#";
$new = explode($separator,$str);
print_r($new);

// replace separator 
$newSeparator = "@";
$new2 = str_replace($separator,$newSeparator,$str);
print_r($new2);
// last word in string
$len = strlen($str);
$words = str_word_count($str , 1);
$last = end($words);
echo "\n last word is = ", $last;

?>