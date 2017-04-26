<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ce site est une présentation du Festival du Quartier BELLEVILLE, Belleville En Vrai"/>
  <meta name="author" content="Laurent Abemango alias LAWD / Badis Nakhli / Abdoulaye Ndao"/>
  <title>BELLEVILLE EN VRAI</title>
  <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
  <link href="assets/vendor/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/ddtstyle.css" type="text/css">
  <link rel="stylesheet" href="assets/css/menustyle.css" type="text/css">
  <link rel="stylesheet" href="assets/css/mqstyle.css" media="screen" type="text/css">
</head>
<body>
  <div>
    <?php
    require('_menu.php');
    ?>
  </div>
    <?php
    //validate functions
    function validate_email($p, $key) {
      if (isset($p[$key])) {
        $p[$key] = filter_var($p[$key], FILTER_SANITIZE_EMAIL);
      }
      if (filter_var($p[$key], FILTER_VALIDATE_EMAIL)) {
        return true;
      }
      return false;
    }

    function validate_input($p, $key, $min, $max) {
      if (isset($p[$key]) && strlen($p[$key]) >= $min && strlen($p[$key]) <= $max) {
        return true;
      }
      return false;
    }
     ?>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //validate inputs
        $email_ok = validate_email($_POST, "expediteur");
        $subject_ok = validate_input($_POST, "objet", 5, 50);
        $message_ok = validate_input($_POST, "message", 20, 140);

        //check if validation is ok
        if ($email_ok && $subject_ok && $message_ok) {
          //send mail
          $okmail = mail("participation@bellevillenvrai.fr",
                          $_POST["objet"],
                          wordwrap($_POST["message"], 70,"\r\n"),
                          $_POST["expediteur"]);

          //if mail errored
          if (!$okmail) {
            $error = "Votre e-mail n'a pas été envoyé.";
          }
        } else {
          //if validation failed
          $error = "Mauvais paramétres : ";
          //if email errored
          if (!$email_ok) {
            $error .= "<li> Entrez une adresse mail valide.</li>";
          }
          //if subject errored
          if (!$subject_ok) {
            $error .= "<li> l'Objet doit avoir entre 5 et 50 caractéres.</li>";
          }

          //if message errored
          if (!$message_ok) {
            $error .= "<li>le Message doit avoir entre 20 et 140 caractéres.</li>";
          }
        }
      }
     ?>
    <div class="error">
     <?php
     if (isset($error)) {
       echo "<ul><h3>$error</h3></ul>";
     }
     ?>
    </div>
    <div class="txtbg">


    <div id="contact-area">
    <form action="contact.php" method="post">
      <div>
        <label for="expediteur">Ton Mail :</label>
        <input id="expediteur"
        class="<?php
        if (isset($email_ok) && !$email_ok) {
          echo 'error';
        }
        ?>"
        type="text" name="expediteur" value="<?php if (isset($_POST['expediteur'])) {
          echo $_POST['expediteur'];
        }?>" />
      </div>
        <div>
        <label for="objet">objet :</label>
        <input type="text" name="objet" value="<?php if (isset($_POST['objet'])) {
          echo $_POST['objet'];
        }?>"/>
      </div>
      <div>
        <label for="message">message :</label>
        <textarea name="message" rows="8" cols="40" value="<?php if (isset($_POST['message'])) {
          echo $_POST['message'];
        }?>"></textarea>
      </div>
      <div class="phatbutt">
        <input type="submit" id="subcont" value="Envoyer" />
      </div>
    </form>
  </div>
  <div class="space"></div>


    <?php
    require('_footer.php');
    ?>
  </body>
  </html>
