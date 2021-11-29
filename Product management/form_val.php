<?php 

session_start();

if(isset($_SESSION["phone"]))
    {
        echo"Success";
    }
    else
    {
        echo"Fail";
    }


?>