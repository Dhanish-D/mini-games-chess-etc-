var userId=document.getElementById('username');
var password=document.getElementById('password');
var value=[0,0];
function validate()
{
	if(userId.value=="" || password.value=="")alert("Please fill the required Details");
	 else if(localStorage.getItem(userId.value))
		{
			var testname=localStorage.getItem(userId.value);
			const myArray = testname.split(",");
			var testname1=myArray[0];
			if(testname1==password.value)
			{
				sessionStorage.setItem(userId.value,password.value);
				alert("Login Successfull\nEnjoy the GAME");
         	   window.location.assign("game.html");
            }
            else
			{
            	alert("Password Incorrect");
            }
		}
	else alert("User ID not found.\nPlease create an account\n          (or)\nEnter valid Details");
}
function createNewAccount()
{
	userId=prompt("Enter your ID (only NUMBERS)");
	if(userId===null)
		{
			stopPropagation();
		}
	if(userId=="")
		{
			alert("Enter UserId");
		}
    else
    {	
    	if(userId<=0)alert("userId must be greater 0");
    	else
    	{
    	password=prompt("Enter password\n(More than 5 characters");
    	if(password==null)window.stop();
	    if(password=="")alert("Enter valid password");
	    }
     }
	if(userId!="" && password!="" && userId>0)
	{

		if(password.length<5)
		{
			alert("Password Lenght must be greater than 5 characters");
		}
	    else if(localStorage.getItem(userId))
	  {
	  	alert("Entered USER ID already found");
	  }
	  else 
	  {
	  	value[0]=password;
	  	//value[1]=0;
	  	localStorage.setItem(userId,value);
	  	alert("Account Creation Successfull");
	  	window.location.assign("game.html");
	  }
    }
}
function lostYourPassword()
{
	userId=prompt("Enter Your Id");
	if(localStorage.getItem(userId))
	{
		password=prompt("Enter your new password");
	    localStorage.removeItem(userId);
	    value[0]=password;
	    value[1]=0;
		localStorage.setItem(userId,password);
		alert("Password Change Successfull");
		location.reload();
    }
  else 
     alert("User Id not found");
}

