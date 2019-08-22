<?php
include 'include/dbconnect.php';
	date_default_timezone_set("America/New_York");
	if(isset($_POST['submit'])){
		$title=mysqli_real_escape_string($conn,$_POST['noticetitle']);
		$body=mysqli_real_escape_string($conn,$_POST['noticebody']);

		$branch=implode(",",$_POST['branch']);
		$dtime=date("Y-m-d H:i:s");

		if(empty($title)||empty($body)||empty($branch)){
			echo("<div class='alert alert-danger'>
  					<strong>Insufficient Information</strong> Flease fill up all the fields
				</div>");
			die();
		}

		$nquery="INSERT INTO notices (branch,subject,body,dtime) VALUES ('$branch','$title','$body,'$dtime');";
		$result = mysqli_query($conn , $nquery);
		if(!$result)
		{			
			echo("<div class='alert alert-danger'><strong>Unknown Error </strong> Please try Again Later, or contact the admin if the problem persists.</div>");
			exit();
		}
			header("loaction:http://".$_SERVER['HTTP_HOST']."/knn/login/load.php");
			echo("<div class='alert alert-success'><strong>Posted</strong> Notice Posted, A notice is subjected to audits</div>");
	}
?>