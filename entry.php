 <html>
 <body>
 <?php
 $con=mysqli_connect("localhost","root","","furniture");
//check  connection
if(mysqli_connect_errno())
 {

 echo "Failed to connect to MySQL:".mysqli_connect_error();
 }

 $pid=$_POST['pid'];
 $pn=$_POST['pn'];
   $pb=$_POST['pb'];
   $pstk=$_POST['pstk'];
 $pc=$_POST['pc'];
   
   if($_FILES["file"]["error"]>0)
			{
				echo "Error:" . $_FILES["file"]["error"] . "<br>";
			}
		else
			{
							
				move_uploaded_file($_FILES["file"]["tmp_name"],
				"upload/" . $_FILES["file"]["name"]);
		
				
			}


$bi = "upload/" . $_FILES["file"]["name"];	

 $sql="insert into description(pid,pname,pbrand,pstock,price,pimg) values('$pid','$pn','$pb','$pstk','$pc','$bi')";

 if(!mysqli_query($con,$sql))
{
die('Error:'.mysqli_error());
 }
 echo"1 record added";
 mysqli_close($con);
 ?>
 <br><br>
 <a href="admin.html">Click to add more items</a><br><br>
 <a href="mr.php">Click to view store</a>
 </body>
</html>