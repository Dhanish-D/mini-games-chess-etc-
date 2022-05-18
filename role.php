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
    <meta name="description" content="Role Hierarchy">
	<title>Role Hierarchy</title>
	<link rel="stylesheet" type="text/css" href="styletrees.css">
    <script defer src="trees.js"></script>
</head>
<body>
    <style type="text/css">
        body {
    
     width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-size: 300% 300%;
  font-family: 'Exo', sans-serif;
  background-image: linear-gradient(
        -45deg, 
        rgba(80,90,80,0.8) 0%, 
        rgba(15,100,30,0.8) 25%, 
        rgba(20,68,50,0.8) 51%, 
        rgba(100,93,100,0.8) 100%
  );  
  animation: AnimateBG 20s ease infinite;
}

@keyframes AnimateBG { 
  0%{background-position:0% 50%}
  50%{background-position:100% 50%}
  100%{background-position:0% 50%}
}
.title
{
    color:#F20049 ;
    position: center;
    border: 7px solid steelblue;
    padding: 10px;
    margin-right: 510px;
    border-radius: 20px;
}
.operation
{
    color: black;
    font-size: 25px;

}
h2{color: red;}

.id
{
    color: red;
    font-size: 20px;
}
.mainhead
{
    //padding-left: 200px;
  margin-left: 400px;
}
#output
{
    width: 1000px;
    height: 1000px;
    box-sizing: border-box;
}
.my_text
{
    width: 300px;
    height: 300px;
    position: center;
}

#outmain
{
    color:  black;
    position: center;
    border: 5px solid black;
    padding: 10px;
    margin-right: 530px;
    border-radius: 10px;
}
    </style>
    <div class="mainhead">
    <h2 class="title">Hello! Welcome to Role Heirarchy</h1>
    <div class="operation">
    
    <h2>Please find the operation you can do</h3>
    <ol>
    	<li>Create root role with Name</li>
    	<li>Add sub role with Name</li>
    	<li>Display role</li>
    	<li>Display role with Name</li>
    	<li>Delete user</li>
        <li>Display Child</li>
        <li>Display 1st level child</li>
    	<!--<li>Display Users</li>
    	<li>Display Users and Sub users</li>
    	<li>Delete user</li>
    	<li>Number of users from top</li>
    	<li>Height of role hierachy</li>
    	<li>Common boss of users</li>-->
    </ol>
 </div>
 <h2 class="id">Enter the operation</h2>
 <form>
        <input id="value2"   placeholder="value between 1-7" value= "" min="1" max="6" >
        <button  onclick="validate()" type="button">Submit</button>
 </form>
  <!--<input type="paragraph" name="outputconsole" class="my_text">-->
   <h2 id="outmessage"> Console:</h2>
       <h2 id="outmain"> </h2>
       <footer>
         <a style="color: darkred;position: relative;"id="logout" href="logout.php" class="logout">Logout</a>
     </footer>
  </body>
</html>