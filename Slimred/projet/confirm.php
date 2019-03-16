<?php session_start (); ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>www.Slimred.dz</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="css/style.css" rel="stylesheet">
       <link href="css/inscription.css" rel="stylesheet">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <?php include('header.php');
      ?>

 <div class="container">
      
      
 

<p style="text-align:center">
<?php
if (isset($_POST['pseudo']) AND isset($_POST['mdp']) AND isset($_POST['email']) )
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
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$email=$_POST['email'];
	

	$sth = $bdd->prepare('SELECT PSEUDO FROM utilisateurs WHERE PSEUDO = :pseudo');
	$sth->execute(array('pseudo' => $pseudo));
	$rows = $sth->rowCount();

    if($rows == 1)
        {
				$_SESSION['deja']=$_SESSION['deja']+1;
                header("location:../pages/inscription.php");
		}




	$req = $bdd->prepare('INSERT INTO utilisateurs(PSEUDO, MDP, NOM, PRENOM, EMAIL) VALUES(:pseudo, :mdp, :nom, :prenom, :email)');
	$req->execute(array(
		'pseudo' => $pseudo,
		'mdp' => $mdp,
		'nom' => $nom,
		'prenom' => $prenom,
		'email' => $email
	));

	echo 'Vous Avez êtez bien enregistrés  ' . $_POST['pseudo'];

}
else
{
	echo 'Vous n\'avez pas fournis tout les elements nécéssaires !' .$_POST['pseudo'];
}
?>
</p>
   </div>
      <div class="sally-content">
          
          <div class="container">
             <div class="raw">
                 <div class="col-md-12">
                    <div class="col-md-4">
                      <H2></H2>  
                    </div>
                     <div class="col-md-8"></div>
                     <h2></h2>
                 </div>
             </div>
              
          </div><!--container-->
      </div>  <!--sally-content-->
      
  <?php include('footer.php'); ?>
     
     
     

  </body>
</html>