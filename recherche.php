<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" href="deuxiemepage.css" />
   <meta charset="UTF-8"/>
<title>recherche</title>
</head>

<body>

      <h1> RECHERCHE </h1> 
 <form action = "recherche.php" method="post">

       <input type="text" name="rechercher"/><br />
	   <input type = "submit" value = "rechercher"><br />
	   <p> Pour rechercher un jeu veuillez entrer le nom du jeu<p>
</form>

 <?php
include("login.php");

  $Connect = mysqli_connect($Server, $User, $Pwd, $DB);

  $Connect->set_charset("utf8");

  if (!$Connect)

     echo "Connexion à la base impossible";
   if(isset($_POST["rechercher"]) && $_POST['rechercher'] !="")
     {
	    $Query = "SELECT * FROM `Jeux` WHERE Nom like '%".$_POST["rechercher"]."%'";
		$Result = $Connect->query($Query);
		
		echo"<table>
		  <thead>
	       <tr>
		     <th>Image</th>
		     <th>Nom </th>
			 <th>Age</th>
			  <th>Type de jeu</th>
			 <th>Description </th>
			 <th>Nombre total du jeu</th>
			 <th>Nombre du jeu restant</th>
			 <th>Reservation</th>
			 </tr>
	     </thead>";
	 	
	    

	 while ($Data = mysqli_fetch_array($Result) )
    {
	    echo'<tr>
		   <td><img src="'.$Data[7].'" alt="image non disponible"></td>
		   <td>'.$Data[1].'</td>
		   <td>'.$Data[2].'</td>
		   <td>'.$Data[3].'</td>
		   <td>'.$Data[4].'</td>
		   <td>'.$Data[5].'</td>
		   <td>'.$Data[6].'</td>
		   <td><a href="pret.php"><input type="button" value="Reserver"></a></td>
		   </tr>';
	}
	 echo"</table>";
     }

	 else{
	  $Query1 = "SELECT * FROM `Jeux`";
	 $Result1 = $Connect->query($Query1); 

	 echo"<table>
		  <thead>
	       <tr>
		     <th>Image</th>
		     <th>Nom </th>
			 <th>Age</th>
			  <th>Type de jeu</th>
			 <th>Description </th>
			 <th>Nombre total du jeu</th>
			 <th>Nombre du jeu restant</th>
			 <th>Reservation</th>
			 </tr>
	     </thead>";
	 	
	  

	 while ($Data = mysqli_fetch_array($Result1) )
    {
	  echo'<tr>
	        <td><img src="'.$Data[7].'" alt="image non disponible"></td>
		   <td>'.$Data[1].'</td>
		   <td>'.$Data[2].'</td>
		   <td>'.$Data[3].'</td>
		   <td>'.$Data[4].'</td>
		   <td>'.$Data[5].'</td>
		   <td>'.$Data[6].'</td>
		  
		   <td><a href="pret.php?id='.$Data[0].'"><input type="button" value="Reserver"></a></td>
		   </tr>';
	}
	 echo"</table>";
  }
	mysqli_close($Connect);

 ?>

 </body>
 </html>