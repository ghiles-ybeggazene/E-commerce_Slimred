
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SLIMred supp_prod</title>

<head>
<link rel="stylesheet" media="screen" href="css/entete.css" type="text/css" />
<link rel="stylesheet" media="screen" href="css/style.css" type="text/css" />
  


</head>


<body>
  
  <section>   </br>
  <form  action="supprime_produit.php" method="post" class="tableau"  >

<table>
<legend><b><i><u><h3 style='  text-shadow:2px 3px 10px #FF5959'>Formulaire de suppression De produit </h3></u></i></b></legend> <br />
<tr>
<td class='td' bgcolor=#CCCCFF>reference produit</td>
<td><input type="text" name="reference_prod"  autofocus required  /></td>
</tr>


<tr><td align="center" colspan="2"> <input type="submit" name="Submit" value="supprimer produit" style="color: #993366; background-color: #FFECF1;  border-color: #333366; font-size: large; "/></td></tr>
</table>
  </form> 
    </section>
 
 
    </body>

</html>
<?php
if (isset($_POST['reference_prod'])){
try
{
$bdd = new PDO('mysql:host=localhost;dbname=slimred', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$reference_prod=$_POST['reference_prod'];



$req = $bdd->prepare ('DELETE FROM produit WHERE reference_prod = :reference_prod');
$req->execute(array(
'reference_prod' => $reference_prod));



echo "La suppression a bien été effectué !";

}
else{
    
   echo "veuiez sasir une reference "; 
    
}


