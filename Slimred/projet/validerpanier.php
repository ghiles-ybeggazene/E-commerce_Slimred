<?php session_start(); 
// nous allons enregistrer une commande
// nous vérifions que le bouton Cder est celui qui a mené a cette page:
if(isset($_POST['valider']) and $_POST['valider']=="valider"){

$reference_prod=$_POST['reference_prod']; //id de la fleur

$quantite=$_POST['quantite']; // quantité désirée par le client

if( empty($_SESSION['panier'][$reference_prod]) ){//si le panier contenant cette fleur est vide

$_SESSION['panier'][$reference_prod]=$quantite; // on enregistre la quantité désirée par le client

}else{ // si le panier contient déjà cette fleur
$_SESSION['panier'][$reference_prod]+=$quantite;// alors on ajoute la quantité à la valeur initiale

}//on a terminé le traitement.
//on renvoi l'internaute sur la boutique.
   }else{ 

header("location:interface_client.php");
}

$panier[id_de_la_fleur]= quantité désirée.
nous la passons en variable de session :
$_SESSION['panier'][$id_de_la_fleur] = Quantité désirée.
?>






<?session_start();
if( isset($_SESSION['panier'])){
$panier = $_SESSION['panier'];
$tot=0;// initialisation du total.
?>//entête du tableau du caddie
<div align="center"><H2>Votre Caddie</H2></div>
<table border="1" align="center" bgcolor="cccccc" width="50%">
<tr bgcolor='white'>
<td width="">Produit</td>
<td width="">Quantité</td>
<td width="">Px Unité</td>
<td width="">Total </td>
<td width="">&nbsp;</td>	
</tr>
// le caddie sera dans un formulaire pour pouvoir réaliser des changements.
<form method="POST" action="Panier4_2.php">
<? // connexion à votre base
require('inc_connect.php');
// on passe tous les paniers en revue par une boucle foreach
foreach ($panier as $valeur=>$cde){//$valeur est l'ID de la fleur et $cde sa quantité dans le panier
$sql="select * from fleuriste where id='$valeur'";
$req=mysql_query($sql,$connexion)or exit ('Erreur SQL !'.$sql.'<br>'.mysql_error());
while( $data=mysql_fetch_array($req) ){
$nom=$data['nom'];//nom de la fleur
$prix=$data['prix'];// prix unitaire de la fleur
$pxligne=$prix*$cde; //prix pour la ligne de commande
$tot+=$pxligne;//valorisation du total général
echo"<tr><td>$nom</td><td>$cde</td><td>$prix</td><td align='right'>number_format($pxligne, 2,'.',' ')</td><td><input type='checkbox' name='case[]' value='".$data['id']."'></td></tr>";
}
}
echo"<tr><td colspan='3' align='right'>Total Commandé...</td><td align='right'>number_format($tot, 2,'.',' ')</td></tr>";
mysql_close();}

<tr bgcolor='white'>
<td colspan="5" align="right"><input type="submit" name="action" value="Eliminer">&nbsp;&nbsp;&nbsp;<input type="submit" name="action" value="Changer"></td></tr></table>
</form>
<br><br><a href="Panier4_1.php">Retour à la Boutique</a>






//eleminer un panier
Nous vérifions que l'internaute a cliqué sur Eliminer
if(isset($_POST['Eliminer']) and $_POST['Eliminer']=='Eliminer'){
// vérifions s'il a cliqué mais sans rien cocher
if(empty($_POST['i']) ){
//dans ce cas on le renvoi sur la page du caddie.
?> 
<script ="Javascript">
history.go(-1);
</script>
< ?
exit;
}
//on va lire le tableau case[] dans une boucle foreach:
foreach ($_POST['i'] as $delete){
//on supprime la session corespondante à la fleur:
unset($_SESSION['panier'][$delete]);
}//fin foreach
//on renvoit l'internaute sur la page de caddie. 
?>
<script ="Javascript">
location.replace("panier.php");
</script>
< ?
exit; }//fin de la suppression
?>