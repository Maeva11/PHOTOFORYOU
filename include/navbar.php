<?php include_once("fonction.inc.php");?>
<?php include_once("accessAdmin.inc.php");?>

<!DOCTYPE html>  
<html>  
 <head>  
    <link rel="stylesheet" type="text/css" href="css/navbar.css"/>
 </head>  
 <body>  
 <nav class="navbar navbar-dark bg-dark" id="menu">

    <ul class="navbar-nav">
      <li class="nav-item active"> 
        <img class="logo" src="images/logo1.png" /> <br><br>
      </li> 

<?php
      if (internauteEstClient()){
      echo '
      <li>
        <a class="nav-link" href="index.php"> &#127968; Accueil</a> 
      </li> 
      <li class="nav-item">
        <a class="nav-link "href="boutique.php"> &#127978;Boutique</a>
      </li>
      <li class="nav-item">
       <a class="nav-link "href="profil.php"> &#129465;Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="panier.php">	&#129530; Panier</a>
      </li>
      <li class="nav-item">
      <a class="nav-link "href="deco.php"> &#128075; Déconnexion</a>
    </li>';
    }
    if (internauteEstPhotographe()){
      echo '
      <li>
        <a class="nav-link" href="index.php"> &#127968; Accueil</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link "href="profil.php"> &#129465;Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "href="boutique.php"> &#127978;Boutique</a>
      </li>
      <li class="nav-item">
      <a class="nav-link "href="gestion_boutique.php"> ➕ ajout</a>
    </li>
      <li class="nav-item">
      <a class="nav-link "href="deco.php"> &#128075;Déconnect</a>
    </li>'; 
    }
    if (internauteNonConnecte()) {
        echo ' 
        <li>
          <a class="nav-link" href="index.php"> &#127968; Accueil</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php"> &#128190;Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connexion.php">&#x1F517;Connexion</a>
        </li>
        <li class="nav-item">
        <a class="nav-link "href="boutique.php"> &#127978;Boutique</a>
      </li>';
      }
        ?>
    </ul>
</nav>
</body>
</html>