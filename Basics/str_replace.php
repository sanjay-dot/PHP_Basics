<?php

$str = 'I am in Office at of are in the';

$str2 = str_replace(array('at', 'of','in','are','the'), array('$','.' ,'=','+','-'), $str);


echo $str2;


?>



