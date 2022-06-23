<?php
    
        if (isset($_POST['update_posts'])){
        $id=$_GET['id'];
        $title=$_POST['title'];
        $content=$_POST['content'];
        $image=$_POST['image'];
        
        $sql = "UPDATE `posts` SET title='$title', content='$content', image='$image' WHERE id='$id'";
        



        if ($conn->query($sql) === TRUE) {
        header('location:posts_add.php');
        echo "<b>Record updated successfully</b>";

        } else {
        echo "Error updating record: " . $conn->error;
        }
        
        $conn->close();
}
?>