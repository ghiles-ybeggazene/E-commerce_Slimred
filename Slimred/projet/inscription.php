
<?php session_start (); ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>www.slimred.dz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/raf.css">
  <link rel="stylesheet" href="./css/slidshow.css">
  <script src="css/jquery.min%20(2).js"></script>
  <script src="js/npm.js"></script>
    <script src="js1/animated-menu.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 20px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<?php include('header.php'); ?>

<?php
if (isset($_POST['pseudo']) AND isset($_POST['mdp']) AND isset($_POST['email'])AND isset($_POST['adress']) )
{

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=slimred;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
	$pseudo=$_POST['pseudo'];
	$mdp=$_POST['mdp'];
    $mdp1=$_POST['mdp1'];
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
    $adress=$_POST['adress'];
    
	 if ($_POST['mdp'] == $_POST['mdp1']){ 
         
         
         
         
	$sth = $bdd->prepare('SELECT PSEUDO FROM client WHERE PSEUDO = :pseudo');
	$sth->execute(array('pseudo' => $pseudo));
	$rows = $sth->rowCount();

    if($rows == 1)
        {
				$_SESSION['deja']=$_SESSION['deja']+1;
                header("location:inscriptiontop.php");
        
            echo"ce pseudo existe deja";
		}




	$req = $bdd->prepare('INSERT INTO client(PSEUDO, MDP, NOM, PRENOM, EMAIL,ADRESS) VALUES(:pseudo, :mdp, :nom, :prenom, :email,:adress)');
	$req->execute(array(
		'nom' => $nom,
		'prenom' => $prenom,
        'pseudo' => $pseudo,
		'mdp' => $mdp,
		'email' => $email,
        'adress' => $adress
	));

	echo 'Vous Avez êtez bien enregistrés  ' . $_POST['pseudo'];
header('location:login.php');
    

}
else
{
    echo "<script>alert('les deux mot de passe ne sont pas identiques.')</script>";  

	 header('location:inscriptiontop.php');
}
}
?>
</p>
</div>