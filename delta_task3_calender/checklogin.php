<html>
<body>
<?php
$uname=$_POST["uname"];
$pword=$_POST["pword"];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="signup_register";
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
$SELECT="SELECT Username FROM signup_table WHERE Username=? AND Password=?";
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("ss",$uname,$pword);
$stmt->execute();
$stmt->bind_result($uname);
$stmt->store_result();
$rnum= $stmt->num_rows;
if($rnum==1)
{
	echo "welcome";
	echo $uname;
	
	echo("<br><button onclick=\"location.href='add.html'\">add appointment</button>");
	echo("<br><button onclick=\"location.href='display.php'\">display appointments</button>");
	echo("<br><button onclick=\"location.href='delete.php'\">delete all appointments</button>");
}
else
{
	echo "Username or Password wrong";
}
?>
</body>
</html>