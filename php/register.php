<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Ouvrir un compte</title>
</head>
<body style="background-image: url(../images/img_bg_2.jpg)" >
    <h3 class="text-center"> Ouvrir un compte </h3>
    
    <div id="wrapper">
        <p>
            <?php
                if (  isset($_SESSION["alert"])   ) {
                    echo $_SESSION["alert"];
                    session_unset();
                }
            ?>
        </p>
        <div class="container">  
            <div class = "row justify-content-around ">
                <form action="register_submit.php" class="col-md-auto bg-light p-3 "  method = "POST">
                <table>
                    <tr>
                        <!-- <td>Nom</td> -->
                        <td><input type="text" name="Nom" placeholder="Nom" ></td>
                    </tr> 
                    
                    <tr>
                        <!-- <td>Prénom</td> -->
                        <td><input type="text" name="prenom" placeholder="Prénom"></td>
                    </tr>
               
                    Sexe         
                    <input name="gender" type="radio" value="Masculin" />Masculin
                    <input name="gender" type="radio" value="Féminin" />Féminin
                    <input name="gender" type="radio" value="Autre" />Autre
               
                    </tr>


                    <tr>
                        <!-- <td>User</td> -->
                        <td><input type="text" name="username" placeholder="Nom d'utilisateur" ></td>
                    </tr>
             
                    <tr>
                        <!-- <td>Password</td> -->
                        <td><input type="password" name="pass1" placeholder="Mot de pass" ></td>
                    </tr>
                  
                    <tr>
                        <!-- <td>Confirmation of password</td> -->
                        <td><input type="password" name="pass2" placeholder="Confirmation de mot de pass" ></td>
                    </tr>
               

                    <tr>
                        <!-- <td>Email</td> -->
                        <td><input type="text" name="email" placeholder="Email" > </td>
                    </tr>
                
                    <tr>
                        <!-- <td>Nationalité</td> -->
                        <td><input type="text" name="nal" placeholder="Nationalité" ></td>
                    </tr>
                
                    <tr>
                        <td colspan = "2">
                            <button type = "submit" name="submit" class="btn btn-primary"> Inscription </button>
                            <button type = "reset" class="btn btn-primary" > Réinitialiser </button>
                        </td>
                    </tr>
                </table>
                </form>
            </div>
        </div>


       
    </div>


</body>
</html>
