Faute1 :tach1  s2   page 62
Faute2 :page 20 avant derniere ligne



<?php

include("incl.php");?>
<div class=" container page " >
<div class="row ">
<div class ="col-xs-12">


<div class="panel panel-default ">
  <div class="panel-heading"> 
  <h1  class="text-center titre" style="font-weight:bold;color:red ">
  authentification</h1>
  </div>
  <div class="panel-body"style="background-color:black;">
 <form class="form-inline text-center"autofocus method="post" action="inscription.php">
  <div class="form-group ">
    <label for="exampleInputName2 ">Nom d'utilisateur : </label>
    <input type="text" class="form-control t" id="exampleInputName2" value="votre login" name="loginn"required>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail2">mot de passe : </label>
    <input type="password" class="form-control t" id="exampleInputEmail2" value="votre mot de passe" name="pass1"required>
  </div>
  <button type="submit" class="btn btn-danger"name="connexion">connexion</button>
</form> 
</div></div></div></div>








 <div class="row  text-center fm1"> 
<div class="col-xs-12  fm">
<div class="panel panel-default">
  <div class="panel-heading "> 
  <h1 class="titre" style="font-weight:bold;color:red">
VOUS POUVEZ VOUS INSCRIRE AU DESSOUS!!!</h1>
  </div>
  <div class="panel-body"style="background-color:black;">
<form class="form-horizontal "style="margin-top:30px"method="post" action="inscription.php">
<div class="col-xs-6">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-5 control-label">Nom : </label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputEmail3" value="<?php echo $_SESSION['nom'];?>"  name="nomm" required patern="[a-za-z]">
    </div>
  </div></div>
  <div class="col-xs-6">
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Prenom : </label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword3" value="<?php echo $_SESSION['prenom'];?>"  name="prenomm"required patern="[a-za-z]">
    </div>
  </div>
  </div>
  <div class="col-xs-6">

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Adresse : </label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="inputPassword3" value="<?php echo $_SESSION['adresse'];?>" name="adressee"required>
    </div>
  </div></div>
  <div class="col-xs-6">
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Téléphone : </label>
    <div class="col-sm-7">
      <input type="phone" class="form-control" id="inputPassword3" value="<?php echo $_SESSION['tel'];?> "name="tell"required>
    </div>
  </div></div>
  <div class="col-xs-6">
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Email : </label>
    <div class="col-sm-7">
      <input type="email" class="form-control" id="inputPassword3" value="<?php echo $_SESSION['email'];?>" name="maill"required>
    </div></div></div>
  <div class="col-xs-6"><div class="form-group has-error has-feedback">
  <label class="control-label col-sm-5" for="inputError2">mot d"utilisateur</label>
  <div class="col-sm-7">
  <input type="text" class="form-control focus" id="inputError2" aria-describedby="inputError2Status"name="loginn"   autofocus>
  <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  <span id="inputError2Status" style="color:red;">MOT D'UTILISATEUR INVALIDE!!!</span>
</div></div>
  </div>
  
  <div class="col-xs-6">
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Mot de passe : </label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="inputPassword3" value="<?php echo $_SESSION['password'];?>" name="pass1"required>
    </div>
  </div></div>
  <div class="col-xs-6">
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label"> Confirmer Mot de passe : </label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="inputPassword3" value="confirmer" name="pass2"required>
    </div>
  </div>
  </div>
  <div class="col-xs-6">
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-5 control-label">Date de Naissance: </label>
    <div class="col-sm-7">
      <input type="date" class="form-control" id="inputPassword3" value="<?php echo $_SESSION['naissance'];?>" name="agee"required>
    </div>
  </div></div>
  <div class="col-xs-6">
  <div class="row">
  <div class="form-group">
  <label for="inputPassword3" class="col-sm-5 control-label"required>Sexe:</label>
    <div class="radio col-xs-2">
  <label>
    <input type="radio" name="op" id="optionsRadios2" value="homme">
   Homme
  </label>
</div>
<div class="radio col-xs-2">
  <label>
    <input type="radio" name="op" id="optionsRadios3" value="femme" >
    Femme
  </label>
</div>
  </div></div></div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-9">


      <input type="submit" class="btn btn-default btn-danger envoyer bphp" value="VALIDER" name="VALIDER"></input>
    </div>
  </div>
</form></div> 
</div>
 
</div>  
</div>
</div>