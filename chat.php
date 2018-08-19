<?php
session_start();
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"iiti");
	// echo $con;
	$getdata=mysqli_query($con,"SELECT * FROM chat");

	while ($row = mysqli_fetch_array($getdata))
			{echo '<b>'.$row[2].'</b>'.": ". $row[1] . "<br>";}
?>
