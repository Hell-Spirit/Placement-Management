<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>LogpOut</title>
  
  
  
      <link rel="stylesheet" href="css/style11.css">
<style>
.button {
    background-color: #222222; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 10px 2px;
    cursor: pointer;
    
}

.button-block {
    box-shadow: 0 8px 16px 0 rgba(255,255,0,0.3), 0 6px 20px 0 rgba(0,0,255,0.3);
}
</style>
  
</head>

<body>

  <div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>Thank you !</h1>
      <p>You have been logged out! </p>
      

	  <a href="index.php"><button class="button button-block"/>Home</button></a>
    </div>
   
</div>
</div>



<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
  
  

</body>

</html>
