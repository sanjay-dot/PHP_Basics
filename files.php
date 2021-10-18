<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File submission</title>
</head>
<body>

<?php

if(isset($_POST["submit"]))
{

    echo $name = $_FILES['file']['name']."<br>";
    echo $type = $_FILES['file']['type']."<br>";
    echo $size = $_FILES['file']['size'];
}



?>
  <form method="post" enctype ="multipart/form-data">
        <input type='file' name='file'>
        <input type="submit" name='submit' value="Submit">
</form>

</body>
</html>