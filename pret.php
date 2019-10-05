<?php
	session_start();
?>

<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" href="deuxiemepage.css" />
   <meta charset="UTF-8"/>
<title>reservation</title>
</head>

<body>

    <h1> Reservation </h1> 
    <form action="pret.php" method="post">


        <label for="nom">Votre Nom</label><br />
        <input type="text" name="nom" id="nom" /><br />

		 <label for="nombre">Nombre de jeux a reserver</label><br />
		<input type="number" name="nombre" id="nombre" /><br />

		<label for="idjeu">Identifianbt du jeu</label><br />
		<input name="idjeu" value="<?php echo $_GET['id']; ?>" readonly/><br />


		 <input type="submit" name "reserver" value="reserver"><br />

     </form>
   <?php
        include("login.php");
		 $Connect = mysqli_connect($Server, $User, $Pwd, $DB);


	 //tester si les cases du formulaire ne sont pas vides
    if(!empty($_POST["nom"])&&!empty($_POST["nombre"]) && !empty($_POST["idjeu"])  )
         {
// récupération des valeurs des champs
           $nom = $_POST["nom"];
		   $nombre=$_POST["nombre"];
		   $idjeu = $_POST['idjeu'];
 
		  
		   //recuperation de la Date
          
          date_default_timezone_set('Europe/Paris');
          date_default_timezone_get();

          $dat=date("Y-M-d");
	       
           //calcule de la date de retours
           $datR=date('Y-m-d', strtotime("$dat +30 day"));


            $Query2= "SELECT NomClient FROM Client WHERE NomClient= '$nom' ";// selectionne le nom du client dans ma base de donne
			$Result2 = $Connect->query($Query2); 
			$Data2 = mysqli_fetch_array($Result2)[0];

       if(isset($Data2)){

		    $Query0= "SELECT NbJeuxDispo FROM Jeux WHERE ID_Jeu='$idjeu'";// selectionne le nombre de jeux disponible
		    $Result0 = $Connect->query($Query0); 
		    $Data = mysqli_fetch_array($Result0)[0];
			if($Data>0){//verifie qu'il soit disponible avant que l'utilisateur puisse reserver
				if(($nombre>0) && ($nombre<3))
				{
					$dat=strftime('%Y-%m-%d', strtotime("$dat"));//formatage de la date

					$Query= "INSERT INTO Pret (Nom_Client, ID_Jeu, DateReservation, DateRetour) VALUES ('$nom','$idjeu','$dat','$datR')";
			
					$Result = $Connect->query($Query);

					$Query1= "UPDATE Jeux SET NbJeuxDispo = NbJeuxDispo-$nombre WHERE ID_Jeu='$idjeu' ";
					$Result1 = $Connect->query($Query1);
			
					echo"<title> demande envoyée</title>";
					echo"</br> ";
					echo"reservation reussite </br>";
					echo"Vous avez reserver le jeu identifiant ".$idjeu."</br>";
					echo"la date de retours du jeu est: ".$datR."</br>";
							  
				}
					else
					 echo" Notez que vous ne pouvez reservez que 3 jeux au maximum</br></p>";
			}

			else 
	           echo"le jeu n'est pas disponible!!!";
       }
	   else
	    echo"vous devez vous inscrire ou etre connecter avant de reserver un jeu";
	}
	else
	  echo"veuillez remplir tous les champs";
	?>




</body>
</html>