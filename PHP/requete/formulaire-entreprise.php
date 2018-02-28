<?php
/*
Exercice :
    1 - Réaliser un formulaire HTML correspondant à la table employé de la BDD entreprise
    2 - Réaliser le script permettant l'ajout d'un nouvel employé dans la BDD en soumettant le formulaire
*/
$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
if($_POST){
echo '<pre>'; print_r(get_class_methods($pdo)); echo '</pre>';
$resultat = $pdo->exec("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire)VALUES('$_POST[prenom]', '$_POST[nom]', '$_POST[sexe]', '$_POST[service]', '$_POST[date_embauche]', '$_POST[salaire]')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
    <title>Formulaire entreprise</title>
</head>
<body>
	<div class="login-page">
		<div class="form">
            <form class="login-form" method="post" action=""> <!-- method : comment vont circuler les données, action : URL de destination -->
            <h1>Nouvel(le) employé(e)</h1>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom"/>
            <input type="text" id="nom" name="nom" placeholder="Nom"/>
            <div class="selected-style">
            <select class="select" id="sexe" name="sexe" placeholder="Sexe"/>
                <option name="m">Homme</option>
                <option name="f">Femme</option>
            </select>
            </div>
			<input type="text" id="service" name="service" placeholder="Service"/>
			<input type="date" id="date_embauche" name="date_embauche" placeholder="Date d'embauche"/>
			<input type="text" id="salaire" name="salaire" placeholder="Salaire souhaité"/>
            <input class="button" type="submit" value="Envoi">
            </form>
            <?php if($_POST)
            {
                echo '<br><h1>Inscription OK !</h1>';
            }
            ?>
		</div>
	</div>
</body>
</html>