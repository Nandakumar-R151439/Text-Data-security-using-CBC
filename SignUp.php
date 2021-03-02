<?php
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$conn=new mysqli("localhost","root","","E3S2_Project_DB");
if($conn->connect_error)
	die("Connection failed".connect_error);
$sql="Insert into details(username,password,name,mail)values('$username','$password','$name','$email')";
mysqli_query($conn,$sql);
echo "details submitted.";
?>
