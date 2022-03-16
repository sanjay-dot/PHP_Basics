<?php

$conn = mysqli_connect("localhost","root","Admin@321","upload");

if(!$conn){
    echo "Connection failed";
    die();
}
else{
    echo "connected succesfully";
}


?>