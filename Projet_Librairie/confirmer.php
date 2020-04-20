<?php
static $id="";
session_start();
$codeLivre=$_SESSION['codeLivre'];
$codeLecteur=$_SESSION['nom'];

      
      if($codeLivre=='KaElRo58'){ $id=10027;}
      if($codeLivre=='AsIsSc08'){ $id=19028;}
      elseif($codeLivre=='WaAlRo3'){  $id=56105;}
      elseif($codeLivre=='KuMiRo38'){ $id=26628;}
      elseif($codeLivre=='BaJaJu63'){ $id=75711;}
      elseif($codeLivre=='VeJuRo22'){ $id=80090;}
      elseif($codeLivre=='DiPhSc43'){ $id=00021;}

$id1="LiBa111";
$id2=$id1.$id;


$date = date("d-m-Y");
function add_date($givendate,$day,$mth,$yr) {
      $cd = strtotime($givendate);
      $newdate = date('d-m-Y', mktime(date('h',$cd),
      date('i',$cd), date('s',$cd),date('m',$cd)+$mth,
      date('d',$cd)+$day, date('Y',$cd)+$yr));
      return $newdate;
              }
$date1=add_date($date,5,0,0);

if(isset($_GET['confirmation'])){

      $objetPdo=new PDO('mysql:host=localhost;dbname=gestionlib','root','');
      $pdostat=$objetPdo->prepare("INSERT INTO emprunts VALUES(?,?,?,?,?)");
      
      $pdostat->bindValue(1,$id2,PDO::PARAM_STR);
      $pdostat->bindValue(2,$date,PDO::PARAM_STR);
      $pdostat->bindValue(3,$date1,PDO::PARAM_STR);
      $pdostat->bindValue(4,$codeLivre,PDO::PARAM_STR);
      $pdostat->bindValue(5,$codeLecteur,PDO::PARAM_STR);

     $pdostat->execute();
     



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


      <div id="d6">
            
        <h4>Votre réservation est confirmée sous le numero :<?php echo "<b style='color:aqua;'> $id2 </b> ";?> </h4>
        <h4>Date de réservation :  <?php echo "<b style='color:aqua;'> $date </b> " ?></h4>
        <h4>Date du retour : <?php echo "<b style='color:red;'> $date1 </b> " ?> </h4>

        <br>
        <h4>Vous pouvez revenir a la liste des livres disponible à la réservation <a style="color: red" href="apres_auth.php"> cliquant ici</a><h4>

        </div>


      
      


</body>
</html>