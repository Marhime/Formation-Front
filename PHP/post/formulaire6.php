<?php
echo '<pre>'; print_r($_POST); echo '</pre>';
/*Exercice : Améliorer le formulaire de contact formulaire5.php
1 - Vous devez procéder aux changements permettant d'être l'unique destinataire du message
2 - Vous devez ajouter les champs: société, Nom, Prénom. Sans retirer les champs actuels
3 - Ajoute au corps du message: le nom, prénom, société, message*/

if($_POST)
{
    $_POST['expediteur'] = "From: $_POST[expediteur] \n";
    $_POST['expediteur'] .= "MIME-Version 1.0 \r\n";
    $_POST['expediteur'] .= "Content-type: text/html; charset=utf8 \r\n";

    $_POST['message'] = "Nom : " . $_POST['nom'] . "\nPrénom : " . $_POST['prenom'] . "\nSociété : " . $_POST['societe'] . "\nMessage : " . $_POST['message'];

    $email = "maxime.joyes@gmail.com";
    mail($email, $_POST['sujet'], $_POST['message'], $_POST['email']);
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
    <style>
        .login-page {
              width: 500px;
              padding: 0 0 0 0;
              margin: auto;
            }
    </style>
</head>
<body>
	<div class="login-page">
		<div class="form">
            <form class="login-form" method="post" action=""> <!-- method : comment vont circuler les données, action : URL de destination -->
            <h1>Contact</h1>
			<input type="text" id="nom" name="nom" placeholder="Nom"/>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom"/>
			<input type="text" id="societe" name="societe" placeholder="Société"/>
			<input type="email" id="email" name="email" placeholder="Email"/>
			<input type="text" id="sujet" name="sujet" placeholder="Sujet"/>
			<textarea rows="5" id="message" name="message" placeholder="Message"/></textarea>
			<input class="button" type="submit" value="Envoi">
			</form>
		</div>
	</div>
</body>
</html>