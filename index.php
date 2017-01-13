<html>
<head>
<link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
#div1{
	position:relative;
	height:20px;
	width:500px;
	left:5px;
	top:50px;
	
}
#display{
	position:relative;
	height:20px;
	width:500px;
	left:650px;
	top:90px;
	
	
	
}
</style>
</head>
<html>
<center>
<h1><code>Enter your google search here</code></h1></center>
<center>
<div id="div1">
<input type="text" onkeyup="gohere()" class="form-control"  id="text1" placeholder="enter the name"/>
</div>
</center>
<div style="position:relative;left:600px;top:80px;"><mark> your resulte here!</mark></div>
<div id="display">
</div>


<script src="srcfile.js">
</script>

<script>
function gohere(){
if((document.getElementById('text1').value.trim()).length!=0){
var aj=new XMLHttpRequest();
aj.onreadystatechange=function(){
	if(aj.readyState==4&&aj.status==200)
		document.getElementById('display').innerHTML=aj.responseText;
}
aj.open('GET','data.php?value='+document.getElementById('text1').value,true);
aj.send();
}
else
document.getElementById('display').innerHTML="";	
}
</script>






</html>


</html>