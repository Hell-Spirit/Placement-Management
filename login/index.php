<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login/Signup Form With Slider</title>
  <link rel='stylesheet prefetch' href='http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>

      <link rel="stylesheet" href="css/style.css">
<style>
#header .header-content {
	margin: 0 auto;
	max-width: 1170px;
	padding: 30px 0;
	width: 100%;
	-moz-transition: padding 0.3s;
	-o-transition: padding 0.3s;
	-webkit-transition: padding 0.3s;
	transition: padding 0.3s;
	
}
#header .logo {
	float: left;
	
    
	
	
}
.navigation {
	float: right;
}
.navigation li {
	display: inline-block;
}
.navigation a {
	color: rgba(255, 255, 255, 0.75);
	font-size: 12px;
	font-weight: 400;
	margin-left: 40px;
	letter-spacing: 3px;
	text-transform: uppercase;
	
	
}
.navigation a:hover, .navigation a.active {
	color: #fade3d;
	text-decoration: underline ;
}

</style>

	  
</head>
<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?> 
<body>
<section class="banner" role="banner">
  <header id="header"> 
    <!-- navigation section  -->
    <div class="header-content clearfix"> <a class="logo" href="../index.html"><img src="../images/logo.png" alt="Sync" style="5px"></a>
      <nav class="navigation" role="navigation">
        <ul class="primary-nav">
           <li><a href="#">SignUP/Login</a></li>
          <li><a href="../contact.html">Contact</a></li>
		  <li><a href="../about.html">About Us</a></li>
        </ul>
      </nav>
      </div>
    <!-- navigation section  --> 
  </header>
</section>
  <div class="main-box">
  <div class="slider-cont">
    <div class="signup-slider">
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>The hardest part of starting up is starting out for you.</h1>
        <img class="img" src="https://static.pexels.com/photos/33972/pexels-photo.jpg"/>
      </div>
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>We understand you and We have the right solutions for you.</h1>
        <img class="img" src="https://static.pexels.com/photos/257897/pexels-photo-257897.jpeg"/>
      </div>
      <div class="img-txt">
        <div class="img-layer"></div>
        <h1>Join US Now!</h1>
        <img class="img" src="https://static.pexels.com/photos/317383/pexels-photo-317383.jpeg"/>
      </div>
    </div>
  </div>
  <div class="form-cont">

    <div class="top-buttons">
	<button class="to-signup top-active-button">
        Sign Up
      </button>
	<button class="to-signin ">
        Sign In
      </button>
      
    </div>
	

	<div class="form form-signin">
      <form action="index.php" method="post" autocomplete="off">
        <lable>E-MAIL</lable>
        <input type="email" 
               placeholder="Your e-mail"
			   name="email">
        <lable>PASSWORD</lable>
        <input type="password" 
               placeholder="Your password"
			   name="password">
        <input type="submit"
               class="form-btn"
               value="Sign In"
			   name="login"/>
		<a class="forgot"a href="forgot.php">Forgot Password ?</a>
      </form>
    </div>
	
	
	
	<div class="form form-signup">
      <form action="register.php" method="post" autocomplete="off">
        <lable>FULL NMAE</lable>
        <input type="text" 
               placeholder="Your full name"
			   name="firstname">
        <lable>E-MAIL</lable>
        <input type="email" 
               placeholder="Your e-mail"
			   name="email">
        <lable>PASSWORD</lable>
        <input type="password" 
               placeholder="Your password"
			   name="password">
      
        <input type="submit"
               class="form-btn"
               value="Sign Up"
			   name="register"/>
        <a href="#" class="lined-link to-signin-link">I'm already member</a>
      </form>
    </div>
	
	 </div>
  <div class="clear-fix"></div>
</div>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>