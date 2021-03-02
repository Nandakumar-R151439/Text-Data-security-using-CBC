<html>
<head>
<style>
.vector
{
border-bottom-style:25px solid black;
border-top-style:none;
border-left-style:none;
border-right-style:none;
border-color:pink;
width:100%;
height:10%;
}
.logout
{
border-radius:30px;
border:none;
background-color:lime;
position:fixed;
width:8%;
height:8%;
left:1200;
font-weight:bold;
color:white;
font-size:120%;
}
.img
{
position:fixed;
top:20%;
width:32%;
height:65%;
border-radius:50%;
}
.logout:hover
{
background-color:white;
border-color:lime;
text-decoration:underline;
cursor:pointer;
color:lime;
}
.p
{
position:fixed;
width:100%;
height:13%;
left:0;
top:0;
background-color:cyan;
}
.p2
{
position:fixed;
width:25%;
height:50%;
border-color:black;
border:dotted;
left:500;
top:140;
background-color:cyan;
}
.p1
{
position:fixed;
width:100%;
height:100%;
left:0;
top:70;
background-color:#ff0066;
}
</style>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$conn=new mysqli("localhost","root","","E3S2_Project_DB");
if($conn->connect_error){
	die("connection failed.".$conn->connect_error);}


$sql="select *FROM details";
$result=mysqli_query($conn,$sql);
$abc=0;
while($row=$result->fetch_assoc())
{
	$a=$row['username'];
	$b=$row['password'];
	if($a==$username && $b==$password)
	{
		$abc++;
	}
}
if($abc<>1)
{
	header("location:login.php");
}
?>
<body>
<p class="p">
	<form action="login.php">
		<button id="l" class="logout">Logout</button>
	</form>

	<form action="Directory.php" method="post">
	<input type="text"  name="user" style="border:none;color:white;" value=<?php echo $username; ?> readonly>
	<button class="logout" style="left:200;border:none;">Directory</button>
	</form></p>
	<p class="p1">
        <form class="p2" action="filePractice.php" method="post" enctype="multipart/form-data" >
		<!--<input type="text" placeholder="Intial vector" name="vector"><br> -->
		<input name="user" value="<?php echo $username;?>" readonly style="border:none;width:100%;color:black;text-align:center;font-weight:bold;">
          <h3>Upload File</h3>
	<input class="vector" type="text" placeholder="Intial vector" name="vector"/><br><br>
          <input type="file" name="myfile"> <br>
          <button class="logout" style="left:600;top:320;" type="submit" name="save">upload</button>
        </form></p>
	<img src="Online-File-Storage.jpg" class="img" style="left:2%;">
	<img src="index2.jpeg" class="img" style="right:2%;">
  </body>
</html>
