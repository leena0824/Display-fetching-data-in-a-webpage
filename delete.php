<?php
include("connection.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tbb_data WHERE id ='$id' ";
    $data = mysqli_query($conn,$query);
    if($data) {
        echo "<script>alert('Record Deleted')</script>";

        header('location:display.php');
        
    } else {
        echo "<script>alert('Failed to delete)</script>";

    }
}
?>
