<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" href="deuxiemepage.css" />
   <meta charset="UTF-8"/>
<title>accesAdministration</title>
</head>

<body>

    <h1> Administrateur</h1> 
    <form action="accesadministration.php" method="post">

        <input type="password" name="mot" id="mot" /><br />
    </form> 

         <?php

           if(!empty($_POST["mot"]))
           {
                 $mot= $_POST["mot"];

                 if(strcmp($mot,"125") == 0)
                 {

                     echo'<a href="administrateur.php"><input type="button" value="Valider"></a>';
                 }
                 else
                 {
                   echo"mot de passe incorrecte <br />";
                   echo'<a href="premierpage.php"><input type="button" value="Accueil"></a>';
                  }
           }
           else
            echo"Veuillez entrer le mot de passe administrateur";
    ?>


 </body>
 </html>

