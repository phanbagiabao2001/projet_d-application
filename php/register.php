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
<body  style="background-image: url(../images/bg.jpg); background-size: cover;background-repeat:no-repeat; height:100vh; " >
    <h3 class="text-center"> Ouvrir un compte </h3>
    
    <div id="wrapper">
        

        <div class="container">  
            <div class = "row justify-content-around ">
                <form action="register_submit.php" class="col-md-auto bg-light p-3 "  method = "POST">
                <table>
                Sexe         
                    <input name="gender" type="radio" value="Masculin" /> Masculin
                    <input name="gender" type="radio" value="Féminin" /> Féminin
                    <input name="gender" type="radio" value="Autre" /> Autre
                    <div class="mb-3">
                        <label for="login">Nom</label>
                        <input type="text"  class="form-control" name="Nom" placeholder="Nom" >
                    </div>
                   <div class="mb-3">
                        <label for="login">Prénom</label>
                        <input type="text"  class="form-control" name="prenom" placeholder="Prénom">
                   </div>
                   
               
                    <div class="mb-3">
                        <label for="login">Utilisateur</label>
                        <input type="text"  class="form-control" name="username" placeholder="Nom d'utilisateur">
                    </div>

                    <div class="mb-3">
                        <label for="login">Mot de passe</label>
                       <input type="password"  class="form-control" name="pass1" placeholder="Mot de passe" >

                    </div class="mb-3">
                        <label for="login">Confirmation de mot de passe</label>
                        <input type="password"  class="form-control" name="pass2" placeholder="Confirmation de mot de passe" >
                    <div>

                    <div class="mb-3">
                        <label for="login">Email</label>
                        <input type="text"  class="form-control" name="email" placeholder="Email" > 
                    </div>
                    <div class="mb-3">
                        <label for="login">Nationalité</label>
                        <input type="text"  class="form-control" name="nal" placeholder="Nationalité" >
                    </div>                
                
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
