<?php
$apdate=$_POST["appdate"];
$aptitle=$_POST["apptitle"];
$apdis=$_POST["appdis"];
$apstime=$_POST["appstime"];
$apetime=$_POST["appetime"];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="signup_register";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
$INSERT="INSERT INTO appdata VALUES(?,?,?,?,?)";
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("sssss",$apdate,$aptitle,$apdis,$apstime,$apetime);
$stmt->execute();
echo "appointment added";
?>