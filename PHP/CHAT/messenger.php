<?php
/*
    Exercice : Chat
        1.      Modélisation et création
                BDD : tchat
                table : commentaire
                        id_commentaire         // INT(11) PK - AI
                        pseudo                // VARCHAR(20)
                        message              // TEXT
                        date Enregistrement // DATETIME
        2. Connexion à la BDD
        3. Création du formulaire HTML pour l'ajout de message
        4. Contrôle de récupération des données saisies en php
        5. Requête d'enregistrement
        6. Affichage des messages

*/
$pdo = new PDO('mysql:host=localhost;dbname=chat', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
echo '<pre>'; print_r($_POST); echo '</pre>';
if($_POST)
{
    // $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);
    // $_POST['message'] = htmlspecialchars($_POST['pseudo']);
//$resultat = $pdo->exec("INSERT INTO commentaire (pseudo, dateEnregistrement, message)VALUES('$_POST[pseudo]', NOW(), '$_POST[message]')");
$resultat = $pdo->prepare("INSERT INTO commentaire (pseudo,dateEnregistrement,message) VALUES (:pseudo, NOW(), :message)");

$resultat->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
$resultat->bindValue(':message', $_POST['message'], PDO::PARAM_STR);

$resultat->execute();
}

$resultat = $pdo->query("SELECT pseudo, message, DATE_FORMAT(dateEnregistrement, '%H:%i') AS heurefr, DATE_FORMAT(dateEnregistrement, '%d/%m/%Y') AS datefr FROM commentaire ORDER BY dateEnregistrement DESC");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <?php
                while($commentaire = $resultat->fetch(PDO::FETCH_ASSOC))
                {
                    echo '<div class="message1">';
                    echo '<div class="pseudow">' . $commentaire['pseudo'] . '</div>';
                    echo '<div class="heure">' . $commentaire['heurefr'] . '</div>';
                    echo '<div class="contenu">' . $commentaire['message'] . '</div>';
                    echo '</div>';
                }
                ?>
                <form class="login-form" method="post" action="">                        
                    <input class="pseudo" id="pseudo" name="pseudo" placeholder="Pseudo"/>
                    <textarea type="text" class="message" id="message" name="message" row="10" placeholder="Écrivez un message..."/></textarea>
                    <input class="button" type="submit" value="Envoi">
                </form>
                <?php
                echo '<h1>' . $resultat->rowCount() . ' commentaire(s) </h1>';
                ?>
            </div>     
        </div>   
    </body>
</html>