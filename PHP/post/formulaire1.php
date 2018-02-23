<?php
	/*
		les superglobales : ce sont des variables de type ARRAY qui sont prédéfinies dans le code et qui permettent de véhiculer certaines données on peut les appeler partout dans le code, à la fois dans l'espace local et dans l'espace global

	*/
	// echo '<pre>'; print_r($_SERVER); echo '</pre>'; // affiche des informations sur notre serveur local XAMPP
	echo '<pre>'; print_r($_POST); echo '</pre>';

	// exercice : afficher les données les données saisies dans le formulaire avec un affichage classique
	foreach($_POST as $indice => $valeur) // la boucle foreach parcrours la super global $_POST qui est une variable de type ARRAY
	{
		echo $indice . ' : ' . $valeur; // on affiche successivement les données saisies dans le formulaire.
		echo '<br>';
	}

/*
	Sans le if , la premiere fois lorsque nous n'avons rien posté, nous avons 2 erreurs undefined, mais cela n'empeche pas l'exemple de fonctionner. C'est du au fait que quand kin clique sur le bouton "connexion" le code se recharge, il est ré-éxecuter et par consé&quent le $_POST n'est plus undefined.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Formualire 1</title>
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form class="login-form" method="post" action=""> <!-- method : comment vont circuler les données, action : URL de destination -->
			<input type="text" id="pseudo" name="pseudo" placeholder="Pseudo"/>
			<input type="password" id="mdp" name="mdp" placeholder="Mot de passe"/>
			<input class="button" type="submit" value="Connexion">
			</form>
		</div>
	</div>
</body>
</html>