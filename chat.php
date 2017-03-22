<?php
session_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("iiti");
	// echo $con;
	$getdata=mysql_query("SELECT * FROM chat");

	while ($row = mysql_fetch_array($getdata))
			{echo '<b>'.$row[2].'</b>'.": ". $row[1] . "<br>";}
?>
