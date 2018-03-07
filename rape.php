<!DOCTYPE html>
<html>
<head>
	<title>Raping <?php echo $_POST["bots"]; ?></title>
	<style>
body{
	margin: 0;
	overflow-x: hidden;
	overflow-y: hidden;
	max-width: 100%;
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
   font-weight: 300;
}
input{
	width: 100%;
	height: 50px;
	font-size: 15px;
	border-top: 1px lightgray solid;
	border-bottom: 1px lightgray solid;
	border-left: none;
	bottom-right: none;
   font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
   font-weight: 300;
}
button{
	background-color: white;
	border-top: 1px lightgray solid;
	border-bottom: 1px lightgray solid;
	border-left: none;
	border-right: none;
	width: 100%;
   font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
   font-weight: 300;
   font-size: 16px;
}
h1{
   font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
   font-weight: 300;
}
</style>
</head>
<body>
<center><h1>Raping pin: <?php echo $_POST["pin"]; ?></h1></center>
<br>
<a href="pin.php"><button>Stop Raping</button></a>

   <iframe style="visibility: hidden;" src="http://localhost:3000/start/<?php echo $_POST["pin"]; ?>/<?php echo $_POST["bots"]; ?>/" frameborder="0"></iframe>
</body>
</html>

