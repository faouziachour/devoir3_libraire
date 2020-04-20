<?php
  session_start();
$nom=$_SESSION['nom'];


$objetPdo=new PDO('mysql:host=localhost;dbname=gestionlib','root','');

$pdostat=$objetPdo->prepare('SELECT * FROM livre ');
  

  $pdostat->execute();

  $contacts= $pdostat->fetchAll();


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
  
  <div id="d5">
        <h1 style="text-align: center">BIENVENUE <?php echo"<b style='color:aqua;'> $nom </b>";?></h1>
        
        <h2 style="text-align: center">Voici la liste des ouvrages disponibles à la réservation</h2>
         <br>      
        <hr>
         <br>
         <table border="2px">
                  
                          <th style="color: red ;">Code livre</th>
                          <th style="color: red ;">Nom Auteur</th>
                          <th style="color: red ;">Prenom Auteur</th>
                          <th style="color: red ;">Titre</th>
                          <th style="color: red ;">Catégorie</th>
                          <th style="color: red ;">Numero ISBN</th>
                          <th style="color: red ;"></th>

                    
                  
                <?php foreach ($contacts as $contact ): ?>
                      
                   
                    <tr>
                          <td style="width: 120px"><?= $contact['id']?></td>
                          <td style="width: 120px"><?= $contact['NomAuteur']?></td>
                          <td style="width: 120px"><?= $contact['PrenomAuteur']?></td>
                          <td style="width: 120px"><?= $contact['Titre']?></td>
                          <td style="width: 120px"><?= $contact['Categorie']?></td>
                          <td style="width: 120px"><?= $contact['NuISBN']?></td>
                          <td style="width: 120px"><a href="reserver.php?numContact=<?php echo $contact['id'] ?>"><input class="submit" type="submit" name="reserver.php"  value="Réserver"></a></td>
                    </tr>
                    <?php endforeach; ?>
            
                  
              </table>              


        
                    
                  
            
  </div>


      


</body>
</html>