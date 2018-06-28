<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="signup_register";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT appdate, apptitle,appdiscp,appstime,appetime FROM appdata";
$result = $conn->query($sql);
if ($result->num_rows> 0)
 {

    while($row = $result->fetch_assoc()) {
        echo "appointment date :<br>" . $row["appdate"]. "  appointment title: " . $row["apptitle"]."  appointment discription :<br>" . $row["appdis"]."  appointment start time :<br>" . $row["appstime"]."  appointment end time:<br>" . $row["appetime"].  "<br>";
    }
} else {
    echo "0 results";
}