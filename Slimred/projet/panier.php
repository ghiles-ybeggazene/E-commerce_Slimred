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
    
   



$panier=$_SESSION['panier'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bonjour</title>

    <!-- Bootstrap -->
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="css/style.css" rel="stylesheet">
       <link href="css/panier.css" rel="stylesheet">
      
    
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
  <?php include('header_client.php')?>

</form>

</div>
  
  
  
   
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
<form action="validerpanier.php" method="post">
<div class="col-xs-3"><input type='submit' class="btn btn-danger"data-toggle="modal"  name='ELIMINERliminer' value='Eliminer' ></div>

       
<div class="text-center">

<div class="col-xs-3"><input type='button' id="validerPanier"  class="btn btn-danger"data-toggle="modal"  name='valider' value='valider'></td></tr>


 
</form>

</div>



<div class="modal fade" id="valider">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
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
      
  <?php include('footer_client.php'); ?>
     
     
     

  </body>
</html>    