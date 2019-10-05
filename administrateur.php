
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8" />
    <link rel="stylesheet" href="premierpage.css" />
    <script src="inscription.js"></script>
  
    <title>administrateur</title>
</head>
    <body>
        <header>
	
		     <img src="image/ludotheque.png" alt="ludotheque"/>
			 
			<nav>
            <ul>
                <li><a href="premierpage.php">Accueil</a></li>
                <li><a href="recherche.php">visualiser les Jeux</a></li>
				<li><a href="deuxiemepageinscription.php">Inscrire Un Client </a></li>

            </ul>
        </nav>
        </header>
		     <form action="administrateur.php" method="post">
					 
                  <h1> Ajouter UN JEU ou SUPPRIMER UN JEU</h1>
					  <div id="corpform">
						<label for="nom">Nom</label><br />
						<input type="text" name="nom" id="nom" /><br />
                        
                         <label for="age">Age</label><br />
                           <div id="age">
                             <select name="age" id="age"><br />
                                 <option>de  0   a 10 ans   </option>
								 <option>de  10  a 18 ans  </option>
								 <option>de  18  a  50 ans  </option>
								 <option>de  50  a    95 ans </option>
								 <option>de  5   a    95 ans </option>
			                 </select><br />
                          	</div>

							 <label for="type">Type de JEU</label><br />
							<div id="jeu">
                              <select name="type" id="type"><br />
                                 <option>Question/Reponses</option>
								 <option>regle/Parcours</option>
								 <option>Regle/Reflexion/Strategie</option>
								 <option>Regle/Association</option>
								 <option>Jeux Videos</option>
								 <option>jeux console</option>

			                  </select><br />
                          	</div>
                        <label for="description">Description du Jeu</label><br />
						<input type="text" name="description" id="description" /><br />

						<label for="nom">image</label><br />
						<input type="text" name="image" id="image" /><br />

                        <label for="nbt">NbJeuxTotal</label><br />
						<input type="number" name="nbt" id="nbt" /><br />

                        <label for="nbr">NbJeuxDispo</label><br />
					  	<input type="number" name="nbr" id="nbr" /><br />
					 </div>
					  <div id="disposition">
					  	   <div id="ajout">
						         <input type="submit" name= "ajouter" value="Ajouter"><br />
						    </div>
                        <input type="submit" name= "supprimer" value="Supprimer"><br />
                      </div>
			       
					   
				      <p> pour supprimer un jeu il vous faut entrer le nom du jeu <br/>
					     et cliquer sur supprimer</p>
						
                  </form>
 
     
<?php

  if(isset($_POST['ajouter']))
	 {
		
		
	      if(!empty($_POST["nom"])&&!empty($_POST["age"])&&!empty($_POST["type"])&&!empty($_POST["description"])&&!empty($_POST["nbt"])&&!empty($_POST["nbr"])&&!empty($_POST["image"]))
		  {

// récupération des valeurs des champs
			   $nom = $_POST["nom"];
			   $age = $_POST["age"];
			   $type = $_POST["type"]; 
			   $description= $_POST["description"];
			   $nbt= $_POST["nbt"];
			   $nbr= $_POST["nbr"];
			   $image=$_POST["image"];
           
// CONNECTION A LA BASE
         include("login.php");

			  $Connect = mysqli_connect($Server, $User, $Pwd, $DB);

			  $Connect->set_charset("utf8");

			  if (!$Connect)

				 echo "Connexion à la base impossible";
//requet pour ajouter un jeu
			  $Query= "INSERT INTO Jeux (Nom, Age, TypeJeux, DescriptionJeu, NbJeuxTotal, NbJeuxDispo, image) VALUES ('$nom','$age','$type','$description',$nbt,$nbr,'$image')" ;
	          $result=$Connect->query($Query);
			 echo" le jeu a bien ete ajouter";
			  
		}
	    else
		   echo "veuillez remplir tous les champs pour ajouter un jeu";
	}

 if(isset($_POST['supprimer']))
	 {
	      if(!empty($_POST["nom"]))
		  {

// récupération des valeurs des champs

			   $nom = $_POST["nom"];
			            
// CONNECTION A LA BASE
         include("login.php");

			  $Connect = mysqli_connect($Server, $User, $Pwd, $DB);

			  $Connect->set_charset("utf8");

			  if (!$Connect)

				 echo "Connexion à la base impossible";
//requet pour supprimer un jeu
			  $Query= " DELETE FROM Jeux WHERE Nom='$nom'";
	          $result=$Connect->query($Query);
			  echo"le jeu a bien ete supprimer";
		}
	    else
		   echo "veuillez entrer le nom du jeu à supprimer";
	}
?>
</body>
</html>
