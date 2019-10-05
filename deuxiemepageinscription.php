<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" href="deuxiemepage.css" />
   <meta charset="UTF-8"/>
<title>inscription</title>
</head>

<body>

    <h1> INSCRIPTION </h1> 
    <form action="traitementinscription.php" method="post">


        <label for="nom">NOM</label><br />

        <input type="text" name="nom" id="nom" /><br />

        <label for="prenom">PRENOM</label><br />

        <input type="text" name="prenom" id="prenom" /><br />

        <label for="Email">EMAIL</label><br />

        <input type="Email" name="Email" id="Email" /><br />

        <label for="age">Âge</label><br />

        <input type="text" name="age" placeholder="12" SIZE="3" MAXLENGTH="3"><br /><br />

        <label for="mot">MOT DE PASSE</label><br />
        <input type="password" name="mot" id="mot" laceholder="123" SIZE="3" MAXLENGTH="3" /><br />


        <input type="submit" value="s'inscrire"><br />
    </form> 

 </body>
 </html>