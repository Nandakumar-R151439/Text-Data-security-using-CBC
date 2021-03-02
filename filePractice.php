 <?php
$vector=$_POST['vector'];
$user=$_POST['user'];
// connect to the database
?>
<html>
<head>
<style>
.b
{
position:fixed;top:10;right:50;width:80px;
height:50px;border-radius:50%;font-weight:bold;
background-color:yellow;cursor:pointer;
}
.b:hover
{
background-color:white;
border:2px solid yellow;
}
.body
{
position:fixed;
top:60;
left:290;
width:50%;
height:80%;
border-radius:50%;
background-color:yellow;
}
</style>
</head>
	<form action="login.php">
		<button class="b">Logout</button>
	</form>
	<p class="body">
</html>
<?php
$conn=new mysqli("localhost","root","","E3S2_Project_DB");
if($conn->connect_error){
	die("connection failed.".$conn->connect_error);}

if (isset($_POST['save']))
{ 
    $filename = $_FILES['myfile']['name'];
    $destination = '/opt/lampp/htdocs' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

		// Uploads files


   if ($_FILES['myfile']['size'] > 1000000) 
	{ 
		// file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } 
   else 
	{
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) 
	{

		$myfile = fopen($destination, "r") or die("Unable to open file!");
		$abc="";
		while(!feof($myfile)) {
		$abc.=fgets($myfile)."<br>";
	}
	$bcd="";
	$bcd.=$vector;
	$cde="";
	$j=0;
	for($i=0;$i<strlen($abc);$i++)
	{
		if($j==strlen($vector))
			$j=0;
		$a=(ord($abc[$i])^ord($bcd[$j++]));
		if($a<32)
		{
			$a+=32;
			$cde.="esc";
			$cde.=chr($a);
			$bcd.=chr($a);
		}
		else
		{
			$cde.=chr($a);
			$bcd.=chr($a);
		}
	}
	$def="";
	$j=0;
	for($i=0;$i<strlen($cde);$i++)
	{
		if($j==strlen($vector))
			$j=0;
		if(($i+3)<strlen($cde))
		{
			if($cde[$i]=='e' && $cde[($i+1)]=='s' && $cde[($i+2)]=='c')
			{
				$a=((ord($cde[($i+3)])-32)^ord($bcd[$j++]));
			//$a-=32;
				$def.=chr($a);
				$i+=3;
			}
			else
			{
				$a=(ord($cde[$i])^ord($bcd[$j++]));
				$def.=chr($a);
			}
		}
		else
		{
			$a=(ord($cde[$i])^ord($bcd[$j++]));
			$def.=chr($a);
		}
	}
fclose($myfile);





            $sql = "INSERT INTO files (name,size,location,username,Iv) VALUES ('$filename', '$size','$destination','$user','$vector')";
            mysqli_query($conn,$sql);
	?><img src="Tup.jpeg" style="border-radius:50%;width:150px;height:150px;position:fixed;top:180;left:550;"><h2 style="position:fixed;top:330;left:450;">Successfully uploaded !!!</h2><?php
		
        }
	else 
	{
            ?><img src="so-sad-emoji.png" style="border-radius:50%;width:150px;height:150px;position:fixed;top:180;left:550;"><h2 style="position:fixed;top:330;left:450;"><?php echo "Failed to upload file."; ?></h2><?
        }
    }
//echo $filename."<br>".$size."<br>".$destination;
}



$myfile1 = fopen($destination, "w") or die("Unable to open file!");
fwrite($myfile1,$cde);
fclose($myfile1);
	//$bcd.=chr((ord($abc[$i]))^11);*/







?> 
