<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "data");
if($conn)
{
   // echo"connection ok";
}
else{
    echo"connection  failed".mysqli_connect_error();
}
?>