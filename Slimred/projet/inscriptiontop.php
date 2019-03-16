


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
       <link rel="stylesheet" href="css/inscription.css" type="text/css" media="all">

<script type="text/javascript" src="js1/animated-menu.js" ></script>
  
    
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


	
<!-- code inscription -->

 <div class="container">



<div class="rr col-12 col-m-12 formulaire">
        <form class="" action="inscription.php" method="POST" onsubmit="return mdp()">
            <fieldset>
                <legend><div class="mm">Veuillez renseigner vos informations:</div></legend>

                <p>
                <center style="color:red">
                    <?php
                    IF  (isset($_SESSION['deja']) and $_SESSION['deja']>0) {
                        echo"ce pseudo est déjà utilisé";
                    }

                    ?>
                </center>
                </p>

                <label for="pseudo">Pseudo</label>
                <input name="pseudo" type="text" id="pseudo" placeholder=" pseudo"
                pattern="[a-zA-Z]+[a-zA-Z0-9]{4,}"
                title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux, minimum 5 charactères"
                autofocus required />

                <label for="p1">Votre Mot de passe</label>
                <input name="mdp" type="password" id="p1" placeholder="6 caractères minimum!"
                pattern=".{6,}" title="Pour votre sécurité, un minimum de 6 charactères est exigé"
                required/>

                <label for="p2">Confirmer le Mot de passe</label>
                <input type="password" name="mdp1" id="p2" required onblur="mdp()" placeholder="******" />
                <p class="no" id="err">Les deux mot de passe sont différents !</p>

                <label for="nom">Nom </label>
                <input name="nom" type="text" id="nom" placeholder="NOM"
                pattern="[a-zA-Z]+[a-zA-Z0-9]{3,30}"
                title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux, minimum 4 charactères"
                required />

                <label for="prenom">Prenom </label>
                <input name="prenom" type="text" id="prenom" placeholder="PRENOM"
                pattern="[a-zA-Z]+[a-zA-Z0-9]{3,30}"
                title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux, minimum 4 charactères"
                required />
                

                <label for="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="ex@ex.ex">Adresse e-mail</label>
                <input type="email" name="email" placeholder="EXEMPLE@gmail.com">

                <label for="prenom">ADRESS</label>
                <input name="adress" type="text" id="adress" placeholder="ADRESS"
                pattern="[a-zA-Z]+[a-zA-Z0-9]{3,30}"
                title="Doit commencer par une lettre et ne contient pas d'espaces ou de caractères spéciaux, minimum 3 charactères"
                required />
                <button name="envoyer">S'enregistrer</button>




            </fieldset>
        </form>
    </div>
    
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
      
  <?php include('footer.php'); ?>
     
    <script>
    
document.getElementById("p2").addEventListener("blur", function(){
    var p1 = document.getElementById("p1").value
    var p2 = document.getElementById("p2").value

        if (p1 != p2) 
            {
            // ce que fait setAttribute est de rajouter un attribut class avec le nom yes, en d'autres terme class="yes"
            document.getElementById("err").setAttribute("class", "yes");
            // ramener le curseur vers le champ p1
            document.getElementById("p1").focus();
            }
        else
            {
            document.getElementById("err").setAttribute("class", "no");
            }
})

    
    
    
<!-- code php conexion -->
document.getElementById("formulaire").addEventListener("submit", function(evt){
    var p1 = document.getElementById("p1").value
    var p2 = document.getElementById("p2").value

        if (p1 != p2) 
            {
            // ce que fait setAttribute est de rajouter un attribut class avec le nom yes, en d'autres terme class="yes"
            document.getElementById("err").setAttribute("class", "yes");
            // ramener le curseur vers le champ p1
            document.getElementById("p1").focus();
                
            
            // empêcher le comportement par défaut du formulaire qui est l'envoi !
            evt.preventDefault();
                 alert('les deux mot de passe ne sont pas identiques.');
            }
        else
            {
            document.getElementById("err").setAttribute("class", "no");
            }
})
    </script>



        </div>
		
       
    
<script type="text/javascript"> Cufon.now(); </script>
<script>
	$(document).ready(function() {
		tabs.init();
	})
</script>
</body>
</html>