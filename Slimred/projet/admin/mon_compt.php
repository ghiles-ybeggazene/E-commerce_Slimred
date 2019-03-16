<?php session_start (); ?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>www.Slimred.dz</title>

    <!-- Bootstrap -->
     <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
      
    <link href="css/entete.css" rel="stylesheet">
       <link href="../admin/css/style.css" rel="stylesheet">
       
      <link rel="stylesheet" media="screen" href="../css/formulaire.css" type="text/css" />

    
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
    
$admin = $_SESSION['admin'];
echo'<h1 div class="p"> votre profile mrs:</h1></div>';
 $req = $bdd->prepare('SELECT admin,mdpa FROM admin WHERE
admin = ?');
$req->execute(array($admin));

while ($donnees = $req->fetch())
{
  
   
    $admin=$donnees['admin'];  
    $mdp=$donnees['mdpa']; 
    
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
      <th>administarteur</th>
      
        <th>mot de passe:</th>
          
          <tbody>
      <tr>
     
        <td>'.$admin.'</td>
        
        <td>'.$mdp. '</td>
      
          
             </tr>
       
        
           
    
    </thead>
    
    
       
      
     
    </tbody>
  </table>
</div>';


?>
      <br/><br/><h2><b><i>Modifier vos cordonnées </i></b></h2><br/>
<form id="form1" name="form1" method="post" action="modifier_profil.php">
<fieldset style="border-style:double;border-width:3px;border-color:#009;">
    
        <label>Nom:<br><input type="text" name="admin" size="20"  value="<?php echo "$admin" ; ?>" required/>      </label> <br/> <br/>
        
         <label>Mot de passe:<br><input type="text" name="mdpa" size="20"  value="<?php echo "$mdp"; ?>" required/>   </label> <br/><br/>
       

   <input  style="margin-left:20px;"type="submit"  name="Submit"value="MODIFIER" id="envoyer" />
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
    
    
    
    
    
    
    
    
     
     
     

  </body>
</html>
