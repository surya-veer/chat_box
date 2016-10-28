<?php
	$con=mysql_connect("localhost","root","");
	mysql_select_db("iiti");
	//echo $con;

	if(isset($_POST['Submit']))
	{
		//$uName=$_GET['userName'];
		//$pas=$_GET['pwd'];
		$chat=($_POST['chat_box']);
		//echo $uName;
		if($chat){
		$queryName=mysql_query("INSERT INTO chat (id,message) VALUES (NULL, '$chat')");
		$chat=NULL;
		}
		$getdata=mysql_query("SELECT * FROM chat");
	}


?>
<html>
<head>
	<title>Chat</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var d=10000000;
        $("div").scrollTop(d);
        d=d+100;
});
</script>
	<style type="text/css">
		.box{
			max-width: 500px;
			height: 300px;
			margin: auto;
			margin-top: 150px;
			background-color: #c2c2a3;
			position: relative;
		}
		.put{
			width: 100%;
			height: 30px;
		}
		.post{
			position: static;
			margin-left: 25%;
			margin-right: 25%;
		}
		.chat{
			margin-left: 50px;
			height: 90%;
			float:left;
			width:95%;
			overflow-y: auto;
		}



	</style>
</head>
<body>
	<div class="box">
		<div class="chat" id="new">
			<?php while ($row = mysql_fetch_array($getdata))
					echo ">> " . $row[1]?> . "<br><br>";
			?>
				
	
		</div>
		<DIV class="post">
			<form method="post">
				<input class="put" type="text" name="chat_box" width="100px" placeholder="" autofocus autocomplete="OFF">
					<button type="submit" name="Submit" id="send">send</button>
			</form>
		</DIV>

	</div>
</body>
</html>
