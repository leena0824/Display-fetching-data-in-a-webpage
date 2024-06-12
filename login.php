<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="login-style.css">
    <title>Login By Leena  </title>
</head>
<body>

   <b> <center><p>Welcome</p></center></b></div>
   
    <div class ="center">
        <h1>Login</h1>
        <form action="#" method="post" autocomplete="off">

    <div class="form">

    <input type="text" name="username"  class="textfield" placeholder="Username"><br><br>
    <input type="password" name="password"  class="textfield" placeholder="Password"><br><br>
    <div class="forgetpass"><a href="#" class="link" onclick="leeena()">Forget Password ?</a></div><br>
    <input type="submit" name="login" value="Login" class="btn"><br>
    <div class="sign up">New Member ? <a href="#" class="link">SignUp Here</a></div>
</div>
</div>
</form>
<script>
    function leeena()
    {
        alert("learn your password");
        }
        
</script>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['login']))
{
  $username=  $_POST['username'];
  $pwd=  $_POST['password'];
$query= "SELECT * FROM tbb_data where email='$username' && password ='$pwd'" ;
 $data=mysqli_query($conn,$query);
 $total=mysqli_num_rows($data);
 //echo $total;
 if($total == 1){
$_SESSION['user_name']= $username;
?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/php/display.php"/>
 
 <?Php
 }
 else{
   echo"Login failed";
 }
}

?>