<html>
<head>
    
    
    
<meta charset="UTF-8">
</head>
<body>



<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=slimred', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)

{

// Testons si le fichier n'est pas trop gros
if ($_FILES['monfichier']['size'] <= 2000000)
{
// Testons si l'extension est autorisée

$infosfichier = pathinfo($_FILES['monfichier']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png');

if (in_array($extension_upload,$extensions_autorisees))

{

move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
$img= '../projet/admin/uploads/' . basename($_FILES['monfichier']['name']);
echo "L'envoi a bien été effectué !";



 
    
}
}
}

$nom_piece=$_POST['nom_piece'];
$reference_prod=$_POST['reference_prod'];
$poid_piece=$_POST['poid_piece'];
$information=$_POST['information'];
$nbr_modele=$_POST['nbr_modele'];
$prix_unt=$_POST['prix_unt'];	
$cat=$_POST['categorie'];
if($cat=='soupape') {$id_cat=1;} 
else {if($cat=='robinettrie') {$id_cat=2;} 
else {if($cat=='echangeur') {$id_cat=3;}
else {if($cat=='instrumentation') {$id_cat=4;} 
 
else{if($cat=='filtration') {$id_cat=5;} 
     
     
     }}}}
  
$requete=$bdd->prepare('INSERT INTO produit VALUES(:reference_prod, :img, :prix_unt, :information, :nbr_modele, :id_cat, :poid_piece, :nom_piece)'); 
$requete->execute(array(":reference_prod" => $reference_prod, ":img" => $img, ":prix_unt" => $prix_unt, ":information" => $information, ":nbr_modele" => $nbr_modele, ":id_cat" => $id_cat, ":poid_piece" => $poid_piece, ":nom_piece" => $nom_piece)); 

	echo 'Vous Avez êtez bien enregistrés  ';
 ?>
 </body>
 </html>