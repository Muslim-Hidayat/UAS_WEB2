<?php
include('koneksi.php');
$username=$_POST['username'];
$password=$_POST['password'];

if(!empty($username)&&!empty($password))
{
	$sql=mysqli_query($covid19, "SELECT*FROM login");
	$sql2=mysqli_num_rows($sql);
	
	if($sql2)
	{
		header('location: data.php');
	}
	else
	{
		header('location: data.php');
	}
}
?>

