<?php

$count = 0;
$num = 7;

for($i=2; $i<=$num/2; $i++){

    if($num%$i == 0){
        $count+=1;
        }
    }
if ($count > 0){
    echo "Not a Prime";
    }
else{
    echo "Prime";
    }


?>
