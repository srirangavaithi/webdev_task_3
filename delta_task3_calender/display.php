<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="signup_register";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT appname, appdate FROM appdata";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "appointment name" . $row["appname"]. " - appointment date: " . $row["appdate"]. "<br>";
    }
} else {
    echo "0 results";
}