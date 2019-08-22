<?php
error_reporting(E_ERROR | E_PARSE);
include("include/dbconnect.php");
	$regid=$_POST['search'];
	$sql="SELECT * FROM studentinfo WHERE regno='$regid'";
	$result = mysqli_query($conn,$sql);
	$resultcheck = mysqli_num_rows($result);
			if($resultcheck<1)
			{
				echo("no students found");
				exit();
			}
			else{
				if($row = mysqli_fetch_assoc($result)){
					    $name=$row['name'];
    					$branch=$row['branch'];
    					$regno=$row['regno'];
    					$phnno=$row['phone'];
    					$email=$row['email'];
    					$age=$row['Age'];
    					$gender=$row['gender'];
    					$address=$row['address'];
    					$gpa=$row['gpa'];
    					$tenth=$row['10th'];
    					$twelveth=$row['12th'];
    					$dip=$row['diploma'];
				}
			}
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
	body{padding-top:30px;}

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            <?php echo $name;?></h4>
                        <small><?php echo $branch;?></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $email;?>
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
