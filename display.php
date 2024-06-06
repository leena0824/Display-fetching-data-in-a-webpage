<html>
    <head>
        <title>Dislay records</title>
        <head>
            <body>
                <table border="2">

                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Country</th>
                    <th>Gender</th>
                    <th>Languages</th>
               </tr>

<?php

include("connection.php");
$query ="SELECT * FROM tbb_data";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

//echo"$total";
 if($total!=0)
{
   
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['age']."</td>
        <td>".$result['country']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['languages']."</td>
        </tr>";
    }
 
}
else{
   echo "no records";
}
?>