
   

     
       
           <!--header--> 
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
      <a class="navbar-brand" href="index.php"><img src="images/slimred.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <form class="navbar-form navbar-right" role="search"  method="post" action="index.php"  >
        <div class="form-group">
          <input type="text" name="motcle" class="form-control" placeholder="...Search">
        </div>
        <button type="submit" name="rech" class="sally-form-btn btn btn-default">Recherche</button>
         
      </form>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Accueil <span class="sr-only">(current)</span></a></li>
        <li><a href="apropos.php">A propos</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produit<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="soupapes.php">Soupapes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="robinet.php">Robinetterie</a></li>
            <li role="separator" class="divider"></li>
            <li><a href=" Echangeur.php">Echangeurs de chaleur</a></li>
            <li role="separator" class="divider"></li>
             <li><a href="Instrumen.php">Instrumentations</a>
             
            <li role="separator" class="divider"></li>
            <li><a href="Flitration.php">Flitrations</a></li>
          </ul>
        </li>
        <li><a href="connexion.php">Connexion</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>