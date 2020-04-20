<?php
$id=$_GET['id'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$titre=$_GET['titre'];
$categorie=$_GET['categorie'];
$isbn=$_GET['isbn'];

    
    if(isset($_GET['enregistrer'])){
        $objetPdo=new PDO('mysql:host=localhost;dbname=gestionlib','root','');
        $stat=$objetPdo->prepare("INSERT INTO livre VALUES(?,?,?,?,?,?)");
        $stat->bindValue(1,$id,PDO::PARAM_STR);
        $stat->bindValue(1,$nom,PDO::PARAM_STR);
        $stat->bindValue(2,$prenom,PDO::PARAM_STR);
        $stat->bindValue(3,$titre,PDO::PARAM_STR);
        $stat->bindValue(4,$categorie,PDO::PARAM_STR);
        $stat->bindValue(5,$isbn,PDO::PARAM_STR);

        $stat->execute();
    }

?>
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


      <div id="d2">


        <h1 style="">Validation d'un livre</h1>

        <hr>
            <br>
    <table>
                <tr>
                    <td>Numero de livre :</td>
                    <td><?php echo" <b style='color:aqua;'>$nom </b>"?></td>
                </tr>
                
                <tr>
                    <td>Nom de l'auteur :</td>
                    <td><?php echo" <b style='color:aqua;'>$nom </b>"?></td>
                </tr>
                <tr>
                    <td>Prénom de l'auteur  : </td>
                    <td><?php echo "<b style='color:aqua;'>$prenom </b> "?></td>
                </tr>
                <tr>
                    <td>Titre    : </td>
                    <td><?php echo "<b style='color:aqua;'>$titre </b> "?></td>
                </tr>
                <tr>
                    <td>Catégorie      : </td>
                    <td><?php echo "<b style='color:aqua;'> $categorie </b> "?></td>
                </tr>        
                <tr>
                    <td>Numéro ISBN :</td>
                    <td><?php echo "<b style='color:aqua;'>$isbn </b> "?></td>
                </tr>
    </table> 
  </div>
  

</body>
</html>