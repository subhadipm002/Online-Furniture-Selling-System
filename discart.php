<html>
<body>
<center>
  <font size='6' color='green' face='algerian' width='40' height='50'><b><u>Here is your cart</u></b></font><br><br><br></center>
  </body>
  </html>



<?php
$con=mysqli_connect("localhost","root","","furniture");
//check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " .mysqli_connect_error();
}

$res=mysqli_query($con,"SELECT pimg,pid,pname,pbrand,qty,price FROM cart");

echo "<table border='1' align='center' width=800 height=600>
<tr>
<th>Image</th>
<th>product_id</th>
<th>pro_name</th>
<th>Brand</th>
<th>Quantity</th>
<th>price</th>


</tr>";

while($row=mysqli_fetch_array($res))
{
echo "<tr>";
print("<td><img src=' ". $row['pimg'] ." ' width='400' height='200'></td>");
echo "<td>".$row['pid']."</td>";
echo "<td>".$row['pname']."</td>";
echo "<td>".$row['pbrand']."</td>";
echo "<td>".$row['qty']."</td>";
echo "<td>".$row['price']."</td>";
echo "<td><input type='submit' value='Buy Now'></td>";
echo "</tr>";
//header('Location:http://localhost/Project/hompage.html');

}
echo "</table>";

mysqli_close($con);
?>

