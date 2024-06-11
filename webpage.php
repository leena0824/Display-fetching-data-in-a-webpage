<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login  Page</title>
    <style> </style>
</head>
<?php

include("connection.php");

?>
<body >
    <h1><center><marquee>Login Page</marquee></center></h1>
        <form method="post">
        <table align="center" border="0" cellspacing="15" size="30px" >
        <!-- <Tr><Td>UPIID-NO :</Td>
         <td><input type="number" placeholder="UPIID-NO" name="UPIID-NO"/></td>
        </Tr> -->
        <tr><td>First Name :</td>
        <td><input type="text" placeholder=" Type First Name" name="firstname"/></td></tr>
         <tr>
            <td>Last Name :</td>
            <td><input type="text" placeholder=" Type First name" name="lastname"/></td>
         </tr>
         <tr>
            <td>Email Address :</td>
            <td><input type="text" placeholder="Type Address" name="email"/></td>
         </tr>
         <tr>
            <td>Password :</td>
            <td><input type="text" placeholder="Type Password" name="password"/></td>
         </tr>
         <tr>
            <td>confirmpassword :</td>
            <td><input type="text" placeholder="Type Password" name="confirmpassWord"/></td>
         </tr>
         <tr>
            <td>Gender :</td>
            <td><input type="radio" name="os1" value="male">Male
            <input type="radio" name="os1" value="female">Female</td>
         </tr>
         <tr>
            <td>Subject :</td>
            <td>
            <input type="checkbox" name="subject[]" value="Empolyability">Empolyability
        <input type="checkbox" name="subject[]" value="english"> English
        <input type="checkbox" name="subject[]" value="Applied computer">Applied computer
        <input type="checkbox" name="subject[]" value="Software Development">Software Development
        <input type="checkbox" name="subject[]" value="Android Programming">Android Programming
        <input type="checkbox" name="subject[]" value="Web Development">Web Development
        <input type="checkbox" name="subject[]" value="Apttitude">Apttitude
            </td>
         </tr>
         <tr>
            <td>Semester :</td>
            <td>
        <input type="radio" name="semester[]" value="1">1
        <input type="radio" name="semester[]" value="2">2
        <input type="radio" name="semester[]" value="3">3
        <input type="radio" name="semester[]" value="4">4
        <input type="radio" name="semester[]" value="5">5
        <input type="radio" name="semester[]" value="6">6
        <input type="radio" name="semester[]" value="7">7
        <input type="radio" name="semester[]" value="8">8
        </td>
         </tr>
         <tr>
            <td align="center" colspan="2">
            <button type="Login" name="Login1">Login1</button>
            </td>
         </tr>
    </table>
         </form>
         <?php
 
  
 if(isset($_POST["Login1"])) {
    $fn=$_POST["firstname"];
    $ln=$_POST["lastname"];
    $em=$_POST["email"];
    $pwd=$_POST["password"];
    $conp=$_POST["confirmpassWord"];
    $gender = $_POST["os1"];
    $subjects = isset($_POST["subject"]) ? implode(", ", $_POST["subject"]) : "";
    $semesters = isset($_POST["semester"]) ? implode(", ", $_POST["semester"]) : "";
    
    $query="INSERT INTO student_data (firstname, lastname, email, password, confirmpassword, gender, Subject, Semester) VALUES ('$fn', '$ln', '$em', '$pwd', '$conp', '$gender', '$subjects', '$semesters')";
    
    mysqli_query($conn,$query);
    echo "<script> alert('Data Inserted Successfully');</script>";
}

?>
</body>
</html>