

<?php
$con=mysqli_connect("localhost","root","","furniture");
//check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " .mysqli_connect_error();
}

$res=mysqli_query($con,"SELECT pimg,pid,pname,pbrand,pstock,price FROM description");

echo "<table border='1' align='center' width=800 height=600>";

for($i=0;$i<2;$i++)
{
echo "<tr>";
    for($j=0;$j<2;$j++)
    {
echo "<th>";
     
if($row=mysqli_fetch_array($res))
{

print("<img src=' ". $row['pimg'] ." ' width='400' height='200'>");
echo "<form action='cart.php' method='post'>";
echo "<input type='hidden' name='pimg' value='" .$row['pimg']."'>";

echo "<input type='hidden' name='pname' value='" .$row['pname']."'>";
echo "<input type='hidden' name='pid' value='" .$row['pid']."'>";
echo "<input type='hidden' name='pbrand' value='" .$row['pbrand']."'>";
echo "<input type='hidden' name='price' value='" .$row['price']."'>";
echo "Product_code: ".$row['pid']."<br>";
echo "Product_name: ".$row['pname']."<br>";
echo "Brand: ".$row['pbrand']."<br>";
echo "Availability: ".$row['pstock']."<br>";
echo "Price: ".$row['price']."<br>";

echo "
quantity:&nbsp&nbsp&nbsp&nbsp<select name='qty'>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
      <option value='4'>4</option>

 </select>
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
 <input  type='submit' value='Add to cart'></form>";


}
echo "</th>";

    }
echo "</tr>";
} 
echo "</table>";


mysqli_close($con);
?>
