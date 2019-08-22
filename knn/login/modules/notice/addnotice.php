
<?php
error_reporting(E_ALL);
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
<head>
	<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
</head>
<body>
      <form id="myForm" name="myForm" method="POST" action ="modules/notice/addnotices.php">
          <div class="form-group">
          <LABEL>Notice Title</LABEL>
          <input type="text" id="noticetitle" name="noticetitle" class="form-control" placeholder="title">
        </div>
        <div class="form-group">
          <LABEL>Notice Body</LABEL>
          <textarea id="noticebody" name="noticebody" class="form-control" placeholder="title"></textarea>
        </div>
        <label>Branch</label><br>
        <div id="demo">
        <label>  </label>
        <label class="checkbox-inline"><input id="branch" name="branch[]" type="checkbox" value="etc">ETC</label>
        <label class="checkbox-inline"><input id="branch" name="branch[]" type="checkbox" value="cse">CSE</label>
        <label class="checkbox-inline"><input id="branch" name="branch[]" type="checkbox" value="me">ME</label> 
        <label class="checkbox-inline"><input id="branch" name="branch[]" type="checkbox" value="ei">E&I</label>
        <label class="checkbox-inline"><input id="branch" name="branch[]" type="checkbox" value="ce">CE</label></div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-glyph" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
            <button type="submit" name="submit" class="btn btn-primary btn-glyph"><span class="glyphicon glyphicon-ok"></span></button>
          </div>
      </div>
    </form>
   </body>
<!--php form val-->

<script>
  CKEDITOR.replace( 'noticebody' );
</script>
