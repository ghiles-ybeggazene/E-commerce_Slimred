<?php session_start (); ?>
   
    
    <?php 
if(isset($_SESSION['pseudo'])){
    
    
}else{

header('Location:login.php');
}
    
     
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
  
 
    <?php if (isset($_POST['rech']))
      {
      
      include('recherche_client.php');
      }else
      {?>
      
      
<?php include('menu_client.php');
       ?>
      
      <?php   }?>
      
      
      
      

     <?php include('footer_client.php'); ?>
     
     
    
     
     

  </body>
</html>