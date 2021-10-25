<?php

$x =10;

function CallByValue($x){
    $x+=5;
}

function CallByRef(&$x){
    $x += 10;
}
CallByValue($x);
echo  "The value for call by value will return".$x;

echo '<br>';
echo '<br>';

CallByRef($x);
echo  "The value for call by value will return".$x;

?>
