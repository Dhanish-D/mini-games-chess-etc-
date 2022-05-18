<?php 
session_start();
	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password_c = $_POST['password_c'];
		$password = $_POST['password'];
		$email=$_POST['email'];
		$email=strtoupper($email);
        strtoupper($_POST['user_name']);
         $user_name=strtoupper($user_name);
		if(!empty($user_name) && !is_numeric($user_name))
		{
			$query = "select * from user where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
			$user_data = mysqli_fetch_assoc($result);
			if($user_data['user_name'] !=null && $user_data['email']==$email)
			{
                if($password===$password_c)
                { 
                $query = "update  user set password='$password_c' where user_name='$user_name'";
				mysqli_query($con, $query);
				header("Location: login.php");
			   }
			    else
		  		  {
		    	echo '<script>alert("Password does not match")</script>';
		    		}
		    }
		    else
		    {
		    	echo '<script>alert("User not found")</script>';
		    }
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup</title>
	<meta charset="utf-8">
    <meta name="theme-color">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Forget password">
<body>

	<style type="text/css">
		body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
	}
	@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
    }
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	#text0{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	#text1{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	#text2{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}
	#text3{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}


	#button{

		padding: 10px;
		width: 100px;
		color:orangered	;
		background-color: lightblue;
		border: none;
		border-radius: 20px;
		font-size: 20px;
	}
		#button:hover
		{

		padding: 10px;
		width: 120px;
		color:orangered	;
		background-color: lightgrey;
		border: none;
		border-radius: 20px;
		font-size: 20px;
	}

	#box{
 
		background-color: steelblue;
		margin: 250px;
		width: 300px;
		padding: 20px;
		margin: auto;
		border-radius: 20px;
		text-align: center;
		box-shadow: 20px;
		margin-top: 210px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Reset Password</div>

			<input id="text" type="text" name="user_name" placeholder="USER NAME" required><br><br>
			<input id="text0" type="email" name="email" placeholder="Email" required><br><br>
            <input id="text2" type="password" name="password" placeholder="SET PASSWORD" required><br><br>
            <input id="text3" type="password" name="password_c" placeholder="CONFIRM PASSWORD" required><br><br>
			<input id="button" type="submit" value="Reset"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>