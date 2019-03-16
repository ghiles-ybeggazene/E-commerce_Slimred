
<?php session_start (); 
$_SESSION['admin']=$admin;

?>

<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=slimred', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT admin,mdpa FROM admin');
while ($donnees = $reponse->fetch())
{
$ad = $donnees['admin'] ;
$mdp = $donnees ['mdpa'];
}
$reponse->closeCursor();
    if (($_POST['admin'] == $ad) && ($_POST['mdpa'] == $mdp  )){
    $_SESSION['admin']=$_POST['admin'];
 header("location: espace_admin.php");
}
else
{ 
     
 
   
    header("location: admin.php");
}



?>
