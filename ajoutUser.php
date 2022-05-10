<?php 
include_once("include/accesModif.inc.php");
if (isset($_POST['Valider']))
{  
    $pseudo = $_POST['pseudo'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['email'];
    $mdp=md5($_POST['mdp']);
    $civilite=$_POST['civilite'];
    $ville=$_POST['ville'];
    $CP=$_POST['code_postal'];
    $adresse=$_POST['adresse'];
    $type = $_POST['choixType'];

    $valid=TRUE;

  if ($valid)
  {
    // On prépare la requête pour ajouter en BDD
    $instruction = $db->prepare('INSERT INTO membre (pseudo,mdp, nom, prenom, email, civilite, ville, code_postal, adresse, statut) VALUES (:pseudo, :mdp, :nom, :prenom, :email, :civilite, :ville, :code_postal, :adresse, :statut)');
    $instruction->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $instruction->bindParam(':nom', $nom, PDO::PARAM_STR);
    $instruction->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $instruction->bindParam(':email', $mail, PDO::PARAM_STR);
    $instruction->bindParam(':mdp', $mdp, PDO::PARAM_STR);
    $instruction->bindParam(':civilite', $civilite, PDO::PARAM_STR);
    $instruction->bindParam(':ville', $ville, PDO::PARAM_STR);
    $instruction->bindParam(':code_postal', $CP, PDO::PARAM_STR);
    $instruction->bindParam(':adresse', $adresse, PDO::PARAM_STR);
    $instruction->bindParam(':statut', $type, PDO::PARAM_STR);

    try
    {
      $instruction->execute();
      header('Location: inscOK.php');
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