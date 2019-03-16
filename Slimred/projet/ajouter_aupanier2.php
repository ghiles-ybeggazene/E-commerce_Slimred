<?php session_start ();

if($_POST['quantite']<=0) {
    
    echo '<script>alert("saisie une quantite existe");</script>';

}

else{

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=slimred;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
    }
    
   
  
      
 

  



if (isset($_SESSION['panier'])){
 $panier=$_SESSION['panier'];
}else

{

$panier=array();
    
}
$index=count($panier);

$panier[$index]['img']=$_POST['img'];
$panier[$index]['nom_piece']=$_POST['nom_piece'];
$panier[$index]['prix_unt']=$_POST['prix_unt'];
$panier[$index]['quantite']=$_POST['quantite'];
$panier[$index]['reference_prod']=$_POST['reference_prod'];
$_SESSION['panier']=$panier;
header ('location:panier.php');
}?>
