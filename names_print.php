<?php
  $servername = "localhost";
  $username = "root";
  $password = "sanyosamsung22mysqldatabasecom";
  $dbname = "phone_book";

  $conn = new mysqli($servername, $username, $password, $dbname);

  $sql_datas = "SELECT user_name, user_id FROM users ORDER BY user_name";
  
  $result = $conn->query($sql_datas);
  $datas = '';

  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

  $datas .= '<p class = "display_name" u_id = "'.$row["user_id"].'"> '. $row["user_name"]. '</p>';

  }
} else {
  echo "0 results";
}
echo $datas;
?>