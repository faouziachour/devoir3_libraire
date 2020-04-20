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
      
            <h1 style="color: white">Enregistrement d'un livre</h1>
<hr>
        <form action="validation_livre.php" method="">

            <input type="text" name="id" placeholder="Numéro de livre...">

            <input type="text" name="nom" placeholder="Nom de l'auteur...">

            <input type="text" name="prenom" placeholder="Prénom de l'auteur...">
           
            <input type="text" name="titre" placeholder="Titre...">

                <select id="categorie" name="categorie">
                         <option >Catégorie...</option>
                         <option value="Roman">Roman</option>
                         <option value="Album">Album</option>
                         <option value="Documentaire">Documentaire </option>
                         <option value="Edit de presse">Edit de presse </option>
                </select>
            

            <input type="text" name="isbn" placeholder="Numero ISBN...">

            <br>
            <br>
            
            <br>
            <input type="submit" name="enregistrer" value="Enregistrer">

        </form> 
      
  </div>


</body>
</html>