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



$sql_updating = "UPDATE `users` SET `user_name` = '".$_REQUEST['name']."', `user_home` = '".$_REQUEST['home']."', `user_phone` = '".$_REQUEST['phone']."', `user_email` = '".$_REQUEST['email']."' WHERE (`user_id` = '".$user_id."')";



$result = $conn->query($sql_updating);

date_default_timezone_set('Asia/Kolkata');
$time = date('h:i A');

$notification = '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
<div class="toast-header">
<i class="fa-regular fa-pen-to-square disable_btn"></i> 
<strong class="me-auto toast-add"> User updated</strong>
<small>'.$time.'</small>
<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
</div>
<div class="toast-body">
User <b>"'.$_REQUEST['name'].'" </b> updated 
</div>
</div>';



if ($result === TRUE) {
 echo $notification;
} else {
  echo "Error: " . $sql_saving . "<br>" . $conn->error;
}
$conn->close();

?>
