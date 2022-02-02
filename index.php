<?php
    require "./classes/Mail.php";
?>

    <!doctype html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Classe Mail</title>
    </head>
    <body>

    <form method="post" action="index.php">
        <div>
            <label for="monMail"> Votre mail : </label>
            <input type="email" id="monMail" required>
        </div>
        <div>
            <label for="destinataires"> Destinataire(s) : </label>
            <input type="email" id="destinataires" required>
        </div>
        <div>
            <label for="sujets"> Sujets : </label>
            <input type="text" id="sujets" required>
        </div>
        <div>
            <label for="message"> Message : </label>
            <textarea name="message" id="message" required></textarea>
        </div>
        <input type="submit" value="Envoyer">
    </form>

    </body>
    </html>

<?php

    if (isset($_POST["monMail"], $_POST["destinataires"], $_POST["sujets"], $_POST["message"])) {
        $envoieMail = new Mail($_POST['sujets'], $_POST["destinataires"], $_POST["monMail"], $_POST["message"]);
        $envoieMail->sendMail();
    }

?>