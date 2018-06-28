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
$sql= "CREATE TABLE appdata (appdate varchar(200), apptitle varchar(200),appdiscp varchar(200), appstime varchar(20), appetime varchar(20))";
?>