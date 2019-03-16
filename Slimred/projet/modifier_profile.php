
<?php session_start (); ?>
<?php include('acceder.php');?>
<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=slimred', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

    $pseudo = $_SESSION['pseudo'];
 $req = $bdd->prepare('SELECT id_cl FROM client WHERE
pseudo = ?');
$req->execute(array($pseudo));
echo '<ul>';

while ($donnees = $req->fetch())
{
 $id_cl = $donnees['id_cl'];   
    
}
$req->closeCursor();

$npseudo=$_POST['npseudo'];
$nnom=$_POST['nnom'];
$nprenom=$_POST['nprenom'];
$nadress=$_POST['nadress'];  
$nemail=$_POST['nemail'];
$nmdp=$_POST['nmdp'];



    
$req = $bdd->prepare('UPDATE client SET pseudo = :npseudo,nom = :nnom,
prenom = :nprenom, adress = :nadress, email = :nemail, mdp = :nmdp WHERE id_cl = :id_cl');
$req->execute(array(
 'nnom' => $nnom,  
'npseudo' => $npseudo,
'nprenom' => $nprenom,
'nadress' => $nadress,
'nemail' => $nemail,
'nmdp' => $nmdp,
'id_cl' => $id_cl
)); 
    

header('location:mon_compte.php');


?>