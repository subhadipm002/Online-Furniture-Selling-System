<html><body>
<?php
	session_start();
	$un=$_SESSION['un'];
	echo "welcome ".$un;
	//echo "<br><br><a href='edit.php'>Edit</a>";
            //  echo "<br><br><a href='logout.php'>logout</a>";

?>
click to continue<br><a href="shop.php">Click Here</a>
</body>
</html>