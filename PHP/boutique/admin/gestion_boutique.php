<?php
require_once("../inc/init.inc.php");

//---------------- VERIFICATION ADMIN
if(!internauteEstConnecteEtEstAdmin()) // si l'internaute n'est pas admin, il n'a rien à faire sur les pages d'administration
{
    header("location:" . URL . "connexion.php");
}

//---------------- ENREGISTREMENT PRODUIT
if(!empty($_POST))
{
    debug($_FILES);
    if(!empty($_FILES['photo']['name']))
    {
        $nom_photo = $_POST['reference'] . '-' . $_FILES['photo']['name'];
        //echo $nom_photo;
        $photo_bdd = URL . "photo/$nom_photo";
        //echo $photo_bdd;
        $photo_dossier = RACINE_SITE . "photo/$nom_photo";
        echo $photo_dossier;
        copy($_FILES['photo']['tmp_name'], $photo_dossier);
    }
}

require_once("../inc/header.inc.php");
?>

<!-- Réaliser un formulaire HTML correspondant à la table produit de la BDD -->
<form method="post" action="" enctype="multipart/form-data" class="col-md-8 col-md-offset-2">
<h1 class=" alert text-center">Ajouter un produit</h1> 
  
  <div class="form-group">
    <label for="reference">Références</label>
    <input type="text" class="form-control" id="reference" name="reference" placeholder="Références">
  </div>
  <div class="form-group">
    <label for="categorie">Catégorie</label>
    <input type="text" class="form-control" id="categorie" name="categorie" placeholder="Catégorie">
  </div>
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="couleur">Couleur</label>
    <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Couleur">
  </div>
  <div class="form-group">
    <label for="taille">Public</label>
    <select class="form-control" name="taille">
    <option value= "m">Homme</option>
    <option value="f">Femme</option>
    <option value="mixte">Mixte</option>
    </select>
  </div>
  <div class="form-group">
    <label for="public">Taille</label>
    <select class="form-control" name="public">
    <option value= "xs">XS</option>
    <option value="s">S</option>
    <option value="m">M</option>
    <option value="l">L</option>
    <option value="xl">XL</option>
    </select>
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo">
  </div>
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="text" class="form-control" id="prix" name="prix" placeholder="Prix">
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <textarea type="text" class="form-control" id="stock" name="stock" placeholder="Stock"></textarea> 
  </div>
  <button type="submit" class="btn btn-block btn-primary">Submit</button>
</form>

<?php
require_once("../inc/footer.inc.php");
?>