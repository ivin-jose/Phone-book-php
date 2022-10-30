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

   $sql_saving =   "INSERT INTO `users` (`user_name`, `user_home`, `user_phone`, `user_email`) VALUES ('". $_REQUEST['name']."', '". $_REQUEST['home']."', '". $_REQUEST['phone']."', '" .$_REQUEST['email']."')";

    $result = $conn->query($sql_saving);

    date_default_timezone_set('Asia/Kolkata');
    $time = date('h:i A');

  $notification = '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
  <i class="fa-solid fa-user-plus disable_btn toast-logo"></i> 
  <strong class="me-auto toast-add"> User Added</strong>
  <small>'.$time.'</small>
  <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
  New user <b>"'.$_REQUEST['name'].'"</b> added!
  </div>
  </div>';   

  if ($result == TRUE) {
      echo $notification;
    } else {
      echo "Error: " . $sql_saving . "<br>error" . $conn->error;
    }
    $conn->close();        
?>  