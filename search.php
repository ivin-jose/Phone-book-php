<?php
  $servername = "localhost";
  $username = "root";
  $password = "sanyosamsung22mysqldatabasecom";
  $dbname = "phone_book";

  $conn = new mysqli($servername, $username, $password, $dbname);

  $search = $_REQUEST['search'];
  $wild_card = ('%' . $search . '%');
  
  $sql_search = "SELECT user_name, user_id FROM users WHERE user_name LIKE  '".$wild_card."' ORDER BY user_name";
  
  $result = $conn->query($sql_search);
  $datas = '';

  if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

  $datas .= '<div id="names-div">
              <div><i class="fa-regular fa-user"></i></div>
              <div><p class = "display_name" u_id = "'.$row["user_id"].'"> '.$row["user_name"].' </p></div>
            </div>';

  }
} else {
  echo '"'.$search.'" not found!';
}
echo $datas;

$conn->close();
?>