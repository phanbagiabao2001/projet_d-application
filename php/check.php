<?php
session_start();
require 'config.php';
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
} 
if (isset($_SESSION['admin'])) {
    $username =  $_SESSION['admin'];
    } 
   
$sql_user ="SELECT user_id FROM users where username = '$username'" ;
$result = mysqli_query($conn,$sql_user);
$result = $conn->query($sql_user);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID USER: " .$row["user_id"];
}
} else {
  echo "0 results";
}
$conn->close();

?>