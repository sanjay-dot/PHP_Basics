<?php

$num1 = 0;
$num2 = 1;

$counter = 0;

while($counter < 50){
    echo '<br>'.$num1;
    $num3 = $num1+$num2;
    $num1 = $num2;
    $num2 = $num3;

    $counter++;
}
?>
