var limit;
limit= prompt("Welcome to CLICK AND WIN GAME.\nDefault time = 10 seconds.\nIncrement time for each level is +5 seconds.\n                              (or)\nPlease enter your convient time:", "");
 if (limit==null||limit=="") {limit =10 ;}
		    var click=0;
		    var time=10;
			var level=1;
			var count=0;
			var intId;
			var itr=10;
			function timer(){ intId=setInterval(timeint,100);} 
			function timeint()
			{
				 document.getElementById('time1').innerHTML=Math.round(count);
				 count=count+0.1;
				 if(count<=(limit-3)){
                 document.getElementById('congrats').innerHTML="Come on BUDDY! You can do it";}
                 else{
                  document.getElementById('congrats').innerHTML="Make your fingers fast!!!";}
				 if(count>=limit || click >=itr)
				 {
			      if(click>=itr)
			      	{
			      		alert("Congrats! you moved into next level "+(level+1));
			      		document.getElementById('Level1').innerHTML="You won this level!";
			      		document.getElementById('counts').innerHTML=0;
			      		document.getElementById('time1').innerHTML=Math.floor(count);
			      		click=0;
			      		time=time+5;
         		        level++;
         		        itr=itr+5;
			      		document.getElementById('congrats').innerHTML="Congrats! you moved to next level "+(level)+"   ,To win this level click "+time+" times";
						clearInterval(intId);
			         }
					else
					{
						document.getElementById('congrats').innerHTML="Time Over! Please refresh the game (or) Reset the game";
						document.getElementById('Button').disabled = false;
				        clearInterval(intId);
						document.getElementById('time1').innerHTML=limit;
						document.getElementById('Level1').innerHTML="Your Level "+(level-1);
						document.getElementById('Button').disabled = true;
						document.getElementById('counts').innerHTML=0;
				        click=0;
						time=10;
						level=1;
						count=0;
						clearInterval(intId);
					}
					count=0;
				}
			}
		function start()
		{
			if(click==0){timer();}
			document.getElementById('counts').innerHTML=++click;
			document.getElementById('Level1').innerHTML=level+" To win click "+time+" times";
		}
		function end()
		{
			clearInterval(intId);
			document.getElementById('Button').disabled = false;
			document.getElementById('time1').innerHTML=0;
			document.getElementById('Level1').innerHTML=0;
			document.getElementById('counts').innerHTML=0;
			document.getElementById('congrats').innerHTML="Reset Successfull";
            click=0;
            window.setTimeout(reset,1);
			limit= prompt("Default time = 10 seconds.\nIncrement time for each level is +5 seconds.\n                              (or)\nPlease enter your convient time:", "");
			if (limit==null||limit=="") {limit =10 ;}
			level=1;
			itr=10;
			count=0;
			time=10;
            alert("Reset Successfull");
        }