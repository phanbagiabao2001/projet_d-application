<!DOCTYPE html>
<html>
    <header-component></header-component>
    <head>
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
        <h2 style="text-align:center">Nous contacter</h2>
        <h3 style="text-align:center">N'hésitez pas à nous contacter et nous vous répondrons dès que possible.</h3>
<?php
$errors = [];
$errorMessage = '';
if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    if (empty($name)) {
        $errors[] = 'Name is empty';
    }
    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }
    if (empty($subject)) {
        $errors[] = 'Subject is empty';
    }
    if (empty($message)) {
        $errors[] = 'Message is empty';
    }
}
?>
  <form action="https://formsubmit.co/phanbagiabao2001@gmail.com" method="post" id="contact-form">
    <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
            <input type="hidden" name="_captcha" value="false">
            <label for="name">Nom:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="subject">Sujet:</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Envoyer">
            <input type="hidden" name="_next" value="http://localhost/projet_d-application/thankyou.html">>
  </form>
  <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
  <script>
      const constraints = {
          name: {
              presence: { allowEmpty: false }
          },
          email: {
              presence: { allowEmpty: false },
              email: true
          },
          subject: {
              presence: { allowEmpty: false }
          },
          message: {
              presence: { allowEmpty: false }
          }
      };
      const form = document.getElementById('contact-form');
      form.addEventListener('submit', function (event) {
          const formValues = {
              name: form.elements.name.value,
              email: form.elements.email.value,
              subject: form.elements.subject.value,
              message: form.elements.message.value,
          };
          const errors = validate(formValues, constraints);
          if (errors) {
              event.preventDefault();
              const errorMessage = Object
                  .values(errors)
                  .map(function (fieldValues) {
                      return fieldValues.join(', ')
                  })
                  .join("\n");
              alert(errorMessage);
          }
      }, false);
    </script>
    <main-footer></main-footer>   
    </body>
</html>
 