<?php session_start (); ?>

<?php include('acceder.php');?>
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
        <link href="css/raf.css" rel="stylesheet">
          
      <link rel="stylesheet" media="screen" href="css/formulaire.css" type="text/css" />

     <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 20px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
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
  <?php include('header_client.php');?>



 

      
      
    <?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=slimred;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
    }
    
$pseudo = $_SESSION['pseudo'];
echo'<h1 div class="p"> votre profile mrs:</h1></div>';
 $req = $bdd->prepare('SELECT nom,prenom,mdp,email,adress FROM client WHERE
pseudo = ?');
$req->execute(array($pseudo));

while ($donnees = $req->fetch())
{
  
 $nom=$donnees['nom'];  
    $prenom=$donnees['prenom'];  
    $mdp=$donnees['mdp']; 
    $email=$donnees['email'];
    $adress=$donnees['adress'];
}
$req->closeCursor();
//$_SESSION['nom'] = $nom;
//$_SESSION['prenom'] = $prenom;
//$_SESSION['mdp'] = $mdp;
//$_SESSION['email'] = $email;
//$_SESSION['adress'] = $adress;



echo' <div class="container">
  
  <table class="table table-striped">
    <thead>
      <tr>
      <th>Nom</th>
       <th> Prenom</th>
        <th>mot de passe:</th>
          
          <tbody>
      <tr>
     
        <td>'.$nom.'</td>
        <td>'.$prenom.'</td>
        <td>'.$mdp. '</td>
      
          
             </tr>
       
        
           <th>Email</th>
        <th>Adresse:</th>
        <th> pseudo</th>
      </tr>
    </thead>
    
    
        <td>'.$email.'</td>
        <td>'.$adress.'</td>
         <td>'.$pseudo. '</td>
      </tr>
      
      
     
    </tbody>
  </table>
</div>';


?>
      <br/><br/><h2><b><i>Modifier vos cordonnées </i></b></h2><br/>
<form id="form1" name="form1" method="post" action="modifier_profile.php">
<fieldset style="border-style:double;border-width:3px;border-color:#009;">
    
        <label>Nom:<br><input type="text" name="nnom" size="30"  value="<?php echo "$nom" ; ?>" required/>      </label> <br/> <br/>
        <label>Prénom:<br><input type="text" name="nprenom" size="30" value="<?php echo "$prenom"; ?>" required/>   </label> <br/><br/>
    
        <label>pseudo:<br><input type="text" name="npseudo" size="40"  value="<?php echo "$pseudo"; ?>" required/>   </label> <br/> <br/>
        <label>Adresse:<br><input type="text" name="nadress" size="40" value="<?php echo "$adress" ; ?>" required/>   </label> <br/> <br/>

        <label>E-mail:<br><input type="text" name="nemail" value="<?php echo "$email" ; ?>" required/>  </label> <br/><br/>
        
         <label>Mot de passe:<br><input type="text" name="nmdp" size="30"  value="<?php echo "$mdp"; ?>" required/>   </label> <br/><br/>
       

   <input  style="margin-left:200px;"type="submit"  name="Submit"value="MODIFIER" id="envoyer" />
   <br/> <br/> <br/>
    
    </form>
    
    </fieldset>






















      
      
      
      
      
      
      
      
      
      
      
      
      

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
    
    
    
    
    
    
    
    
  <?php include('footer_client.php'); ?>
     
     
     

  </body>
</html>
