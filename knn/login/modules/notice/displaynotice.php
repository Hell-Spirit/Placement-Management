<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
</head>
<?php
	error_reporting(E_ERROR);
	$root=$_SERVER['HTTP_HOST'];
	include_once("include/dbconnect.php");
	session_start();
	if(isset($_SESSION['uniqueID'])){
		$uid=$_SESSION['uniqueID'];
		$sql="SELECT * FROM db_users WHERE uniqueID='$uid'";
		$res=mysqli_query($conn,$sql);
		$check=mysqli_fetch_assoc($res);
		if($check['user']!=="admin"&&$check['user']!=="student"&&$check['user']!=="staff"&&$check['user']!=="guardn"){
			header("location:http://".$root."/syncon/load.php");
			die(); 
		}
		$nsql="SELECT * FROM db_notices ORDER BY nid DESC LIMIT 1";
		$result=mysqli_query($conn,$nsql);
		echo "<ul class = 'list-group'>";
		if($result->num_rows > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<li class='list-group-item nlgi' id='nlgi'><strong>".$row['type']." :</strong> <span class='ntdisp' id='ntdisp'>".$row['sub']."</span></li>";
		}}
		else{
			echo "<li class='list-group-item nlgi'>0 Results</li>";
		}
		echo "</ul>";
	}

?>

<script>
var string=document.getElementById('nlgi').InnerHTML();
var length = 7;
var trimmedString = string.substring(0, length);
document.getElementById( 'nlgi' ).text(trimmedString);

</script>

