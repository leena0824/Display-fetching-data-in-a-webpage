<?php
session_start();
$_SESSION["username"]="Leena Suryawanshi";
$_SESSION["class"]="BCA";
echo $_SESSION["username"];
echo $_SESSION["class"];
session_unset();
?>