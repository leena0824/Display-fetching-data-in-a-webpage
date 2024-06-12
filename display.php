<?php
session_start();

?>
<html>
    <head>
        <title>Display records</title>
        <head>
            <style>
                body{
                    background: #D071f9;
                }
                table{
                   background-color:white;
                }
                .update, .delete{
                    background-color:green;
                    color:white;
                    border:0;
                    outline:none;
                    border-radius:5px;
                    height:22px;
                    width:80px;
                    font-weight:bold;
                    cursor:pointer;

                }
                .delete{
                    background-color:red;
                }
            
                    .blink {
                animation: blinker 1.5s linear infinite;
                color: red;
                font-family: sans-serif;
            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }
            h1 { 
                color:red; 
            } 
            </style>
            <body>
            <marquee class="blink" width="60%" direction="right" height="100px">
 <h1>Displaying all Records</h1>
</marquee>
                <table border="2">

                <tr>
                    <th>Id</th>
                    <th>Images</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Country</th>
                    <th>Gender</th>
                    <th>Languages</th>
                    <th>phoneno</th>
                    <th>operations</th>
                 </tr>  
                  
        
<?php

include("connection.php");
 $userprofile=$_SESSION['user_name'];
 if( $userprofile ==  true)
 {
 
 }
 else{
    ?>
    
    <meta http-equiv = "refresh" content = "0; url = http://localhost/php/login.php"/>
<?php
    
 }
 
 

 
$query ="SELECT * FROM tbb_data";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

//echo"$total";
 if(mysqli_num_rows($data)>0)
{
   
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['id']."</td>
        <td><img src='Images/".$result['Images']."' height='100px' width='100px'></td>
        <td>".$result['name']."</td>
        <td>".$result['age']."</td>
        <td>".$result['country']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['languages']."</td>
        <td>".$result['phoneno']."</td>

        <td>
        <a href='update_design.php?id=$result[id]'><input type='submit' value='update' class='update'</a>
        <a href='delete.php?id=$result[id]'><input type='submit' value='delete' class='delete' onclick ='return leena()'</a>
        </td>
        </tr>";
 

    }
 
}
else{
   echo "no records";
}


?>
</table><a href="logout.php" onclick="return confirm('Are you sure you want to logout?');">
<input type ="submit" name="" value="LogOut" style="background:blue; color:white;height:35px; width:100px; margin-top:20px;font-size:18px;border-radius:5px;border:0; cursor:pointer;"></a>


<script>
    function leena(){
       return confirm(' Are you sure you want to delete this record?'); 
    }
</script>

