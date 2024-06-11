<?php
include("connection.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query ="SELECT * FROM tbb_data where id='$id'";
    $data = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($data);
}

if(isset($_POST['update'])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];
    $languages = implode(",", $_POST["languages"]); // Combine selected languages into a comma-separated string
    $phoneno = $_POST["phoneno"];

    // Prepared statement to prevent SQL injection
    $query = "UPDATE tbb_data SET name=?, age=?, country=?, gender=?, languages=?, phoneno=? WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sissssi", $name, $age, $country, $gender, $languages, $phoneno, $id);
    $success = mysqli_stmt_execute($stmt);

    if($success) {
        echo "<script>alert('Record Updated')</script>";
    header('location:display.php');
        
    } else {
        
        echo "Failed to update record";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Update Student Details</title>
    

</head>
<style media="screen">
    label{
        display: block;
    }
</style>
<body>
<form class="" action="" method="post" autocomplete="off">
    <label for="name">Name</label>
    <input type="text" name="name" required value="<?php echo isset($result['name']) ? $result['name'] : ''; ?>">
    <label for="age">Age</label>
    <input type="number" name="age" required value="<?php echo isset($result['age']) ? $result['age'] : ''; ?>">
    <label for="country">Country</label>
    <select class="" name="country" required>
        <option value="" selected hidden>Select Country</option>
        <option value="USA" <?php if(isset($result['country']) && $result['country'] == "USA") echo "selected"; ?>>USA</option>
        <option value="UK" <?php if(isset($result['country']) && $result['country'] == "UK") echo "selected"; ?>>UK</option>
        <option value="India" <?php if(isset($result['country']) && $result['country'] == "India") echo "selected"; ?>>India</option>
    </select>

    <label for="">Gender</label>
    <input type="radio" name="gender" value="Male" <?php if(isset($result['gender']) && $result['gender'] == 'Male') echo "checked"; ?> required> Male
    <input type="radio" name="gender" value="Female" <?php if(isset($result['gender']) && $result['gender'] == 'Female') echo "checked"; ?> required> Female

    <label for="languages">Languages</label>
    <input type="checkbox" name="languages[]" value="English" <?php if(isset($result['languages']) && in_array("English", explode(",", $result['languages']))) echo "checked"; ?>> English
    <input type="checkbox" name="languages[]" value="Chinese" <?php if(isset($result['languages']) && in_array("Chinese", explode(",", $result['languages']))) echo "checked"; ?>> Chinese
    <input type="checkbox" name="languages[]" value="Spanish" <?php if(isset($result['languages']) && in_array("Spanish", explode(",", $result['languages']))) echo "checked"; ?>> Spanish

    <label for="">Phone No</label>
    <input type="number" name="phoneno" required value="<?php echo isset($result['phoneno']) ? $result['phoneno'] : ''; ?>">
    <br>
    <button type="submit" name="update">Update</button>
</form>
</body>
</html>
