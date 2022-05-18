<?php 
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chess - Game</title>
     <meta charset="utf-8">
    <meta name="theme-color">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Chess game">
    <script type="text/javascript" defer src="chess.js"></script>
</head>

<body>
    <style>
        body {
    background: radial-gradient(circle, #0077ea, #1f4f96, #1b2949, #000);
    text-align: center;

}

h1
 {
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
}

#chessCanvas {
    margin-right: auto;
    margin-left: auto;
    display: block;
    border-color: black;
}
#logout
{
 text-align: center;
 color: red;
}
#currentTeamText {
    align-content: center;
    font-family: 'Bungee', cursive;
}
    </style>
    <span><h1>CHESS</h1><h1> BY DHANISH </h1></span>
    <div>
        <canvas id="chessCanvas" width="400" height="400"></canvas>
    </div>
    <div>
        <h1 id="currentTeamText"></h1>

    </div>
     <a id="logout" href="logout.php">Logout</a>
</body>
</html>