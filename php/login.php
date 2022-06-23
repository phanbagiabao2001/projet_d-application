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
<body style="background-image: url(../images/bg.jpg); background-size: cover;background-repeat:no-repeat; height:100vh;  ">
    <h2 class="text-center" > Connexion </h2>
    <div id="wrapper">
      

        <div class="container">  

            <div class = "row justify-content-center">
            
            <div class="col-lg-auto "></div>
                
                    <form action="login_submit.php" class="col-lg-auto col-md-auto bg-light p-3 "  method = "POST">
                   
                    <table>
                    <div class="align-items-center justify-content-center" >
                        <div class="mb-3">
                            <label for="login">Utilisateur</label>
                            <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">          

                        </div>
                        
                        <div class="mb-3">
                            <label for="login">Mot de passe</label>
                            <input type="password" class="form-control" name="pass" placeholder="Mot de passe" >
                        </div>
                        
                        <tr >
                            <td  colspan = "3">
                                <button type = "submit" name="submit" class="btn btn-primary"> Connexion </button>
                                <a href="http://localhost/projet_d-application/php/pass_forget.php" button type= "submit" name="forget"class="btn btn-primary" >Mot de pas oublié</a></button>
                                <a href="http://localhost/projet_d-application/php/register.php" button type= "submit" name="register"class="btn btn-primary" >Ourvrir un compte?</a></button>


                            </td>
                        </tr>
                    </div>
                    
                    </table>
                    </form>
                    <h2 class="text-center text-danger text-folder " >
                  <?php
                    if (  isset($_SESSION["alert"])   ) {
                    echo $_SESSION["alert"];
                    session_unset();
                    }
                    ?>
                    </h2>
                <div class="col-lg-auto"></div>
            </div>
        </div>
    </div>
  
</body>
</html>


