<?php
$location=$_POST['location'];
$conn=new mysqli("localhost","root","","E3S2_Project_DB");
if($conn->connect_error){
	die("connection failed".$conn->connect_error);}
$myfile=fopen($location,"r") or die("Unable to open file!");
while(!feof($myfile))
	echo fgets($myfile);
?>
