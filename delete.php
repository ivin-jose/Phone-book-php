<?php
$servername = "localhost";
$username = "root";
$password = "sanyosamsung22mysqldatabasecom";
$dbname = "phone_book";

$conn = new mysqli($servername, $username, $password, $dbname);


  // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$user_id = $_REQUEST['user_id'];

$sql_deleting = "DELETE FROM users WHERE user_id = '".$user_id."'";

$result = $conn->query($sql_deleting);

date_default_timezone_set('Asia/Kolkata');
$time = date('h:i A');

$notification = '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
<div class="toast-header">
<i class="fa-solid fa-trash disable_btn toast-logo"></i> 
<strong class="me-auto toast-delete"> User Deleted</strong>
<small>'.$time.'</small>
<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
</div>
<div class="toast-body">
<b>"'.$_REQUEST['user_name'].'"</b> Deleted!
</div>
</div>';

if ($result == TRUE) {
  echo $notification;
} else {
  echo "Error: " . $sql_saving . "<br>error" . $conn->error;
}
$conn->close();        
?>  