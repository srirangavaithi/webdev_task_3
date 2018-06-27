<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="signup_register";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);

$DROP="DROP TABLE appdata";
$stmt=$conn->prepare($DROP);
$stmt->execute();
echo "all appointments cancelled";
$sql= "CREATE TABLE appdata(appname varchar(200), appdate varchar(20)";
?>