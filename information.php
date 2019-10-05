<?php
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" href="premierpage.css" />
   <meta charset="UTF-8"/>
   <script src="inscription.js"></script>

<title>recherche</title>
</head>

<body>
    <header>  
       
      
      <img src="image/ludotheque.png" alt="ludotheque"/>
    <nav>
        <ul>
          <li><a href="premierpage.php">Accueil</a></li>
          <li><a href="recherche.php">Recherche</a></li>
          <li><a href="pret.php">Emprunter</a></li>
        <li><a href="#" onclick="javascript:openWindow();">Inscription</a></li>  
        </ul>
    </nav>

    <?php
        header('premierpage.php');
        if(isset($_SESSION['NomClient'])){
          echo "Bonjour ", $_SESSION['NomClient'];
          echo '<form action="premierpage.php" method="post">
          <input type="submit" name="deconnexion" value="deconnexion"/>
          </form>';
        }
        else{
          echo'<form action="premierpage.php" method="post">

        <label for="Email">Email</label><br />

        <input type="Email" name="Email" id="Email" /><br />
    
        <label for="mot">Mot de passe</label><br />
        <input type="password" name="mot" id="mot" laceholder="123" SIZE="3" MAXLENGTH="3" /><br />


        <input type="submit" name="connexion" value="connexion"><br />
      </form>';
        }
       ?> 
      </header>  

               <h2>La ludothèque, c'est...</h2>


               <ul>
                  <li>Un lieu de découverte, d’échanges et de rencontres autour du jeu et du jouet.
</li>
                  <li>Un espace d’information et de documentation sur les pratiques ludiques.
</li>
                  <li>- Un lieu ressources ludiques départemental.
</li>
              </ul>

               <h3>Objectifs</h3>
               <ul>
                  <li>Promouvoir le jeu en offrant à chacun la possibilité de le découvrir librement et à son rythme.
</li>
                  <li>Favoriser les échanges inter générationnels et culturels autour de la convivialité et du plaisir de jouer.
</li>
                  <li>Contribuer à la reconnaissance du jeu comme objet culturel.
</li>
              </ul>
               <h3>Moyens</h3>
                  <ul>
                       <li>
                         Mise à disposition des jeux sur place ou à emprunter.

                       </li>
                       <li>- Animations d'ateliers thématiques et d'évènements ludiques, en particulier autour de la  création, de la découverte, de la mise en scène des jeux.
</li>

                       <li>EMPRUNTER TOUTES SORTES DE JEUX
</li>
                   </ul>

                      <h3>Pour voir la liste des jeux disponibles ou chercher un jeu c'est <a href="recherche.php">ici</a> </h3>
                      
                      <h3>Pour voir la liste des jeux à venir c'est  <a href="Jeuxprochains.php">ici</a> </h3>





</body>
</html>

 