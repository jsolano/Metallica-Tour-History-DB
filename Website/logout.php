<html>
<head>
<title>DB 2019</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/back.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<meta http-equiv="refresh" content="2;url=http://db2019.byethost3.com/index.php">

</head>
<body style="background-color: #c850c0;background: -webkit-linear-gradient(45deg, #4158d0, #c850c0);background: -o-linear-gradient(45deg, #4158d0, #c850c0);background: -moz-linear-gradient(45deg, #4158d0, #c850c0);background: linear-gradient(45deg, #4158d0, #c850c0)">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">DB 2019</a>
      </div>
      <ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
      	<li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
    </ul>
    </div>
  </nav>
<div class="wrapper fadeInDown">
  <div id="formContent">

    <div class="fadeIn first">
      <img src="/images/icons/avatar.png" id="icon"/>
    </div>


<?php
session_start();
ob_start();
session_destroy();
echo "<center>You have successfully logged out!</center>";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>


    <div id="formFooter">
      <a class="underlineHover" href="https://www.mehmetfatih.com" target="_blank">Mehmet Fatih Okuyan</a>
    </div>

  </div>
</div>
</body>
</html>
