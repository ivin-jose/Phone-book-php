<?php
$servername = "localhost";
$username = "root";
$password = "sanyosamsung22mysqldatabasecom";
$dbname = "phone_book";

$conn = new mysqli($servername, $username, $password, $dbname);

$user_id = $_REQUEST['user_id'];

$sql_datas = "SELECT *  FROM users WHERE user_id = '".$user_id."'";

$result = $conn->query($sql_datas);
$datas = '';

if (isset($result->num_rows) && $result->num_rows >0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {

		$datas .= '<div id="update_form" class="boxshadow">
		<h3>Update</h3>
		<label id="name_label" class="label"></label>
		<input type="text" value="'.$row["user_name"].'" id="update_name" class="form-control input-box" placeholder="Name" required>
		<label id="home_label" class="label"></label>
		<input type="text" value="'.$row["user_home"].'" id="update_home" class="form-control input-box" placeholder="Home town" required>
		<label id="phone_label" class="label"></label>
		<input type="text" value="'.$row["user_phone"].'" id="update_phone" class="form-control input-box" placeholder="Phone" required>
		<label id="email_label" class="label"></label>
		<input type="email" value="'.$row["user_email"].'" id="update_email" class="form-control input-box" placeholder="Email" required>
		<input type="submit" name="" value="Update" class="button form-button btn-outline-primary home-btn" id="update_btn">
		</div>';

	}
} else {
	echo $user_id;
}
echo $datas;
?>

