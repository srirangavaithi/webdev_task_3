<?php
$uname=$_GET["un"];
$pword1=$_GET["p1"];
$pword2=$_GET["p2"];
if(empty($uname)||empty($pword1)||empty($pword2))
{
echo "all fields required";
die();
}
else
{
if($pword1!=$pword2)
{
echo "password and confirmed password not matching";
die();
}
else
{
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="signup_register";
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);

$SELECT="SELECT username FROM signup_table where username=? Limit 1";
$INSERT="INSERT INTO signup_table VALUES(?,?)";

$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$uname);
$stmt->execute();
$stmt->bind_result($uname);
$stmt->store_result();
$rnum=$stmt->num_rows;
if($rnum==0)
{
$stmt->close();
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("ss",$uname,$pword1);
$stmt->execute();
echo "registered successfully";
$stmt->close();

$sql= "CREATE TABLE appdata (appdate varchar(200), apptitle varchar(200),appdiscp varchar(200), appstime varchar(20), appetime varchar(20))";
if($conn->query($sql))
echo "memory allocated for it " ;
}
else
{
echo "username already exists";
die();
}
}
}
?>