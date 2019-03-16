<?php
session_start();



	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=slimred;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
    }
    
   
  
 







//ajouter un produit
 if (isset($_GET['ref']) && isset($_POST['qtt']) ) {
 $nbr=ceil($_POST['qtt']);
      if ($nbr>0 && !preg_match("#[a-zA-Z]|,0{0,}[1-9]+|\.(0){0,}[1-9]+#",$_POST['qtt'])) {

 	
           if (($_SESSION['quantite'][$_GET['ref']]-$_POST['qtt'])>=0) {
 		
 		
                $req=$bdd->prepare("SELECT * FROM produit WHERE id_cat=?");
                $req->execute(array($_GET['ref'] ));
                $res=$req->fetch(); 
  
                $_SESSION['ref']=$_GET['ref'];
                  if (!array_key_exists($_SESSION['ref'], $_SESSION['produit'])) {
                      $_SESSION['produit'][$_SESSION['ref']]=$_POST['qtt'];
                     }else{
                     $_SESSION['produit'][$_SESSION['ref']]+=$_POST['qtt'];

                     }  
                     $_SESSION['prix_unt']+=($res['prix_unt']*$_POST['qtt']);
                     $_SESSION['quantite'][$_GET['ref']]=($_SESSION['quantite'][$_GET['ref']]-$_POST['qtt']);}
                     else
                   {if ($_GET['id']==1) {
	              $_SESSION['alert1']='alert1';
                  }else if ($_GET['id']==2) {
	              $_SESSION['alert2']='alert2';
                  }else if ($_GET['id']==3) {
	
	              $_SESSION['alert3']='alert3';
                 }else if ($_GET['id']==4) {
	             $_SESSION['alert4']='alert4';
                        }else if ($_GET['id']==5) {
	             $_SESSION['alert5']='alert5';
                       
}
	
	

}}else{
         if ($_GET['id']==1) {
         	$_SESSION['alert1']='alert1';
         header('location:soupape_client.php');}
         else if ($_GET['id']==2) {
         	$_SESSION['alert2']='alert2';
        header('location:robinet_client.php');
         }
         else if ($_GET['id']==3) {
         	        $_SESSION['alert3']='alert3';
        header('location:echangeur_client.php');
         }
         else if ($_GET['id']==4) {
         	 $_SESSION['alert4']='alert4';
        header('location:instrument_client.php');
         }
           else if ($_GET['id']==5) {
         	 $_SESSION['alert5']='alert';
        header('location:filtration_client.php');
         }
          
          
          
}header('location:mon_panier.php');} else


//supprimer un produit
if (isset($_GET['reff'])) {
$req=$bdd->prepare("SELECT * FROM produit WHERE reference_prod=?");
$req->execute(array($_GET['reff'] ));
$res=$req->fetch();
if ($_SESSION['produit'][$_GET['reff']]==1) {
  $_SESSION['prix_unt']=($_SESSION['prix_unt']-$res['prix_unt']);
   unset($_SESSION['produit'][$_GET['reff']]);
}else if($_SESSION['produit'][$_GET['reff']]>1){
  
 $_SESSION['prix_unt']=($_SESSION['prix_unt']-$res['prix_unt']);

  $_SESSION['produit'][$_GET['reff']]--;
 }$_SESSION['quantite'][$_GET['reff']]++;
header('location:mon_panier.php');
}




?>