<?php

$count = [];

$str = "Hello my name is Johnny";

$str2 = (explode(" ", $str));

$j = count($str2);


for($i=$j; $i >= 0; $i--)
{
    echo " ".$str2[$i];

}


?>
