<?php

/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<link href="css/layout.css" rel="stylesheet">

<!--Jquery Build-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>Sync</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Statistics</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th" aria-hidden="true"></span>  <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">View all Notices</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Submit Application</a></li>
            <li><a href="#">Request Admit Card</a></li>
            <li><a href="#">Submit Complaint</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Project Work Details</a></li>
            <li><a href="#">Submit Abstract</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="modules/studentmod.php"><strong>All Modules</strong></a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo("Hi, ");echo $first_name;?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li><a href="#">Edit Profile</a></li>
          
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card hovercard">
                        <div class="cardheader">

                        </div>
                        <div class="avatar">
                            <img alt="" src="http://lorempixel.com/100/100/people/9/">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a target="_blank" href="#"><?php echo $first_name." ".$last_name;?></a>
                            </div>
                            <div class="desc"></div>
                        </div>
                        <div class="bottom">
                            <a class="btn btn-primary btn-twitter btn-sm" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="btn btn-danger btn-sm" rel="publisher"
                               href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a class="btn btn-primary btn-sm" rel="publisher"
                               href="https://www.facebook.com/rocky.dinesh.14">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </div>
                    </div>
                    <div class="list-group">
                      <a href="#" class="list-group-item lgi">
                        Notifications<span class="badge">42</span>
                      </a>
                      <a href="#" class="list-group-item lgi">Messages<span class="badge">42</span></a>
                      <a href="#" class="list-group-item lgi">Alerts<span class="badge">42</span></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Notice Board</h3>
                      </div>
                      <div class="panel-body" id="notice-panel">
                        <?php include("modules/notice/displaynotice.php");?>
                        <a href"button" class="btn">
                          View all Notices >>
                        </a>
                      </div>
                    </div>
            </div>
        </div>
    </section>
</header>
</body>
</html>
