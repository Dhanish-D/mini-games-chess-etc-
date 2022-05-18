<?php 
session_start();
	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		strtoupper($user_name);
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			$query = "select * from user where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: chooser.php");
						//die;
					}
					else
					{
						echo '<script>alert("Password Incorrect")</script>';
					}
				}
				else
				echo '<script>alert("Account not found")</script>';	
			}
			
		}
		
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	  <meta charset="utf-8">
    <meta name="theme-color">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Login">
</head>
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
	.login_box
		{
			top: 30px;
		}
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		//outline: red solid 0.8px;
	}
	#text1{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		//outline: red solid 0.8px;
	}
   /*
       display: block;
    width: 100%;
    height: 2.5rem;
    padding: .375rem .75rem;
    font-size: 1em;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s
   */
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
	.logout:hover
	{
		color: red;
	}

	</style>

	<div id="box">
		
		<form class="login_box" method="post">
			<div style="font-size: 20px;margin: 10px;color: white	;top=30px">Login</div>

			<input id="text" type="text" name="user_name" placeholder="USER NAME" required><br><br>
			<input id="text1" type="password" name="password" placeholder="PASSWORD" required><br><br>
			<input id="button" type="submit" value="Login"><br><br>
             <a href="forget.php" class="forget">Forgot Password</a><br><br>
			<a href="signup.php" class="logout">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>