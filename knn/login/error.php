<?php
/* Displays all error messages */
session_start();
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Error</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  
      <link rel="stylesheet" href="css/style1.css">

  
</head>

<body>
<div class="form">
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button class="button button-block"/>Home</button></a>
</div>
  
  
  

</body>

</html>
