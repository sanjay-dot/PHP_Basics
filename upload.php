<?php
if(isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $filetmp = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $filetype = $_FILES['file']['type'];
    $fileerror = $_FILES['file']['error'];

    $fileExt = explode('.',$fileName);
    $fileAct = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');

    if(in_array($fileAct,$allowed)){
        if($fileerror === 0){
            if($fileSize < 1000000){
                $fileNamenew = uniqid('',true).".".$fileAct;
                $filedest = 'uploads/'.$fileNamenew;
                move_uploaded_file($filetmp,$filedest);
                $sql = "INSERT INTO image(image_url) VALUES('$fileNamenew)";
            }else{
                echo "Its too big";
            }
        }
        else{
            echo "Error while uploading";
        }
    }
    else{
       echo "UNSUPPORTED FORMAT";
    }

}else{
    echo "ERROR";
}
?>