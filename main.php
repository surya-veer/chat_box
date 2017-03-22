<?php
session_start();
  $con=mysql_connect("localhost","root","");
  mysql_select_db("iiti");
  //echo $con;

  if(isset($_POST['Submit']))
  {
    //$uName=$_GET['userName'];
    //$pas=$_GET['pwd'];
    $chat=($_POST['chat_box']);
    $name=$_SESSION['name'];
    if($chat){
    $queryName=mysql_query("INSERT INTO chat (id,message,name) VALUES (NULL, '$chat','$name')");
    $chat=NULL;
    }
    $getdata=mysql_query("SELECT * FROM chat");
    echo $getdata;
  }


?>
<html>
<head>
  <title>Chat</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <style type="text/css">
    .box{
      max-width: 500px;
      height: 500px;
      margin: auto;
      margin-top: 50px;
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
    <!-- chat -->
    </div>
  </div>
   <DIV class="post">
      <form method="post">
        <input class="put" type="text" name="chat_box" width="100px" placeholder="" autofocus autocomplete="OFF">
          <button type="submit" name="Submit" id="send">send</button>
      </form>
    </DIV>
<script>
function showHint() {
  var xhttp;

  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("new").innerHTML = this.responseText;

    }
  };
  xhttp.open("GET", "chat.php", true);
  xhttp.send();   
}
setInterval(function(){
  showHint();
   $(document).ready(function(){
  var d=10000000;
        $("div").scrollTop(d);
        d=d+100;
});
},100);
</script>  
</body>
</html>
