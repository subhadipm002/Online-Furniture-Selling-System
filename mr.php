<?php
$con=mysqli_connect("localhost","root","","furniture");
//check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " .mysqli_connect_error();
}

$res=mysqli_query($con,"SELECT sno,pimg,pid,pname,pbrand,pstock,price FROM description");

echo "<table border='1' align='center' width=800 height=600>
<tr>
<th>sno</th>
<th>image</th>
<th>pid</th>
<th>pname</th>
<th>pbrand</th>
<th>pstock</th>
<th>price</th>

</tr>";

while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row['sno']."</td>";
print("<td><img src=' ". $row['pimg'] ." ' width='400' height='200'></td>");
echo "<td>".$row['pid']."</td>";
echo "<td>".$row['pname']."</td>";
echo "<td>".$row['pbrand']."</td>";
echo "<td>".$row['pstock']."</td>";
echo "<td>".$row['price']."</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
