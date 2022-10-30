<?php
$servername = "localhost";
$username = "root";
$password = "sanyosamsung22mysqldatabasecom";
$dbname = "phone_book";

$conn = new mysqli($servername, $username, $password, $dbname);

$user_id = $_REQUEST['user_id'];

$sql_datas = "SELECT *  FROM users WHERE user_id = '".$user_id."' ORDER BY user_name";

$result = $conn->query($sql_datas);
$datas = '';

if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {

		$datas .= '<div id="user-details-div" class="boxshadow">
		<div id="user-details-heading-div">
		<div id="user-details-logo-div">
		<i id="open-book-logo" class="fa-solid fa-book-open-reader"></i>
		<h2>'.$row["user_name"].'</h2>
		</div>
		<div id="user-details-display-div">
		<b>Home:</b> '.$row["user_home"].'<br>
		<b>Phone:</b> '.$row["user_phone"].'<br>
		<b>email:</b> '.$row["user_email"].'
		</div>
		</div>	
		<div id="user-details-image-div">
		<img id="user-details-image" src="./assets/images/orange.png">
		</div>		
		</div>';

	}
} else {
	echo "0 results";
}
echo $datas;
?>

