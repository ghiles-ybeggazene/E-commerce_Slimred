<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>www.Slimred.dz</title>

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
 <?php include('header.php');
      ?>

      
                     


 
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=slimred;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


?>
 <div class="container header1 im1 ">
  <div class="text-right">
  
  </div>
 </div>
 <div class=" madrid container "style="margin-top:20px;">
 
<?php
 

$req = $bdd -> query('SELECT img,information,prix_unt
FROM  produit WHERE id_cat=5');
 


while($donnee = $req -> fetch())
{
  
  
?>
    
    
    
      <div class="col-xs-4 " >
    <div class="thumbnail"style="height:400px;">
      <img  class="img img-thumbnail im" src = "<?php echo $donnee['img']; ?>" style="height:100px"/>
      <div class="caption">
        <h2 style="color:blue;">Informations</h2>
      <p>  <?php 
    echo '<pre><h4 >'.$donnee['information'].'</h4></pre>';
    
    echo '<h2 style="font-weight:bold;">Prix:'.number_format( $donnee['prix_unt'],'0') .' DA</h2> </br>';
    echo'<a href="connexion.php"<button type="button" class="btn btn-default">acheter</button></a>';
    ?>
     </p>
       
       
       
        
      </div>
    </div>
    
    
    
    
    
  </div>
      
      
  <?php
  

}?>
 
</div>
      
  <?php include('footer.php'); ?>
     
                     
                     
                
         <!--sally-content-->
      
     
     

  </body>
</html>