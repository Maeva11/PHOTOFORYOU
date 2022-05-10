<?php include ("include/accessAdmin.inc.php");?>
<?php include ("include/script.inc.php");


if (isset($_POST['Valider']))
{
  $mail =  htmlentities($_POST['email']);
  
  $motdepasse = md5($_POST['mdp']);
  $requete = 'SELECT id_membre from site.membre where email = :mail and mdp = :motDePasse';
  $instruction = $db->prepare($requete);
  $instruction->bindParam(':mail', $mail, PDO::PARAM_STR);
  $instruction->bindParam(':motDePasse', $motdepasse, PDO::PARAM_STR);
  $instruction->execute();
  $num = $instruction->fetchAll();
  if (count($num)>0)
  {
      $_SESSION['login'] = true;
      $query = "SELECT * from site.membre where email = '$mail';";
      $requete = $db->query($query);
      $result = $requete->fetch();
      $_SESSION['nom'] = htmlentities($result['nom']);
      $_SESSION['email'] = htmlentities($result['email']);
      $_SESSION['choixType'] = htmlentities($result['statut']);
      $_SESSION['credit'] = htmlentities($result['credit']);
      $_SESSION['pseudo'] = htmlentities($result['pseudo']);


      unset($result);
      header("Location: profil.php");
  }
  else
  {
      echo "<script>testAlertDialog();</script>";
  }
}
?>

