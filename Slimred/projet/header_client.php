    
    <?php 
if(isset($_SESSION['pseudo'])){
    
    
}else{

header('Location:login.php');
}
    
     
     ?>
       

              
                            <!--header--> 
    <link href="css/raf.css" rel="stylesheet">
    <nav class="sally-navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="interface_client.php"><img src="images/slimred.png"></a>
    </div>
 <?php include ('btncon.php');
        ?>
        
        
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <form class="navbar-form navbar-right" method="post" action="interface_client.php" role="search">
        <div class="form-group">
          <input type="text" name="motcle" class="form-control" placeholder="...Search">
        </div>
        <button type="submit" name="rech" class="sally-form-btn btn btn-default">Recherche</button>
        
    
        
        
        
        
      </form>
      
      <ul class="nav navbar-nav navbar-right">
           
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produit<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="soupape_client.php">Soupapes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="robinet_client.php">Robinetterie</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="echangeur_client.php">Echangeurs de chaleur</a></li>
            <li role="separator" class="divider"></li>
             <li><a href="instrument_client.php">Instrumentations</a>
             
            <li role="separator" class="divider"></li>
            <li><a href="filtration_client.php">Flitrations</a></li>
          </ul>
        </li>
           <li ><a href="mon_compte.php"class="a1"><span class="glyphicon glyphicon-book">mon compte</a></li>
        <li> <a href="panier.php" ><span class="glyphicon glyphicon-shopping-cart">mon panier</a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>