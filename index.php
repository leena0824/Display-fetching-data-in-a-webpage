<?php
include("connection.php");

if(isset($_POST["submit"])){

  
 $filename = $_FILES["uploadfile"]["name"];
 $tempname = $_FILES["uploadfile"]["tmp_name"];
 $folder = "Images/" . $filename;
  if(move_uploaded_file($tempname, $folder)){
    echo "File uploaded successfully.";
  }else{
    echo "Failed to upload file.";
  }
  

  $name = $_POST["name"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];
  $languages = implode(",",$_POST["languages"]);
  $phoneno = $_POST["phoneno"];

  $query = "INSERT INTO `tbb_data`(name, age, country, gender, languages, phoneno, Images) VALUES('$name', '$age', '$country', '$gender', '$languages','$phoneno','$filename')";
   $result = mysqli_query($conn,$query);
  if($result)
  {
    echo "Data Inserted into Database";
  }
  else{
    echo "Failed to insert data into database";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>File upload</title>
    <style>
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
          
            body { 
                text-align:center; 
                background: #D071f9;
            } 
            h1 { 
                color:red; 
            } 
        </style> 
      
  </head>
  <style media="screen">
    label{
      display: block;
    }
  </style>
  <body>
  <marquee class="blink" width="60%" direction="right" height="100px">
 <h1>REGISTERATION PAGE</h1>
</marquee>
    
  <form  action="" method="post" enctype="multipart/form-data"style=" width:100%">
      <label for="uploadfile"> Images</label>
      <input type="file"name="uploadfile" required><br><br>
  
    
      <label for="name">Name</label>
      <input type="text" name="name" required><br><br>
      <label for="age">Age</label>
      <input type="number" name="age" required><br><br>
      <label for="country">Country</label>
      <select name="country" required>
        <option value="" selected hidden>Select Country</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="India">India</option>
      </select><br><br>
      <label for="gender">Gender</label>
      <input type="radio" name="gender" value="Male" required> Male
      <input type="radio" name="gender" value="Female" required> Female
      <label for="languages">Languages</label>
      <input type="checkbox" name="languages[]" value="English" required>English
      <input type="checkbox" name="languages[]" value="Chinese"required>Chinese
      <input type="checkbox" name="languages[]" value="Spanish"required>Spanish
      <br><br>
      <label for="phoneno">phoneno</label>
      <input type="number" name="phoneno" required>
      <br><br>
      <button type="submit" name="submit">submit</button>

    </form>
  </body>
</html>