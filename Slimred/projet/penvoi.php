
<?php
echo "Today is " . date("d-m-y") . "<br>";

session_start(); 
include('acceder.php');?>


<?php
$pseudocl=$_SESSION['pseudo'];


try
{
$bdd = new PDO('mysql:host=localhost;dbname=slimred', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
try{
$directioenv=1;
$contenu_message=$_POST['msg'];
$objet=$_POST['objet'];
$pseudoadmin='tahar';


$req = $bdd->prepare('INSERT INTO messagerie (pseudoadmin, pseudocl,contenu_message,objet,directioenv)
VALUES(?, ?, ? , ?,?)');

$req->execute(array($pseudoadmin, $pseudocl,$contenu_message,$objet,$directioenv));
}catch(Exception $e){
    die("erreur ".$e->getMessage());    
}

?>
