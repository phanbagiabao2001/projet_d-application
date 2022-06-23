<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		header("location:../accueil.html");
	}

?>
<!DOCTYPE html>
<html>
    <header-component></header-component>
    <head>
      <link rel="stylesheet" href="style.css">

        <script src="js/header.js"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacter</title>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet"> -->
        <link rel="stylesheet" href="css/style_contact.css">
    </head>
    <main-header></main-header> 
    <body style="background-color:powderblue;">
        <h2 style="text-align:center"></h2>
        <h3 style="text-align:center">N'hésitez pas à nous contacter et nous vous répondrons dès que possible.</h3>
                    <form action="posts_add.php" enctype="multipart/form-data" method="post" class="form">
                    <table width="600" border="1" cellspacing="5" cellpadding="5">
              <tr>
                <td width="230">Titre </td>
                <td width="329"><input type="text" name="title"/></td>
              </tr>
              <tr>
                <td>Lien</td>
                <td><input type="text" name="url"/></td>
              </tr>
                <tr>
                <td>Contennu </td>
                <td><textarea name="content" id="content" placeholder="Écrire ici..." class="noidung" rows="10" cols="80"></textarea></td>
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
<h2>Contenu de discussion</h2>
<?php require 'posts_xuly.php';?>

    <main-footer></main-footer>   
    </body>
</html>
 


