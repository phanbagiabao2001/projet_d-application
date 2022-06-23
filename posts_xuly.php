<head>
<link rel="stylesheet" >
</head>
<body>
<div style="text-align:center">
<table border="1">
<tr>
<td>Utilisateur</td>
<td>Titre</td>
<td>Contenu</td>
<td>Image</td>
<td>Modifier</td>
<td>Supprimer</td>
</tr>
<?php
require 'php/config.php';
// session_start();
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
} 
if (isset($_SESSION['admin'])) {
    $username = $_SESSION['user'];
} 

// require 'php/login_submit.php';
// echo $_SESSION['user'];

// Up bài viết
if (isset($_POST['btn_submit'])) {
    // $id=$_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
// Upload ảnh 
    $image = $_FILES['image']['name'];
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $tmp = explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($tmp));
    
    $expensions= array("jpeg","jpg","png");
           
    if(in_array($file_ext,$expensions)=== false){
        $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
           
    if($file_size > 2097152) {
        $errors[]='Kích thước file không được lớn hơn 2MB';
    }
    $target = "photo/".basename($image);
    //$username

    $sql_user ="SELECT user_id FROM users where username = '$username'" ;
    $result = mysqli_query($conn,$sql_user);
    $result = $conn->query($sql_user);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user_id = $row["user_id"];
        }
    }


    //Show post===================================================================================================
    $sql = "INSERT INTO posts (title,content,image,id_user, username ) VALUES ( '$title', '$content', '$image', '$user_id' ,'$username')";
    if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target) && empty($errors)==true) {
            echo '<script language="javascript">alert("Vous avez posté avec succès!");</script>';
            } else{
            echo '<script language="javascript">alert("Veuillez remplir toutes les informations");</script>';
    }
}
    $sql = "SELECT * FROM posts WHERE id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        // echo "<td><h2>  </h2></td>";
        echo "<td><h2>".$row['username']."</h2></td>";
        echo "<td><h2>".$row['title']."</h2></td>";
        echo "<td><h3>".$row['content']."</h3></td>";
        echo "<td><img src='photo/".$row['image']."' height=100></td>";
        echo '<td><a href="posts_edit.php?id='.$row['id'].'"> Edit </a></td> | <td><a href="posts_delete.php?id='.$row['id'].'">Delete</a></td>';
        echo "</tr>";
    }
?>
</table>
</div>
</body>
</html>