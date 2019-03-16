
<?php session_start (); ?>

<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=slimred', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

    $admin = $_SESSION['admin'];
 $req = $bdd->prepare('SELECT admin FROM admin ');
$req->execute(array($admin));
echo '<ul>';

while ($donnees = $req->fetch())
{
 $admin = $donnees['admin'];   
    
}
$req->closeCursor();

$nadmin=$_POST['nadmin'];
 
$nmdpa=$_POST['nmdpa'];



    
$req = $bdd->prepare('UPDATE admin SET  nadmin= :nadmin,mdpa = :nmdpa
 ');
$req->execute(array(
 nadmin => $nadmin,  

'nmdpa' => $nmdpa,

)); 
    

header('location:mon_compt.php');


?>