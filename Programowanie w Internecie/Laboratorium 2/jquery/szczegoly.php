<?php

$con = new PDO('mysql:host=localhost;dbname=test', 'root', '');
if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } 
$marka=$_POST['marka'];
$model=$_POST['model'];
$rok=$_POST['rok'];
$sql= mysqli_query($con,'INSERT INTO `samochody`(`marka`, `model`, `rok`) VALUES('$marka', '$model', '$rok')';

exit();
 ?>
