<?php
	session_start();
         if(isset($_POST['connexion']))
         {
// récupération des valeurs des champs
		   $Email = $_POST["Email"];
		   $mot = $_POST["mot"];
// CONNECTION A LA BASE    
			  include("login.php");
			  $Connect = mysqli_connect($Server, $User, $Pwd, $DB);

			  $Connect->set_charset("utf8");

			  if (!$Connect)

				 echo "Connexion à la base impossible";
			 $Query1= "SELECT Email FROM Client WHERE Email= '$Email' ";//les champ 1 consernent l'adresse email et 2 conserne le mot de passe'
			 $Result1 = $Connect->query($Query1); 
		     $Data1 = mysqli_fetch_array($Result1)[0];

			 $Query2= "SELECT motDePasse FROM Client WHERE motDePasse= '$mot' ";
			 $Result2 = $Connect->query($Query2); 
			 $Data2 = mysqli_fetch_array($Result2)[0];

			 if(($Data1[0]=$Email)&& ($Data2[0]=$mot))
			 {
			     $Query1= "SELECT NomClient FROM Client WHERE Email= '$Email' AND motDePasse= '$mot'";
			     $Result1 = $Connect->query($Query1); 
				 $nom=  mysqli_fetch_array($Result1)[0];
				 
				 $_SESSION['NomClient']=$nom;
			 }
	    }
		if(isset($_POST['deconnexion'])){
			
			session_destroy();
		}



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="premierpage.css" />
    <script src="inscription.js"></script>
  
    <title>Ludothèque</title>
</head>
    <body>
	 <header>	
	     
		  
			<img src="image/ludotheque.png" alt="ludotheque"/>
		<nav>
            <ul>
			    <li><a href="recherche.php">Recherche</a></li>
                <li><a href="recherche.php">Emprunter</a></li>
                <li><a href="information.php">Information</a></li>
				<li><a href="#" onclick="javascript:openWindow();">Inscription</a></li>
				<li><a href="accesadministration.php">Administrateur</a></li>
				
            </ul>
        </nav>
		   
			 <?php
				header('premierpage.php');
				if(isset($_SESSION['NomClient'])){
					echo "BIENVENUE ", $_SESSION['NomClient'];
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
            <h1>Ludothèque</h1>
        

            <section>

                <MARQUEE scrollamount="7">
                    <IMG src="image/image4.png">
                    <IMG src="image/image2.jpg">
                    <IMG src="image/image3.jpg">
                    <IMG src="image/image1.jpg">
                    <IMG src="image/image5.png">
                    <IMG src="image/image6.jpg">
                    <IMG src="image/image7.jpg">

                </MARQUEE>

            </section>

        <footer>
            <div id="contac">
                <h2>Suivez nous</h2>
                <p>
                  16 Boulevard Charles Nicole <br />
                  72000 le mans<br />
                  +33(0)0648182916
                <p><a href="mailto:madinevasimons@gmail.com">madinevasimons@gmail.com</a>
                </p>
            </div>
            <div id="partage">
                <h2>Partagez avec nous </h2>
             <p><img src="image/facebook.png" alt="Facebook" /><img src="image/twitter.png" alt="Twitter" /><img src="image/vimeo.png" alt="Vimeo" /><img src="image/flickr.png" alt="Flickr" /><img src="image/rss.png" alt="RSS" /></p>
            </div>
            <div id="nous">
                <h2>A propos de nous</h2>
                <p>
                    Une équipe de professionnels vous accueille,<br /> vous conseille et vous explique les règles de jeu.
                </p>
            </div>

        </footer>


    </body>
</html>