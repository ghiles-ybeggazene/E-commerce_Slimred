

<?php session_start (); ?>
<!DOCTYPE html>

<html>

<head>
    <title>connection</title>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/inscription.css">
 <link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" src="js1/animated-menu.js" ></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js" ></script>

    
    </head>
<body>
<div class="col-12 col-m-12 formulaire">

        <form class="" action="plogin.php" method="post">
            <fieldset>
                <legend>Saisissez Vos identifiants</legend>

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

                <button>Se Connecter</button>
                 
                
            </fieldset>
        </form>
    </div>

<body/>

</html>
