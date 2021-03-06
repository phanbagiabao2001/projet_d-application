<?php
	session_start();
	if ( !isset($_SESSION['user']) and !isset($_SESSION['admin']) )   {
		header("location:accueil.html");
	}

?>
<!doctype html>
<html>
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <link rel = "icon" href = "images/logo_bourges.png"
        type = "image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"> -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/hover1.css">
    <link rel="stylesheet" href="css/hover2.css">
    <script src="js/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="Accueil.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <img src="images/logo_bourges.png" width="110" height="150" >
                    <h1 class="m-0 display-3 text-primary">BOURGES</h1>
                </a>
                    
            </div>
            <div class="col-lg-9">
                <div class="row bg-dark d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary1 mr-2"></i>
                            <b>ba_gia_bao.phan@insa-cvl.fr</b>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary1 mr-2"></i>
                            <b>02 48 48 40 00</b>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center pr-2">
                            <a class="text-primary1 p-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary1 p-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary1 p-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary1 p-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary1 p-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                   
                    
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="accueil.html" class="nav-item nav-link active">Accueil</a>
                              
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="http://localhost/app/discussion.php" class="dropdown-item">Discussion</a>
                                    <a href="single.html" class="dropdown-item">Blog Detail</a>
                                </div>
                            </div> -->
                            <a href="http://localhost/projet_d-application/posts_add.php" class="nav-item nav-link">Discussion</a>
                            <a href="http://localhost/projet_d-application/contact.php" class="nav-item nav-link">Nous contacter</a>
                        </div>
                        <a href="http://localhost/projet_d-application/php/logout.php"class="btn btn-primary mr-3 d-none d-lg-block"><b>D??connexion</b></a>
                        <a href="" class="btn btn-primary mr-3 d-none d-lg-block"><b>G??rer mon compte</b></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    
<h2 style="text-align:center"></h2>
        <h3 style="text-align:center" >??crire un nouveau post ici! </h3>
          <div id="wrapper">
      

            <div class="container">  

              <div class = "row justify-content-center">



                  <form action="posts_add.php" enctype="multipart/form-data" method="post" class="form">
                    <table width="600" border="2" cellspacing="5" cellpadding="5">
                      <tr>
                        <td width="230">Titre </td>
                        <td width="329"><input type="text" name="title"/></td>
                      </tr>
                      <!-- <tr>
                        <td>Lien</td>
                        <td><input type="text" name="url"/></td>
                      </tr> -->
                        <tr>
                          <td>Contennu </td>
                          <td><textarea name="content" id="content" placeholder="??crire ici..." class="noidung" rows="5" cols="80"></textarea></td>
                        </tr>
                        <tr>
                          <td>Image</td>
                          <td><input type="hidden" name="size" value="1000000">
                          <input type="file" name="image" class="hinhanh"><br/><br/></td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Publier"/></td>
                        </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>
<h2 class="text-center" >Contenu de discussion</h2>

<?php require 'posts_xuly.php';?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-4 text-primary1">BOURGES</h1>
                </a>
                <p>Avec 64 668 habitants en 2018, il s'agit de la commune la plus peupl??e du d??partement et la troisi??me commune la plus peupl??e de la r??gion Centre-Val de Loire, apr??s Tours et Orl??ans, et devant Blois, Ch??teauroux et Chartres.

Au centre d'une aire d'attraction de 174 771 habitants2, l'aire d'attraction de Bourges est la 65e de France et la 3e de la r??gion3.

Elle est aussi la capitale historique du Berry, province de l'Ancien R??gime correspondant approximativement aux d??partements actuels de l???Indre et du Cher.

Ses habitants sont appel??s les Berruyers.</p>
                 
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary1 mb-4">Entrer en contact</h4>
                <p><i class="fa fa-map-marker-alt text-primary1 mr-2"></i>88 Bd Lahitolle, 18000 Bourges, France</p>
                <p><i class="fa fa-phone-alt text-primary1 mr-2"></i>02 48 48 40 00</p>
                <p><i class="fa fa-envelope text-primary1 mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary1 mb-4">Liens rapides</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Accueil</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Nous contacter</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary1 mb-4">Bulletin</h4>
                <p>INSA Centre Val de Loire va fermer l'??cole pour la vacance d'??t?? ?? partir du 27 juin 2022</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Bienvenue ?? Bourges</a>. Tous les droits sont r??serv??s. Con??u par <a href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    </body> 

</html>





