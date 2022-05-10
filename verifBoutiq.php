<?php 
include_once("include/accessAdmin.inc.php");
include_once("include/fonction.inc.php");

// -- PHP POUR AJOUT DANS BDD --//
// VERIFICATION ADMIN //
if(!internauteEstPhotographe()||!internauteEstConnecte())
{
    header("location:connexion.php");
    exit();
}

$reference = $_POST['reference'];
$catego = $_POST['categorie'];
$titre = $_POST['titre'];
$description = $_POST['description'];
$prix=$_POST['prix'];
  
if (isset($_POST['produitok']))
{  

  // ajouter une photo
  $img= $_FILES["photo"]["name"];
  $lien ="images/$img";

  move_uploaded_file($_FILES["photo"]["tmp_name"], $lien);

    $valid=TRUE;

  if ($valid)
  {
    // On prépare la requête pour ajouter en BDD
    $requete = $db->prepare('INSERT INTO produit (reference, categorie, titre, description, prix, photo) values (:reference, :catego, :titre, :description, :prix, :photo)');
    $requete->bindParam(':reference', $reference, PDO::PARAM_STR);
    $requete->bindParam(':catego', $catego, PDO::PARAM_STR);
    $requete->bindParam(':titre', $titre, PDO::PARAM_STR);
    $requete->bindParam(':description', $description, PDO::PARAM_STR);
    $requete->bindParam(':prix', $prix, PDO::PARAM_STR);
    $requete->bindParam(':photo', $img, PDO::PARAM_STR);
    $sql=$requete->fetchall(); 

    try
    {
      $requete->execute();
      header("Location:boutique.php");
    }
    catch(PDOException $e)
    {
      echo "<br/><h1> Erreur : </h1>" . $e->getMessage();
    }
  }
  else
  {
    header("Location:testnon.php");
  }
}
else
{
  header("Location:inscription.php");
}
?>