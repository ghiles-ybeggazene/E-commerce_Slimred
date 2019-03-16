
    
<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=slimred', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$reference_prod =$_POST['reference_prod'];
$ninformation =$_POST['information'];
 $nnbr_modele =$_POST['nbr_modele'];   
 $nprix_unt =$_POST['prix_unt'];   

    
    $sth = $bdd->prepare('SELECT reference_prod FROM produit WHERE reference_prod = :reference_prod');
	$sth->execute(array('reference_prod' => $reference_prod));
	$rows = $sth->rowCount();
    if($rows == 1){
$req = $bdd->prepare('UPDATE produit SET information = :ninformation,
nbr_modele = :nnbr_modele, prix_unt = :nprix_unt WHERE reference_prod = :reference_prod');
$req->execute(array(
 'reference_prod' => $reference_prod,  
'ninformation' => $ninformation,
'nnbr_modele' => $nnbr_modele,
'nprix_unt' => $nprix_unt
)); 
    
echo "modification reussite !";
    }
    
    else{

    echo "cette reference nexiste pas !";
    } 


?>