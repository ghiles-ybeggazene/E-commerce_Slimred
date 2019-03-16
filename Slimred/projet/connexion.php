
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
        <link href="css/inscription.css" rel="stylesheet">
        
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
 

      <div class="container">
      
      
      
      
      
      <div class="col-12 col-m-12 formulaire">
      



        <form class="roma" action="plogin.php" method="post">
            <fieldset>
                <legend class="text-center">Saisissez Vos Identifiants:</legend>

                <label for="pseudo">Pseudo : </label>

                <input type="text" id="pseudo" name="pseudo"
                pattern="[a-zA-Z]+[a-zA-Z0-9]{4,}"
                autofocus required />

                <label for="p1">Mot de passe</label>

                <input type="password" id="p1" placeholder="6 caractères minimum!" name="mdp"
                pattern=".{6,}"
                required/>
                <p >
                    <center style="color:red">
                     <?php
                    IF  (isset($_SESSION['tentative']) and $_SESSION['tentative']>0) {
                        echo"Nom d'utilisateur ou mot pde passe incorrécte";
}


                    ?>
                    </center>
               </p>

                <button name="submit"><a href="interface_client.php">Se Connecter</button>
               <div class="text-center"> <a href="inscriptiontop.php" id="gool" class="ff"> <h1>Inscription</h1></a></div>
                
            </fieldset>
        </form>
   
      
          </div>
      
      
      
      
    
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
              
          </div><!--container-->
      </div>  <!--sally-content-->
        </div>
  <?php include('footer.php'); ?>
     
     
     

  </body>
</html>
