<!DOCTYPE html>
<head>

<meta charset="utf-8">

<link rel="stylesheet type="text/css" href="signin.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet'>
<link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fieldset
{
border-color:green;position:fixed;left:35%;top:30%;background-color:white;border-radius:50%;
}
.img
{
position:fixed;
top:15%;
left:3%;
border-radius:50%;
width:10%;
height:20%;
}
.a
{
font-weight:bold;
color:green;
}
.button
{
background-color:blue;
font-size:30px;;
font-weight:bold;
width:100px;
border-radius:50%;
color:white;
height:70px;
}
.button:hover
{
border-color:blue;
background-color:white;
color:blue;
cursor:pointer;
}
.input
{
border-bottom-style:10px solid black;
width:377px;
border-top-style:none;
border-left-style:none;
border-right-style:none;
}
.input:focus
{
border-color:red;
}
</style>
</head>
<body style="background-image:url(win27.jpg);">
<h1 style="text-align:center;color:white;">Secure your text DATA</h1>
<img src="images.jpeg" class="img">
<img src="index.jpeg" class="img" style="top:42%;">
<img src="images1.jpeg" class="img" style="top:70%;">
<img src="Ashisoft-1-1.jpg" class="img" style="top:15%;left:85%;">
<img src="index1.jpeg" class="img" style="top:42%;left:85%;">
<img src="300-512.png" class="img" style="top:70%;left:85%;">

<?php
$conn=new mysqli("localhost","root","","E3S2_Project_DB");
if($conn->connect_error){
	die("connection failed.".$conn->connect_error);}
?>

<form action="filesLogic.php" method="post">
<center>
<br><br>
<fieldset class="fieldset"><h3 style="color:green;font-size:30px;"><u>Login</u></h3><br><br><br>

<input type="text" class="input" name="username" placeholder="Enter username" autocomplete="off" required><br><br>
<input type="password" class="input" name="password" placeholder="Enter password" autocomplete="off" required><br><br><br>

<button class="button" name="Login">Login</button><br><br><br>
<?php
if(isset($_POST['Login']))
{
	$username=$_POST['username'];
	$password=$_POST['password']; 
	$sql="select * from details where username='$username' and password='$password'";
	$result=mysqli_query($conn,$sql);
	$result1=mysqli_num_rows($result);
	if($result1==1)
	{
		
		?>
		<form style="position:fixed;top:0;left:0;"action="filesLogic.php" method="post">
				<input type="text" name="user" value="<?php echo $_POST['username']; ?>" >
		</form><?php
		header("location:filesLogic.php");
	}
	else
	{echo "<h3 style='color:WHITE;'><center>Invalid username or password</center></h3>";
	header("loaction:login.php");}

}
?>
</form>
<a class="a" href="userCreate.php">Sign Up</a><br><br><br>
</fieldset>

</center>
</body>
</html>



