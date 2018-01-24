<?php
	session_start();
	$id = $_REQUEST['username'];
	$pswd = $_REQUEST['pswd'];
	$con = mysqli_connect('localhost','root','','phpdata',3306) or die("Server can't connect try again");
	mysqli_select_db($con,'phpdata') or die("Database not found!!");
	$s = "select * from login where id='$id' and pswd='$pswd'";
	$result = mysqli_query($con,$s) or die(mysqli_error($con));
	if($row = mysqli_fetch_assoc($result))
	{
		$_SESSION['ss_acess'] = "Y";
		$_SESSION['ss_details'] = $row ;
		echo "<script>window.location='upload.php';</script>";
	}
	else
	{
		$_SESSION['ss_acess'] = "N" ;
		echo "<script>window.location='index.php';</script>";
	}
?>