<?php session_start (); ?>
<!DOCTYPE html>
<?php include("header.php"); ?>

<div class="col-11 col-m-11">

<p style="text-align:center; color:white">
<?php
if (isset($_POST['pseudo']) AND isset($_POST['mdp']) )
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


	$sth = $bdd->prepare('SELECT pseudo FROM client WHERE pseudo = :pseudo AND MDP = :mdp ');
	$sth->execute(array('pseudo' => $pseudo,'mdp' => $mdp));
											
	$rows = $sth->rowCount();

    if($rows == 1){
        echo "Vous Êtes connectés $pseudo";
				$_SESSION['pseudo']=$pseudo;
				$_SESSION['loged']=TRUE;
				header('location:interface_client.php');}
    
    
		else{
				$_SESSION['tentative']=$_SESSION['tentative']+1;
            header('location:login.php');}}
	
        




else
{
 echo 'Vous n\'avez pas saisi vous identifiants !' .$_POST['pseudo']; 
}
?>
</p>
</div>

<?php include("footer.php") ?>
