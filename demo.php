<html>
<head>
<style>
.b
{
position:fixed;
width:30%;
height:30%;
top:100;
left:250;
background-color:red;
}
.button
{
position:fixed;left:390;top:230;border:none;width:10%;height:7%;border-radius:50%;font-weight:bold;color:green;background-color:white;
}
.button:hover
{
cursor:pointer;
border-color:green;
background-color:cyan;
}
</style>
</head>
<body>
<?php $loc=$_POST['location']; ?>
<form class="b" action="Decrypt.php" method="post">
	<input type="text" name="location" value="<?php echo $loc; ?>" style="border:none;color:white;top:20;left:0;width:100%;height:10%;position:fixed;"/>
	<label style="position:fixed;left:350;top:130;border:none;width:20%;height:7%;font-size:20px;"><b>Enter Initial vector</b></label>
	<input type="text" name="vec" placeholder="Initial Vector" REQUIRED style="position:fixed;left:320;top:170;border:none;width:20%;height:7%;"/><br>
	<button class="button">Submit</button>
</form>
</body>
</html>
