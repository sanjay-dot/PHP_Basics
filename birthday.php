<?php

$targetdays = mktime(0,0,0,11,01,2022);

$today = time();

$difference = ($targetdays - $today);

$day = (int)($difference/86400);

echo "The differnce is $day days only";


?>
