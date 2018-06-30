<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="signup_register";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);

$create= "CREATE TABLE signup_table (Username varchar(200), Password varchar(200))";
$stmt=$conn->prepare($create);
$stmt->execute();
?>