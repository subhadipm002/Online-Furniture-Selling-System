<?php
session_start();
$uid=$_SESSION['uid'];

$pname=$_POST['pname'];
$pid=$_POST['pid'];
$pbrand=$_POST['pbrand'];
$price=$_POST['price'];
$pimg=$_POST['pimg'];
$qty=$_POST['qty'];


$con=mysqli_connect("localhost","root","","furniture");
//check  connection
if(mysqli_connect_errno())
 {

 echo "Failed to connect to MySQL:".mysqli_connect_error();
 }

 
   
  	 

 $sql="insert into cart(pid,pname,pbrand,price,pimg,qty,uid) values('$pid','$pname','$pbrand','$price','$pimg','$qty','$uid')";

 if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
 }
header('Location:http://localhost/Project/discart.php');
 mysqli_close($con);
 ?>