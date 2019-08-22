<?php
session_start();
include 'include/dbconnect.php';
	$email=$_SESSION['email'];
	$sql="SELECT user FROM users WHERE email='$email'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	if($row['user']=='0')
	{
		header("location:addinfo.php");
		die();
	}
	else{
		switch($row['user']){
			case "admin":
			header("location:adminhome.php");
			die();
			break;
			case "hr":
			header("location:hrhome.php");
			die();
			break;
			case "student":
			header("location:studenthome.php");
			die();
			break;
			default:
			header("location:contactadmin.php");
			die();
			break;
		}
	}
?>