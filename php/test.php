<?php 

session_start();
require_once 'config.php';

$sql = "SELECT users.username,users.email FROM users join posts on users.user_id = posts.id_user  WHERE posts.id_user  ";
$result = mysqli_query($conn,$sql);

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "username: " . $row["username"]. " - email: " . $row["email"];
}
} else {
  echo "0 results";
}
$conn->close();

?>
