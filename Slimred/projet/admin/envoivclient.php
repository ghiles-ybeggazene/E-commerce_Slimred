<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>slimed message!</title>
<link rel="stylesheet" href="css/entete.css" media="screen"/>
</head>

<section><br />
<?php include('deconnecter.php');?> 
<div style="margin-left:0px;height:400px; ">

<form id="form1" name="form1" method="post" action="penvoivclient.php" style=" margin-left: 160px;">
  <p>
    pseudo:<input type="text" name="pseudo" size="50"/>
</p><br />
  <p>
    Objet:<input type="text" name="objet" size="50"/>
</p><br />
   
  <p>
    <textarea name="msg" placeholder="tapez votre message" style=" width: 350px; margin-left:45px;height: 100px"></textarea>
</p><br /><br />
  <p><br />
    <input type="submit" name="Submit" value="Envoyer" onClick="envoyer()" style="margin-left:160px;" />
  </p>
</form> </div>
           </br></br></br></br></br></br>
 </section>
<section>
    </html>