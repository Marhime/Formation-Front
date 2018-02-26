<?php
/*Exercice:
1 - Réaliser un formulaire permettant de sélectionner un fruit et saisir un poids.
2-  Réaliser le traitement permettant d'afficher le prix en passant par la fonction déclarée "calcul"
3 - Faites en sorte de garder le dernier fruit sélectionné et le dernier poids choisi dans le formulaire lorsqu'il a été validé
*/

require_once("fonction_inc.php");
if($_POST)
{
    echo '<pre>'; print_r($_POST); echo '</pre>';
    echo calcul($_POST['fruit'], $_POST['poids']);
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <form method="post" action=""><!-- method comment vont circuler les données, actions : url de destination --> 
    <h1>Calcul du poids des fruits</h1>
        <label for= "fruit">Fruits</label>
        <select name="fruit">
                <option value ="cerises" <?php if(isset ($_POST['fruit']) && $_POST['fruit'] =='cerises') echo 'selected'; ?>> Cerises </option>
                <option value ="bananes" <?php if(isset ($_POST['fruit']) && $_POST['fruit'] =='bananes') echo 'selected'; ?>> Bananes </option>
                <option value ="pommes"<?php if(isset ($_POST['fruit']) && $_POST['fruit'] =='pommes') echo 'selected'; ?>> Pommes </option>
                <option value ="oranges"<?php if(isset ($_POST['fruit']) && $_POST['fruit'] =='oranges') echo 'selected'; ?>> Oranges </option>
            </select><br>

            <label for="poids"> Poids</label>
    
        <input type="text" id="poids" name="poids" value="<?php if(isset ($_POST['poids'])) echo $_POST['poids']; ?>"> <br>
        <input type="submit" value="calcul"> 
    </form>
</body>
</html>