<?php
    session_start();
    include 'config.php';
	if (isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["pass"] !=''  ) {
        $username = $_POST["username"];
        $pass = $_POST["pass"];

      

        $pass = md5($pass);
        
        $sql = "SELECT * FROM users where username = '$username' AND password = '$pass' " ;
        $old = mysqli_query($conn,$sql);
        $user = mysqli_query($conn, $sql);

  

        

        if (mysqli_num_rows($user)>0){                                                                                                                                                                                            
            if ( $username == 'admin' ){
                header("location:../admin.php"); 
                $_SESSION["admin"] = $username;  
            }else {
                header("location:../user.php");
                $_SESSION["user"] = $username;

            }
        }else {
            header("location:login.php");
            $_SESSION["alert"] = "Nom d'utilisateur ou mot de pass est incorrect!";

        }
    }else {
        header("location:login.php");
        $_SESSION["alert"] = "Veuillez saisir les information complètes!";
    }
    
?>