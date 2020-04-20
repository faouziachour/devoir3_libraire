<?php
$message="";
session_start();


if(isset($_GET['valider'])){

  $conn=new PDO('mysql:host=localhost;dbname=gestionlib','root','');
        
  $query ="SELECT * FROM lecteur WHERE Nom=:nom AND Password=:password ";

  $result=$conn->prepare($query);

  $result->bindValue('nom',$_GET['nom'],PDO::PARAM_STR);
  $result->bindValue('password',$_GET['password'],PDO::PARAM_INT);


  //$result=mysqli_query($conn,$query);

if($result->execute()){
        $row =$result->fetch();
      if($row['Nom']==$_GET['nom'] && $row['Password']==$_GET['password']){ 
        $_SESSION['codelecteur'] =$row['codeLecteur'];
        $_SESSION['nom'] =$row['Nom'];
        header('Location:apres_auth.php');
      }
    
  
else{
        $message= "Nom d'utilisateur ou Mot de passe Invalide";
      }
}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
        
            <h2 style="color: white">Connexion à LIBARY OPEN</h2>
            <h4 style="color: white">Si vous déjà un compte,veuillez vous identifier</h4>
      <hr>
<br>
        <form action="" method="get">

            <input type="text" name="nom" placeholder="Entrer votre Nom... ">

            
           <input type="password" name="password" placeholder="Entrez votre Password...">
           
            <br>
              
            <span class="text-center" style="color: red;">
                                <?php echo $message;  ?>
                    </span>
            <br>
            <br>
             <input type="submit" name="valider" value="Login">
             
            <br>
             
             <h4 style="color: black">Vous ne possédez pas un compte?</h4>
            <h3><a style="color: red" href="enrg_lecteur.php"> Sign up </a></h3>

           </form> 

  </div>


      


</body>
</html>