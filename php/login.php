<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body style="background-image: url(../images/img_bg_2.jpg) ;">
    <h2 class="text-center" > Connexion </h2>
    <div id="wrapper">
      

        <div class="container">  

            <div class = "row justify-content-center">
            <p>
                  <?php
                    if (  isset($_SESSION["alert"])   ) {
                    echo $_SESSION["alert"];
                    session_unset();
                    }
                    ?>
            </p>
            <div class="col-lg-auto"></div>
                
                    <form action="login_submit.php" class="col-lg-auto col-md-auto bg-light p-3 "  method = "POST">
                   
                    <table>
                    <div class="align-items-center justify-content-center" >
                        <tr>
                            <td>Nom d'utilisateur</td>            
                            <td><input type="text" name="username" placeholder="Nom d'utilisateur"></td>
                        </tr>

                        <tr>
                            <td>Mot de passe</td>
                            <td><input type="password" name="pass" placeholder="Mot de passe" ></td>
                        </tr>
                        
                        <tr >
                            <td  colspan = "3">
                                <button type = "submit" name="submit" class="btn btn-primary"> Connexion </button>
                                <a href="http://localhost/app/pass_forget.php" button type= "submit" name="forget"class="btn btn-primary" >Mot de pas oublié</a></button>
                                <a href="http://localhost/app/php/register.php" button type= "submit" name="register"class="btn btn-primary" >Ourvrir un compte?</a></button>


                            </td>
                        </tr>
                    </div>
                    
                    </table>
                    </form>
                <div class="col-lg-auto"></div>
            </div>
        </div>
    </div>

    
</body>
</html>