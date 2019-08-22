
<?php
error_reporting(E_ERROR | E_PARSE);
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
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<link href="../../css/layout.css" rel="stylesheet">

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
        <li><a href="../../load.php">Dashboard <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#">Add Info</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo("Hi, ");echo $first_name;?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
            <li><a href="#">Edit Profile</a></li>
         
            <li role="separator" class="divider"></li>
            <li><a href="../../logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="container">
 <section id="main">
  <div class="row">
    <div class="col-md-6">
      <form class="form-horizontal" action=" " method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" >Branch</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="branch" placeholder="Enter Branch">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Registartion Number</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="regno" name="regno" >
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2">Phone Number</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="phone" name="phnno" >
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2">Age</label>
    <div class="col-sm-2"> 
      <input type="text" class="form-control" id="age" name="age" >
    </div>
  </div>

  <div class="form-group">
  <label class="control-label col-sm-2">Gender</label>
  <div class="col-sm-10">
  <label><input type="radio" name="gender" value="m">Male</label>

  <label><input type="radio" name="gender" value="f">Female</label>
</div>
</div>


<div class="form-group">
  <label class="control-label col-sm-2">Address</label>
  <div class="col-sm-10">
  <textarea class="form-control" rows="5" id="comment" name="address"></textarea>
  </div>
</div>


  <div class="form-group inline">
    <label class="control-label col-sm-2">B-Tech CGPA</label>
    <div class="col-sm-2"> 
      <input type="text" class="form-control" id="gpa" name="gpa" >
    </div>
  </div>


  <div class="form-group inline">
    <label class="control-label col-sm-2">10th percentage</label>
    <div class="col-sm-2"> 
      <input type="text" class="form-control" id="tenth" name="tenth" >
    </div>
  </div>


  <div class="form-group inline">
    <label class="control-label col-sm-2" for="pwd">12th Percentage</label>
    <div class="col-sm-2"> 
      <input type="text" class="form-control" id="tenth" name="twelvth" >
    </div>
  </div>

   <div class="form-group inline">
    <label class="control-label col-sm-2" for="pwd">Diploma</label>
    <div class="col-sm-2"> 
      <input type="text" class="form-control" id="dip" name="dip" >
    </div>
  </div>


  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Submit</button>
    </div>
  </div>
</form>
    </div>
  </div>
 </section>
</div>
</body>

<?php
include("include/dbconnect.php");
  if(isset($_POST['submit'])){
    $name=$first_name;
    $branch=$_POST['branch'];
    $regno=$_POST['regno'];
    $phnno=$_POST['phnno'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $gpa=$_POST['gpa'];
    $tenth=$_POST['tenth'];
    $twelveth=$_POST['twelvth'];
    $dip=$_POST['dip'];

    $sql = "INSERT INTO studentinfo (name, branch, regno, phone, email, age, gender ,address, gpa, 10th, 12th, diploma) VALUES ('$name', '$branch', '$regno', '$phnno', '$email', '$age', '$gender', '$address', '$gpa', '$tenth', '$twelveth', '$dip');";

    $result = mysqli_query($conn , $sql);
    if(!$result)
              {
                header("location:#");
                exit();
              }
 
      header("location:".$_SERVER['DOCUMENT_ROOT']."/knn/login/studenthome.php");

  }
?>