<?php
$user=$_POST['user'];
$conn=new mysqli("localhost","root","","E3S2_Project_DB");
if($conn->connect_error){
	die("connection failed".$conn->connect_error);}
$sql="select * from files where username='$user'";
$result=mysqli_query($conn,$sql);?>
<input type="text" name="user" style="border:none;" value=<?php echo $user;?> readonly><br><br><br>
<?php
while($row=$result->fetch_assoc())
{
	?><fieldset style="width:50%;border-color:blue;">
		<form method="post" action="View.php">
			<input type="text" name="location" value="<?php echo $row['location']; ?>" style="border:none;color:red;">
			<button style="border:none;"><u><?php echo $row['name'];?></u></button>
		</form>
		<form method="post" action="demo.php">
			<input type="text" name="location" value="<?php echo $row['location']; ?>" style="border:none;color:white;">
			
			<button style="border:none;">Decrypt</button></form>
	</fieldset>
<?php
	echo "<br>";	
}
?>
