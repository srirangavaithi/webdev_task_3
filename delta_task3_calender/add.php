<?php
$apname=$_POST["appname"];
$apdate=$_POST["appdate"];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="signup_register";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
$INSERT="INSERT INTO appdata VALUES(?,?)";
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("ss",$apname,$apdate);
$stmt->execute();
echo "appointment added";

?>