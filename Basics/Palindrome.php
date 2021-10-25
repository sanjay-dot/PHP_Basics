<?php

function Palindrome($string){

    $str = strtolower($string);

    if (strrev($str) == $str){ 
        echo "Palindrome"; 
    }
    else{
        echo "Not a Palindrome";
    }
} 
Palindrome(121)
?>
