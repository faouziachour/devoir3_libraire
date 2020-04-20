<!DOCTYPE html>
<html>
<head>
	<title>Libary open</title>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleinterface.css">
</head>
<body>
      

      <div  class="d3">
        <a href="#"><img src="logo2.jpg" alt="" title=""></a>
      </div>

      <nav>
        <ul class="nav-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
                <li> <a href="Authentification.php">Sign in</a></li>
                <li> <a href="enrg_lecteur.php">Sign up</a></li>
                <li> <a href="index.php">Acceuil</a></li>
                
        </ul>
      </nav>
  
  <div id="d1">
        
            <h1 style="color: white">Enregistrement d'un lecteur</h1>
<hr>
        <form action="validation_lecteur.php" method="get">

            <input type="text" name="nom" placeholder="Nom...">

            <input type="text" name="prenom" placeholder="Prénom...">
           
           <input type="password" name="password" placeholder="Password...">
           
            <input type="text" name="adresse" placeholder="Adresse...">

            <input type="text" name="ville" placeholder="Ville...">
            
            <input type="text" name="code" placeholder="Code Postal...">

            <br>
            <br>
            <br>
             <input type="submit" name="enregistrer" value="Enregistrer">
             
        </form> 

  </div>


      


</body>
</html>