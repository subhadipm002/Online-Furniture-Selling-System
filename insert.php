 <html>
 <body>
 <?php
 $con=mysqli_connect("localhost","root","","furniture");
//check  connection
if(mysqli_connect_errno())
 {

 echo "Failed to connect to MySQL:".mysqli_connect_error();
 }
 $fn=$_GET['fname'];
 $ln=$_GET['lname'];
 $pwd=$_GET['pwd'];
   $uid=$_GET['id'];
   $mob=$_GET['pno'];
 
    $add=$_GET['add'];
 $sql="insert into user (Firstname,Lastname,Password,Email,Address,Mobile_no) values('$fn','$ln','$pwd','$uid','$add','$mob')";

 if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
 }
 echo"1 record added";
 mysqli_close($con);
 ?>
 </body>
</html>