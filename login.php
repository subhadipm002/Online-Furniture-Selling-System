<html>
<body>
<?php
$uid=$_GET["uid"];
$swd=$_GET["pwd"];
$con=mysqli_connect("localhost","root","","furniture");
//check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL:".
mysqli_connect_error();
}
$res=mysqli_query($con,"select Firstname from user where Email='$uid' and Password='$swd' ");
if($row=mysqli_fetch_array($res))
{

session_start();
$_SESSION['uid']=$uid;
$_SESSION['un']=$row['Firstname'];
header('Location:http://localhost/Project/uhome.php');
}
else
echo "invalid id/pwd";
?>
</body>
</html>