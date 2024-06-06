<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.926);
            width: 300px;
            text-align: center;
        }
        label{
            display: block;
            margin-bottom: 8px;
            text-align: left;
            color:black;
        }
        input{
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
           
        }
    </style>
</head>
<body><center>
    <div class="container">
        <h1><u>Registration Form</u></h1>
        <div class="log">
            <label for="username">Username: </label>
            <input type="text" id="username" placeholder="Enter Username">
            <label for="password">Password:</label>   
            <input type="password" id="password" placeholder="Enter Password">
            <a href="#">Forgot Password</a>
            <br>
            <input type="button" onclick="alertSubmission()"  value="Login">
        </div>
    </div></center>

</body>
<!--<script>
    function alertSubmission(){
    
    window.location.href="http://127.0.0.1:5500/3RDhome.html"
      
    }
</script> -->

</html>