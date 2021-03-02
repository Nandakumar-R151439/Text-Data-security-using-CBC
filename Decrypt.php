<?php
$location=$_POST['location'];
$vector=$_POST['vec'];
$conn=new mysqli("localhost","root","","E3S2_Project_DB");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);

$sql="select Iv FROM files where location='$location'";
$result=mysqli_query($conn,$sql);
$abc=0;
while($row=$result->fetch_assoc())
{
	$a=$row['Iv'];
	if($a==$vector)
	{
		$abc++;
	}
}
if($abc<>1)
{
	header("location:demo.php");
}

$myfile=fopen($location,"r") or die("Unable to open a file");
$b="";
while(!feof($myfile))
	$b.=fgets($myfile);
$sql="select * from files where location='$location'";
$result=mysqli_query($conn,$sql);
$def="";
$j=0;
for($i=0;$i<strlen($b);$i++)
{
	if($j==strlen($vector))
		$j=0;
	if(($i+3)<strlen($b))
	{
		if($b[$i]=='e' && $b[($i+1)]=='s' && $b[($i+2)]=='c')
			{
			$a=((ord($b[($i+3)])-32)^ord($vector[$j++]));       //xor operation
			$a-=32;
			$def.=chr($a);
			$i+=3;
			}
		else
			{
			$a=(ord($b[$i])^ord($vector[$j++]));
			$def.=chr($a);
			}
	}
	else
		{
		$a=(ord($b[$i])^ord($vector[$j++]));
		$def.=chr($a);
		}
}
echo $def;
?>
