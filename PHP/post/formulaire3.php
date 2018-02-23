<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Formualire 3</title>
</head>
<body>
	<div class="login-page">
		<div class="form">
            <form class="login-form" method="post" action="formulaire4.php"> <!-- method : comment vont circuler les données, action : URL de destination -->
            <h1>Inscription</h1>
			<input type="text" id="pseudo" name="pseudo" placeholder="Pseudo"/>
			<input type="email" id="email" name="email" placeholder="Email"/>
			<input class="button" type="submit" value="Connexion">
			</form>
		</div>
	</div>
</body>
</html>