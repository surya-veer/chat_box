<?php 
	session_start();
	$_SESSION['name']="User";
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$_SESSION['name']=$name;
		echo "<script>location='main.php'</script>";
	}
?>
<html>
<head>
	<title>Chat</title>
</head>
<body>
	Plsease Enter your user name
	<form method="POST">
		<input type="text" name="name">
		<input type="submit" value="OK" name="submit">
	</form>
</body>
</html>