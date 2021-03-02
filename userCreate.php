<html>
<head>
<style>
.up
{
position:relative;
left:330;
top:30;
background-color:#FF004C;
width:48%;
text-align:center;
font-size:250%;
border-radius:50%;
font-weight:bold;
color:white;
font-style:italic;
height:90%;
}
.body
{
position:fixed;
left:436;
top:120;
background-color:#00ffff;
width:33%;
height:63%;
}
.body:hover
{
background-color:yellow;
width:80%;
height:70%;
left:100;
}
.input:focus
{
background-color:white;
border-bottom-style:5px solid red;
width:40%;
left:50%
}
.input
{
border:none;width:30%;height:10%;position:fixed;font-size:140%;background-color:white;
}
.button:hover
{
background-color:white;
color:blue;
border:4px solid blue;
}
.button
{
position:fixed;background-color:blue;border-radius:50px;width:20%;left:38%;top:420;cursor:pointer;color:white;font-weight:bold;font-size:290%;
}
</style>
</head>
<p class="up"><u>Sign Up</u></p>
<form class="body" action="SignUp.php" method="post">
	<input class="input" type="text" name="name" placeholder="Enter your name" style="left:33%;top:140;" REQUIRED/><br>
	<input class="input" type="text" name="username" placeholder="username"  style="left:33%;top:210;" REQUIRED/><br>
	<input class="input" type="password" name="password" placeholder="password" style="left:33%;top:280;" REQUIRED/><br>
	<input class="input" type="email" name="email" placeholder="mail ID" style="left:33%;top:350;" required/><br>
	<button class="button">Submit</button>
</form>
</html>
