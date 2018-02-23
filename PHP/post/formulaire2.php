<!-- on affiche successivement les données saisies dans le formulaire réaliser un formulaire d'inscription avec les champs suivants : 
	- pseudo, mdp, prénom, nom, email, adresse,cp, bouton submit
	- Contrôler la récupération de l'ensemble des données saisies dans le formulaire
	- afficher au dessus les données du formulaire à l'aide d'un affichage conventionnel -->
    

<?php
$erreur = "";
if($_POST)
{
if(iconv_strlen($_POST["pseudo"]) < 5 || iconv_strlen($_POST["pseudo"]) > 20)
{
	$erreur .= 'PAS BON PSEUDO <br>';
}
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
{
	$erreur .= 'PAS BON EMAIL <br>';
}
if(!filter_var($_POST["cp"], FILTER_VALIDATE_INT) OR iconv_strlen($_POST["cp"]) !== 5)
{
	$erreur .= 'PAS BON CODE POSTAL <br>';
}
if(!preg_match('#^[a-zA-Z0-9.-_]+$#', $_POST["prenom"]))
/*
	pref_match(): expression régulière REGEX est toujours entouré de # pour préciser les options :
	^ indique le début de la chaine
	$ indique la fin de la chaine
	+ est la pour dire que les lettres autorisés peuvent apparaitre plusieurs fois
*/
{
	$erreur .= 'PAS BON PRENOM <br>';
}
if(empty($erreur))
{
	foreach($_POST as $indice => $valeur)
{
	echo $indice . ' : ' . $valeur . '<br>';
}
}
	echo $erreur;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Formulaire 2</title>
</head>
<body>
	<div class="login-page">
		<div class="form">
			<form class="login-form" method="post" action=""> <!-- method : comment vont circuler les données, action : URL de destination -->
				<input type="text" id="pseudo" name="pseudo" placeholder="Pseudo"/>
				<input type="password" id="mdp" name="mdp" placeholder="Mot de passe"/>
				<input type="text" id="nom" name="nom" placeholder="Nom"/>
				<input type="text" id="prenom" name="prenom" placeholder="Prénom"/>
				<input type="text" name="email" id="email" placeholder="Email">
				<input type="text" id="address" name="address" placeholder="Adresse"/>
				<input type="text" id="cp" name="cp" placeholder="Code postal"/>
				<input class="button" type="submit" value="Inscription">
			</form>
		</div>
	</div>
</body>
</html>