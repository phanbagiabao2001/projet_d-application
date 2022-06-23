<head>
<title>Sửa dữ liệu trong Database</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
// Kết nối Database
require_once 'php/config.php';
session_start();
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
} 
if (isset($_SESSION['admin'])) {
    $username = $_SESSION['user'];
} 

$sql_user ="SELECT user_id FROM users where username = '$username'" ;
$result = mysqli_query($conn,$sql_user);
$result = $conn->query($sql_user);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    $user_id = $row["user_id"];
    }
}
       

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
    
        }?>
        <?php
         $id=$_GET['id'];
        $query=mysqli_query($conn,"select * from `posts` where id='$id'");
        $row=mysqli_fetch_assoc($query);?>
      <?php  if ($id1 == $id2){ ?>
        <?php echo $row['title']; ?>
        <form method="POST" class="form">
            <h2>Sửa thành viên</h2>
            <label>Tiêu đề:<br/>
            <input type="text" value="<?php echo $row['title']; ?>" name="title" id="title"/></label><br/>
            <label>Nội dung:<br/>
            <textarea value="" name="content" id="content" rows="10" cols="80"><?php echo $row['content']; ?></textarea></label><br/>
            <label>Hình ảnh: <br/>
            <input type="text" value="<?php echo $row['image']; ?>" name="image"/></label><br/>
            <input type="submit" value="Update" name="update_posts">
            <?php require_once 'posts_update.php';?>
            </form>
        <?php }
        else {
            header("location:alert_2.php");

        } ?>

</body>
</html>