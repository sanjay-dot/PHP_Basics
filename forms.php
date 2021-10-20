<?php

session_start();  

   $model =trim($_POST['model']);
   $name =trim($_POST['name']);
   $price =trim($_POST['price']);
//    $file = $_FILES["name"]["file"];
//    $tmp_file = $_FILES["tmp_name"]["file"];

//    $path = "uploads/".$file;
//     move_uploaded_file($file, $path);
  if(isset($_SESSION["phone"]))
  {
    array_push($_SESSION['phone'],array("Model"=>$model, "Name"=>$name,"Price"=>$price));
  }
  else{
    $_SESSION['phone'] = array();
    array_push($_SESSION['phone'],array("Model"=>$model, "Name"=>$name,"Price"=>$price));

  }

    if(isset($_SESSION["phone"]))
    {
        // print_r($_SESSION["phone"]);
        echo json_encode($_SESSION["phone"]);  
    }
    else
    {
        echo"Fail";
    }
    
   
?>  
 


