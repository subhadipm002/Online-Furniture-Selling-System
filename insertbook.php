<html>
<body>
<?php
$con=mysqli_connect("localhost","root","","BookShop");
//Check connection
if(mysqli_connect_error($con))
  {
  	echo "Failed to connect to MySQL:" .mysqli_connect_error($con);
  }

$bn=$_POST['bname'];
$at=$_POST['author'];
$isbn=$_POST['isbn'];
$prc=$_POST['price'];
$pub=$_POST['publisher'];
$btype=$_POST['btype'];

if($_FILES["bimage"]["error"]>0)
			{
				echo "Error:" . $_FILES["bimage"]["error"] . "<br>";
			}
		else
			{
							
				move_uploaded_file($_FILES["bimage"]["tmp_name"],
				"upload/" . $isbn .  $_FILES["bimage"]["name"]);
		
				
			}


$bi = "upload/" . $_FILES["bimage"]["name"];		


$sql="INSERT INTO BOOKS (BOOKNAME ,AUTHOR,ISBN,PRICE , PUBLISHER, BOOKIMAGE, BOOKTYPE)VALUES('$bn' , '$at' , '$isbn', '$prc' ,'$pub' ,'$bi', '$btype')";

if(!mysqli_query($con,$sql))
  {
  die('Error:'  .mysqli_error($con));
  }
echo "1 record added";
mysqli_close($con);
?>
</html>
</body>