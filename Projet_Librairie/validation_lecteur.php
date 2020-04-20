<?php
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$password=$_GET['password'];
$adresse=$_GET['adresse'];
$ville=$_GET['ville'];
$code=$_GET['code'];

    
    if(isset($_GET['enregistrer'])){
        $objetPdo=new PDO('mysql:host=localhost;dbname=gestionlib','root','');
        $stat=$objetPdo->prepare("INSERT INTO lecteur VALUES(NULL,?,?,?,?,?,?)");

        $stat->bindValue(1,$nom,PDO::PARAM_STR);
        $stat->bindValue(2,$prenom,PDO::PARAM_STR);
        $stat->bindValue(3,$adresse,PDO::PARAM_STR);
        $stat->bindValue(4,$ville,PDO::PARAM_STR);
        $stat->bindValue(5,$code,PDO::PARAM_INT);
        $stat->bindValue(6,$password,PDO::PARAM_INT);
        
        $stat->execute() ;
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

      <div id="d1">


        <h1 style="">Validation d'un lecteur</h1>

            <hr>

           <br>
    <table>
                <tr>
                    <td>Nom      :   </td>
                    <td><?php echo" <b style='color:aqua;'>$nom </b>"?></td>
                </tr>
                <tr>
                    <td>Prénom    :  </td>
                    <td><?php echo "<b style='color:aqua;'>$prenom </b> "?></td>
                </tr>
                <tr>
                    <td>Adresse    : </td>
                    <td><?php echo "<b style='color:aqua;'>$adresse </b> "?></td>
                </tr>
                <tr>
                    <td>Ville      : </td>
                    <td><?php echo "<b style='color:aqua;'> $ville </b> "?></td>
                </tr>        
                <tr>
                    <td>Code Postal :</td>
                    <td><?php echo "<b style='color:aqua;'>$code </b> "?></td>
                </tr>
    </table> 
               <h5> Vous étes enregistré dans la base la bibiolithéque.</h5>
               <h5> Vous avez maintenant la possibilité de réserver des livres 
                <a style="color: red" href="Authentification.php"> Identifiant ici </a></h5>
                  
            

  </div>
  

</body>
</html>