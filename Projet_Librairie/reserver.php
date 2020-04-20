<?php 
session_start();

$id=$_GET['numContact'];

  $objetPdo=new PDO('mysql:host=localhost;dbname=gestionlib','root','');

  $pdostat=$objetPdo->prepare("SELECT * FROM livre WHERE id=:num LIMIT 1");
  $pdostat1=$objetPdo->prepare("UPDATE livre set livdejareserve=livdejareserve+1 WHERE id=:num LIMIT 1");

 
  $pdostat->bindValue('num',$id,PDO::PARAM_STR);
  $pdostat1->bindValue('num',$id,PDO::PARAM_STR);

  $pdostat->execute();
  
  $pdostat1->execute();

  $contacts= $pdostat->fetch();
  $_SESSION['codeLivre']=$contacts['id'];

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

      
          <h1>VOUS DESIREZ RESERVER LE LIVRE SUIVANT :</h1>
          <br>
          <hr>
          <br>
          <br>

        <form action="confirmer.php" method="GET">
                      <table border="2px">
                    
                    <tr>
                          <th style="color: cyan">Code livre</th>
                          <td><?= $contacts['id']?></td>
                    </tr>   
                          <th style="color: cyan">Nom Auteur</th>    
                          <td><?= $contacts['NomAuteur']?></td>
                    </tr>  
                          <th style="color: cyan">Prenom Auteur</th>
                          <td><?= $contacts['PrenomAuteur']?></td>
                    </tr>      
                          <th style="color: cyan">Titre</th>
                          <td><?= $contacts['Titre']?></td>
                    </tr>
                          <th style="color: cyan">Catégorie</th>
                          <td><?= $contacts['Categorie']?></td>
                    </tr>
                          <th style="color: cyan">Numero ISBN</th>
                          <td><?= $contacts['NuISBN']?></td>
                    </tr>     

                  
              </table> 
                  <br>
             
              
              <input type="submit" name="confirmation"  value="Confirmer">
       </form>
       </div>


      
      


</body>
</html>