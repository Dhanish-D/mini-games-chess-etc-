<?php 
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>
<?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        else if(array_key_exists('button3', $_POST)) {
            button3();
        }
        else if(array_key_exists('button4', $_POST)) {
            button4();
        }
        function button1() {
            header("Location: index.php");
        }
        function button2() {
            header("Location: stone.php");
        }
        function button3() {
            header("Location: role.php");
        }
         function button4() {
            header("Location: chess.php");
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Choose game">
	<title>Click and Win Game</title>
	<link rel="stylesheet" type="text/css" href="chooser.css">
	<!--<script defer src="game.js"></script>-->
</head>
<body>
	<style >
		
	body {
     width: 100%;
     height: 100vh;
    //text-align: center;
    background-image: linear-gradient(
        -45deg, 
        rgba(59,173,227,1) 0%, 
        rgba(87,111,230,1) 25%, 
        rgba(152,68,183,1) 51%, 
        rgba(255,53,127,1) 100%
      );  
     animation: AnimateBG 20s ease infinite;	
}

		}
		.games
			{
				margin: 200px;
				text-align: center;
				background: center;
				background-color: slategrey;
				font-size: 100px;
				font-style: italic;
			}
		  .header
		{
		   text-transform: uppercase;
		  background-image: linear-gradient(
		    -225deg,
		    #231557 0%,
		    #44107a 29%,
		    #ff1361 67%,
		    #fff800 100%
		  );
		  background-size: auto auto;
		  background-clip: border-box;
		  background-size: 200% auto;
		  color: #fff;
		  background-clip: text;
		  text-fill-color: transparent;
		  -webkit-background-clip: text;
		  -webkit-text-fill-color: transparent;
		  animation: textclip 2s linear infinite;
		  display: inline-block;
		      font-size: 50px;
		}

		@keyframes textclip {
		  to {
		    background-position: 100% center;
		  }
		}
	.button{

		padding: 10px;
		width: 700px;
		height: 100px;
		color: white;
		background-color: orangered;
		border-radius: 30px;
		font-size: 70px;
		font-style: italic;

	}
	.button-73{

		padding: 10px;
		width: 700px;
		height: 100px;
		color: white;
		background-color: orangered;
		border-radius: 30px;
		font-size: 70px;
		font-style: italic;
	}
	.button3{

		padding: 10px;
		width: 700px;
		height: 100px;
		color: white;
		background-color: orangered;
		border-radius: 30px;
		font-size: 70px;
		font-style: italic;
	}
	.button4{

		padding: 10px;
		width: 700px;
		height: 100px;
		color: white;
		background-color: orangered;
		border-radius: 30px;
		font-size: 70px;
		font-style: italic;
	}
	.logout
	{
		color: darkred;
	}
	.button:hover 
    {
	width: 750px;
	 height: 120px;
	 background-color: #3e8e41
	}
	.button3:hover 
    {
	width: 750px;
	 height: 120px;
	 background-color: #3e8e41
	}
	.button-73:hover 
    {
	width: 750px;
	 height: 120px;
	 background-color: #3e8e41
	}
	</style>
	<h1 style="color: red;font-style: italic;" class="header">
	Hello 	,<?php echo $user_data['user_name'];?>
	</h1>
	<div class="games">

	  <form method="post">
		 <input type="submit" name="button1"
              value="Click And Win" class="button-73" placeholder="Click And Win" />
               <br><br>
               <input type="submit" name="button2"
                class="button" value="Stone Paper Sizzer" placeholder="Click" />
                <br>
                <br>
                 <input type="submit" name="button3"
                class="button3" value="Role hierarchy" />
                <br><br>
                 <input type="submit" name="button4"
                class="button3" value="Chess" />
		</form>
	</div>
	<br><br><br>
	<footer>
         <a id="logout" href="logout.php" class="logout">Logout</a>
     </footer>

</body>
</html>