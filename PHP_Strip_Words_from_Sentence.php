<?php

//This script allows a user to define key words and the program strips them from  a sentence
//The script is written purely in PHP


$wordlist = array("or", "And", "where", "freedom");

$string="Apple, More, Andrew, Wherever, boyfriend, or, And, where, loveand, freedom";

foreach ($wordlist as &$word) {
    $word = '/\b' . preg_quote($word, '/') . '\b/';
}

$string = preg_replace($wordlist, '', $string);


echo $string;

?>