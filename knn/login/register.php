<?php
/* Registration process, inserts user info into the database 
   and sends account confirmation email message
 */
include("db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

		
require 'mailer/src/Exception.php';
require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';

// Set session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];


// Escape all $_POST variables to protect against SQL injections
$first_name = mysqli_real_escape_string($mysqli,$_POST['firstname']);
$email = mysqli_real_escape_string($mysqli,$_POST['email']);
$password = mysqli_real_escape_string($mysqli,$_POST['password']);
$hash = md5( rand(0,1000));
$password=password_hash($password, PASSWORD_BCRYPT);   
	  
	   
// Check if user with that email already exists
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (first_name,email, password, hash) " 
            . "VALUES ('$first_name','$email','$password', '$hash')";

    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( synergy placement )';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/knn/login/verify.php?email='.$email.'&hash='.$hash; 


		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->SMTPOptions = array(
		'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
		));
		
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "tls";
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = 587;             
		$mail->AddAddress($to);
		$mail->Username="dotcreation337@gmail.com";  
		$mail->Password="honey@333";            
		$mail->SetFrom('dotcreation337@gmail.com','Dinesh Kumar Behera');
		$mail->AddReplyTo("dotcreation337@gmail.com","Dinesh Kumar Behera");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message_body);
		$mail->Send();
		header("location:http://".$_SERVER['HTTP_HOST']."/knn/login/profile1.php"); 	
    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}