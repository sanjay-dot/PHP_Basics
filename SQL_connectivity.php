<?php

include('database.php');

$sql = "SELECT * FROM employee_tbl";

$result = mysqli_query($conn,$sql);

$row =mysqli_num_rows($result);

if($row > 0){

    while( $row = mysqli_fetch_assoc($result)){
        echo $row["Name"]. "<br>";
        

    }
}
else{
    echo "No Results";
}
?>

<html>
    <head>
</head>
<body>

</body>
</html>