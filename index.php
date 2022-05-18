<?php 
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="theme-color">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A joyfull game">
	<title>Click and Win Game</title>
	<link rel="stylesheet" type="text/css" href="game.css">
	<script defer src="game.js"></script>
</head>
<body>
	  <div class="mainbox">
	    	<h1 style="color: red;" id="time">Time:</h1> 
	   	<h1 id="time1">0</h1>
	   	<h1 style="color: green;text-align: center;"id="Level"> Level:</h1> 
	   	<h2 id="Level1"> 0</h2>
	   	<h3 id="congrats">Lets get Started</h3>
		   <p id="counts">0</p>
			   <button id="Button" class="Button" placeholder="start" onclick="start();">Count</button >
			   <button id="reset" class="reset" placeholder="start" onclick="end();">Reset</button >
     </div>
     <a id="logout" href="logout.php">Logout</a>
      <!--<h1 id="Level">Your high level </h1>
			   </p>
		<h1 id="Levelvalue"></h1>
         -->
        
</body>
</html>