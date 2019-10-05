

<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
   <meta charset="UTF-8"/>
<title>page de traitement</title>
</head>

<body>

    <h1> INSCRIPTION</h1>
    <?php

	 //tester si les cases du formulaire ne sont pas vides
         if(!empty($_POST["nom"])&&!empty($_POST["prenom"])&&!empty($_POST["Email"])&&!empty($_POST["age"])&&!empty($_POST["mot"]))
         {
// récupération des valeurs des champs
           $nom = $_POST["nom"];
           $prenom = $_POST["prenom"];
           $age = $_POST["age"];
		   $Email = $_POST["Email"];
		   $mot = $_POST["mot"];
// CONNECTION A LA BASE
         include("login.php");

			  $Connect = mysqli_connect($Server, $User, $Pwd, $DB);

			  $Connect->set_charset("utf8");

			  if (!$Connect)

				 echo "Connexion à la base impossible";
               $Query= "SELECT Email FROM Client WHERE Email= '$Email' ";
			   $Result = $Connect->query($Query); 
			   $Data = mysqli_fetch_array($Result)[0];
			   if($Email != $Data[0])
			   {

			   	   $Query= "INSERT INTO Client (NomClient, AgeClient, motDePasse, Email) VALUES ('$nom','$age','$mot','$Email')";
				   $Result = $Connect->query($Query);
				
				   echo"<title> demande envoyée</title>";
			   }
			   else
			   {
			     echo "adresse email invalide!";
				}

				echo 'Bienvenus sur le site ludhotheque
				 merci pour votre inscription!
				 vous pouvez vous connecter <a href="premierpage.php">ici</a> ? <b />';		 
		}

		 else
			 echo"Toutes les cases du formulaire ne sont pas remplies";
	?>

</body>
</html>