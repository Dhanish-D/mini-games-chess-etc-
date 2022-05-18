var myscore_score=0;
var computerscore_score=0;
function stone()
{
	let x = Math.floor((Math.random() * 3) + 1);
	console.log(x);
	if(x==1)
	{
        document.getElementById('computer').innerHTML="Stone";
	}
	if(x==2)
	{
		 document.getElementById('computer').innerHTML="Paper";
		 document.getElementById('computerscore').innerHTML=++computerscore_score;
	}
	if(x==3)
	{
		 document.getElementById('computer').innerHTML="Sizzer";
		 document.getElementById('myscore').innerHTML=++myscore_score;
	}
}
function paper()
{
   let x = Math.floor((Math.random() * 3) + 1);
	console.log(x);
	if(x==1)
	{
        document.getElementById('computer').innerHTML="Paper";
	}
	if(x==2)
	{
		 document.getElementById('computer').innerHTML="Stone";
		 document.getElementById('myscore').innerHTML=++myscore_score;
	}
	if(x==3)
	{
		 document.getElementById('computer').innerHTML="Sizzer";
		 document.getElementById('computerscore').innerHTML=++computerscore_score;
	}
}
function sizzer()
{
   let x = Math.floor((Math.random() * 3) + 1);
	console.log(x);
	if(x==1)
	{
        document.getElementById('computer').innerHTML="Sizzer";
	}
	if(x==2)
	{
		 document.getElementById('computer').innerHTML="Stone";
		 document.getElementById('computerscore').innerHTML=++computerscore_score;
	}
	if(x==3)
	{
		 document.getElementById('computer').innerHTML="Paper";
		 document.getElementById('myscore').innerHTML=++myscore_score;
	}
}