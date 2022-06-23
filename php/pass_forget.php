<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body style="background-image: url(./images/img_bg_2.jpg) ;">
    <h2 class="text-center" > Connexion </h2>
    <div id="wrapper">


        <div class="container">  

            <div class = "row justify-content-center">
            <div class="col-lg-4"></div>
                    <form action="login_submit.php" class="col-lg-4 col-md-6 bg-light p-3  "  method = "POST">
                    <table>
                    <div class="align-items-center justify-content-center" >
                      
                        <tr>
                            <!-- <td>Mot de pass</td> -->
                            <td><input type="text" name="email" placeholder="Email" ></td>
                        </tr>
                        
                        <tr >
                            <td  colspan = "2">
                                <button type = "submit" name="submit" class="btn btn-primary"> Submit </Summary> </button>
                            </td>
                        </tr>
                    </div>
                    
                    </table>
                    </form>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>

    
</body>
</html>