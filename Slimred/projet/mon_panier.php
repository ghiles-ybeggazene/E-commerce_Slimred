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
    
   
  
 

$req1=$bdd->query('SELECT * FROM commande');
//$req->execute(array($_SESSION['commande']));
while($com=$req1->fetch()){
$date1=date_create($com['date_commande']);
$date2=date_create(date('Y-m-d'));
$diff=date_diff($date1,$date2);

// %a outputs the total number of days
if( $diff->format(" %a")>2)



 {
$req=$bdd->prepare('DELETE FROM commande where id_commande=? ');
 $req->execute(array($com['id_commande']));
 $req=$bdd->prepare('DELETE FROM panier where id_commande=?');
  $req->execute(array($com['id_commande']));
}}



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MON PANIER</title>

    <!-- Bootstrap -->
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="css/style.css" rel="stylesheet">
      
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php 
     try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=slimred;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
    }
     
        
        
 
 if (isset($_SESSION['nom'])&&isset($_SESSION['prenom'])&&!empty($_SESSION['nom'])&&!empty($_SESSION['prenom'])) {
 
 if (isset($_SESSION['alert1'])) {
  header('location:soupape_client.php');
}else if (isset($_SESSION['alert2'])) {
  header('location:robinet_client.php');
}else if (isset($_SESSION['alert3'])) {
  header('location:echangeur_client.php');
}else if (isset($_SESSION['alert4'])) {
  header('location:instrument_client.php');
}
     else if (isset($_SESSION['alert5'])) {
  header('location:filtration_client.php');
}

if (!isset($_SESSION['produit'])) {
  $_SESSION['produit']=array();
}
 //SUPPRIMER LA COMMANDE
if (isset($_POST['ouisupp'] )) {
foreach ($_SESSION['produit'] as $_SESSION['ref'] => $value) {
  if (array_key_exists($_SESSION['ref'], $_SESSION['quantite'])) {
  $_SESSION['quantite'][$_SESSION['ref']]=($_SESSION['quantite'][$_SESSION['ref']]+$_SESSION['produit'][$_SESSION['ref']]);
  }
}

foreach ($_SESSION['produit'] as  $_SESSION['ref'] =>$key) {
 
    unset($_SESSION['produit'][$_SESSION['ref']]);

  }$_SESSION['prix_unt']=0;
  //annuler la suppression 
}else if(isset($_POST['nonsupp'] )) {
  echo "<script> alert('suppression annulée');</script>";
}



 //VALIDER LA COMMANDE

else if (isset($_POST['ouival'])) {

 
  
 $max=$bdd->query("SELECT MAX(id_commande)as maximum from panier");
 $res=$max->fetch();
 $maxx=($res['maximum']+1);
 foreach ($_SESSION['produit'] as $_SESSION['ref'] => $nbr_produit) {
   
 
$req3=$bdd->prepare("INSERT INTO  panier (id_commande,reference_prod,nbr_produit)
  values(?,?,?)");
$req3->execute(array($maxx,$_SESSION['ref'],$nbr_produit));

$mod=$bdd->prepare("UPDATE produit SET nbr_modele=? where reference_prod=?");
$mod->execute(array($_SESSION['quantite'][$_SESSION['ref']],$_SESSION['ref']));
}
$nbr=array_sum($_SESSION['produit']);
 /*$list=implode(',',array_keys($_SESSION['produit']) ) ;*/
$req4=$bdd->prepare("INSERT INTO  commande (id_commande,pseudo,date_commande,total_cmd)
  values(?,?,now(),?,'non_traitée')");
$req4->execute(array($maxx,$_SESSION['pseudo'],$_SESSION['prix_unt']));

$_SESSION['produit']=array();
$_SESSION['prix_unt']=0;
$_SESSION['commande']=$maxx;
header('location:facture.php');


//annuler la validation
}else if (isset($_POST['nonval'])) {
  echo '<script>alert("commande non validée")</script>';
}	
 



 ?>

  <?php include('header_client.php')?>
  
 
<div class="container"style="margin-top:30px;">
<div class="row">

 

<div class="col-xs-7">
<?php if (count($_SESSION['produit'])==0) {
  if (isset($_SESSION['facture'])) {
    echo("<div class=\"alert alert-danger text-center\"style='margin-top:50px;'><h1>vous avez effectué une commande</h1> </div>" );
  }else
   	echo("<div class=\"alert alert-danger text-center\"style='margin-top:50px;'><h1>Panier vide</h1> </div>" );
   }else{?>

  
  
   
   <table   class="table table-striped table-bordered table-hover table-condensed">
	<thead>
		<tr class="danger"> 


<tr>
 
   <th>
       image du produit
   </th>
    <th>
       nom du produit
   </th>
   <th>
       prix unitaire
   </th>
   <th> 
       quantite
   </th>
       <th>
       reference
   </th>
       
</tr> 
    <?php 
$total=0;
for($i=0;$i<count($panier);$i++ ){
   $total= $total+$panier[$i]['prix_unt']*$panier[$i]['quantite']; ?>
  <tr class="warning">
       
<td> <img  class="img img-thumbnail img-responsive im" src = "<?php echo $panier[$i]['img']; ?>" style="height:120px;width:120px"/></td>
         <td>  <?php echo($panier[$i] ['nom_piece'] ) ?></td> 
        <td>  <?php echo($panier[$i] ['prix_unt'] ) ?></td> 
        <td>  <?php echo($panier[$i] ['quantite'] ) ?></td>
          <td>  <?php echo($panier[$i] ['reference_prod'] ) ?></td>  
       <td>  <a href="supprimer.php?index=<?=$i?>">supprimer</a></td>  
   </tr>
    
    
    
  
    
    
    
   <?php } ?>
   <div class="well"><h2 style="color:red;">

    
    <tr >
        <td colspan="2">TOTAL:</td>
        <td> <?php echo($total) ?> </td>
    </tr>
    
    </div>
        
		</tbody>
		
</table>

       
<div class="text-center">
<form action="" method="post">
<div class="col-xs-3"><a class="btn btn-danger"data-toggle="modal" data-target="#supprimercommande">supprimer</br>ma commande</a></div>
<div class="col-xs-3"><a class="btn btn-danger"data-toggle="modal" data-target="#valider">Valider</br>ma commande</a></div>

 
</form>

</div>



<div class="modal fade" id="valider">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">VOULEZ VOUS VRAIMENT CONFIRMER VOTRE COMMANDE?</div>
        <form method="post" action="">
        <button class="btn btn-primary"name="ouival"style="margin-right:10px;" >OUI</button>
    <button class="btn btn-primary"name="nonval">NON</button></form>
      </div>
        
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal2 -->

<div class="modal fade" id="supprimercommande">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">VOULEZ VOUS VRAIMENT SUPPRIMER VOTRE COMMANDE?</div>
        <form method="post" action="">
        <button class="btn btn-primary"name="ouisupp"style="margin-right:10px;" >OUI</button>
    <button class="btn btn-primary"name="nonsupp">NON</button></form>
      </div>
        
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal2 -->

     
      <div class="sally-content">
          
          <div class="container">
             <div class="raw">
                 <div class="col-md-12">
                    <div class="col-md-4">
                      <H2></H2>  
                    </div>
                     <div class="col-md-8"></div>
                     <h2></h2>
                 </div>
             </div>
          </div>
</div>
     





   

<div class="modal fade" id="valider">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">VOULEZ VOUS VRAIMENT CONFIRMER VOTRE COMMANDE?</div>
        <form method="post" action="">
        <button class="btn btn-primary"name="ouival"style="margin-right:10px;" >OUI</button>
    <button class="btn btn-primary"name="nonval">NON</button></form>
      </div>
        
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal2 -->

<div class="modal fade" id="supprimercommande">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">VOULEZ VOUS VRAIMENT SUPPRIMER VOTRE COMMANDE?</div>
        <form method="post" action="">
        <button class="btn btn-primary"name="ouisupp"style="margin-right:10px;" >OUI</button>
    <button class="btn btn-primary"name="nonsupp">NON</button></form>
      </div>
        
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal2 -->


<?php }?>



   
<div class="modal fade" id="supprimer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="panel-body">
 <form class="form form-horizontal "autofocus method="post" action="interface_client.php">
 <div class="row">
  <div class="form-group ">
  <div class="col-xs-4">
    <label for="exampleInputName2 ">Nom d'utilisateur : </label></div>
    <div class="col-xs-4">
    <input type="text" class="form-control t" id="exampleInputName2" placeholder="Jane Doe" name="loginn" autofocus>
  </div></div></div>
  <div class="row">
  <div class="form-group ">
  <div class="col-xs-4">
    <label for="exampleInputEmail2">Mot de passe : </label></div>
    <div class="col-xs-4">
    <input type="password" class="form-control t" id="exampleInputEmail2" placeholder="jane.doe@example.com" name="pass1">
  </div></div></div>
  <h4 class="modal-title"><span class="glyphicon glyphicon-warning-sign"></span> ETES VOUS SURE DE VOULOIRE SUPPRIMER VOTRE COMPTE???</h4>
  <button type="submit" class="btn btn-default btn-danger envoyer bphp"  name="supprimer">supprimer</button>
        <button type="submit" class="btn btn-default btn-danger envoyer bphp"  name="annuler">annuler</button>
</form> 
</div>
      </div>
      <div class="modal-body">
      
      </div>
        
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
 <script type="text/javascript" src="doc/js/jquery-2.1.3.min.js"> </script> 
<script type="text/javascript" src="doc/js/bootstrap.js"></script>
 <script type="text/javascript" src="doc/js/monscript.js"></script>
 

 </body>
 </html>
 <?php
}else 
header('location:inscription.php');


 ?>
 