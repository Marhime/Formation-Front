<?php
echo '<pre>'; print_r($_POST); echo '</pre>';
if($_POST)
{
    $_POST['expediteur'] = "From: $_POST[expediteur] \n";
    $_POST['expediteur'] .= "MIME-Version 1.0 \r\n";
    $_POST['expediteur'] .= "Content-type: text/html; charset=utf8 \r\n";

    //MIME (Multipurpose Internet Mail Extensions) est un standard qui a été proposé par les laboratoires Bell Communications en 1991 afin d'étendre les possibilités limitées du courrier électronique (mail) et notamment de permettre d'insérer des documents (images, sons, texte, ...) dans un courrier. /!\ dans un courrier CETTE LIGNE EST OBLIGATOIRE
     //Content-type ; texte/html : ce code permettra d'envoyer du html directement dans le message, 
    //il sera traduit, pratique pour l'envoi d'une newsletter.

    mail($_POST['destinataire'], $_POST['sujet'], $_POST['message'], $_POST['expediteur']); // la fonction mail() recoit toujours 4 arguments et l'ordre à une importance cruciale. Comme dans la plupart des fonctions, il faut respecter le NOMBRE et l'ORDRE des arguments que l'on transmet. 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Formualire 5</title>
</head>
<body>
	<div class="login-page">
		<div class="form">
            <form class="login-form" method="post" action=""> <!-- method : comment vont circuler les données, action : URL de destination -->
            <h1>Contact</h1>
			<input type="text" id="destinataire" name="destinataire" placeholder="Déstinataire"/>
			<input type="text" id="expediteur" name="expediteur" placeholder="Expéditeur"/>
			<input type="text" id="sujet" name="sujet" placeholder="Sujet"/>
			<textarea rows="5" id="message" name="message" placeholder="Message"/></textarea>
			<input class="button" type="submit" value="Envoi">
			</form>
		</div>
	</div>
</body>
</html>