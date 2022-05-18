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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A joyfull game">
	<title>Stone Paper Sizzer</title>
	<script defer src="stone.js"></script>
	<link rel="stylesheet" href="stone.css">
</head>
<body>
  <div id="game">
  	<h1 style="color: green;font-style: italic;">Stone Paper Sizzer</h1>
  	<button id="stone"onclick="stone()">STONE</button>
  	<button id="paper" onclick="paper()">PAPER</button>
  	<button id="sizzer"onclick="sizzer()">SIZZER</button>
  	<br>
  	<br>
  	<h2>OPPONENT:</h2>
  	<h1 id="computer" style="color: red;font-style: italic;">*****</h1>
  	<h1>Your's Score:</h1>
  	<h2 id="myscore">0</h2>
  	<h1>Opponent's Score:</h1>
  	<h2 id="computerscore">0</h2>
  	 <a id="logout" href="logout.php">Logout</a>
  </div>
</body>
</html>