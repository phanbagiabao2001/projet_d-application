<?php
session_start();
if (!isset($_SESSION['admin'])) {
    // echo '<script language="javascript">alert("Vous nêtes pas autorisé à supprimer ce post");</script>';
    // $_SESSION['$username'];

    // TH1 : id user dung
    //     => chac chan xoa dc
    // TH2: id user sai
    //     => phai dang nhap admin de xoa bai
    require 'php/config.php';
    
    $id_post =$_GET['id'];
    $sql_post ="SELECT id_user FROM posts where id = $id_post" ;
    $result = mysqli_query($conn,$sql_post);
    $result = $conn->query($sql_post);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $id1 = $row['id_user'];
    }
    }


    $username = $_SESSION['user'];
    $sql_user ="SELECT user_id FROM users where username = '$username'" ;
    $result = mysqli_query($conn,$sql_user);
    $result = $conn->query($sql_user);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id2 = $row["user_id"];
        }
    }
    if ($id1 == $id2){
        include 'php/config.php';
        if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
            $id=$_GET['id'];
            $sql = "DELETE FROM posts WHERE id='$id'";
            if ($conn->query($sql) === TRUE) {
                echo "Xoá thành công!";
                header("location:posts_add.php");
            } else {

            echo "Error updating record: " . $conn->error;
            }
            $conn->close();
    }

    }  else{
        header("location:alert.php");

    } 

}
else{
include 'php/config.php';
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
    $id=$_GET['id'];
    $sql = "DELETE FROM posts WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
}
header("location:posts_add.php");
}

?>