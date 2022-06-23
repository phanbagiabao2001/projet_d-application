<?php
    session_start();
    require_once 'config.php';
	if ( (isset($_POST["submit"])) && ($_POST["username"] != '') && ($_POST["pass1"]!='') && ($_POST["pass2"] != '') )
    {
        $user_name = $_POST["username"];
        $pass1 = $_POST["pass1"];
        $pass2 = $_POST["pass2"];    
        $email = $_POST["email"] ;
        $role = '0';
        $nationality = $_POST["nal"];
        $gender = $_POST["gender"];
    
        $level = 0  ;
     
        $sql = "SELECT * FROM users where username = '$user_name'" ;
        $old = mysqli_query($conn,$sql);
        if (mysqli_num_rows($old)>0 ) {
            $_SESSION['alert'] = " Nom d'utilisateur existé! ";
            header("location:register.php");
            die();
        }

        if($pass1!=$pass2){
            $_SESSION["alert"] = ' Mot de pass est incorrect! ';
            header("location:register.php");
            die();
        }
        if (strlen($pass1) < 8 ){   
            $_SESSION["alert"] = ' Mot de passe trop court ! ';
            header("location:register.php");
            die();
        }
        $pass1 = md5($pass1);

        $sql = "INSERT INTO users (username,email,password,role,nationality, gender) values ('$user_name', '$email','$pass1','$role','$nationality','$gender')";
        mysqli_query($conn,$sql);
        $_SESSION['alert'] = 'Vous avez reussit à faire inscription !';
        header('location:login.php');
    }
    else {
        $_SESSION["alert"] = "Veuillez saisir les information complètes!";
        header("location:register.php");
    }
?>