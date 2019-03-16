
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SLIMred prod!</title>

<head>
<link rel="stylesheet" media="screen" href="css/entete.css" type="text/css" />
<link rel="stylesheet" media="screen" href="css/style.css" type="text/css" />
  


</head>


<body>
 <?php include('deconnecter.php');?> 
  <section>   </br>
  <form name="form" action="ajout_produito.php" method="post" class="tableau" enctype="multipart/form-data" >

<table>
<legend><b><i><u><h3 style='  text-shadow:2px 3px 10px #FF5959'>Formulaire d'ajout De produit</h3></u></i></b></legend> <br />
<tr>
<td class='td' bgcolor=#CCCCFF>nom</td>
<td><input type="text" name="nom_piece"/></td>
</tr>
<tr>
<td class='td' bgcolor=#CCCCFF >reference</td>
<td><input type="text" name="reference_prod"/></td>
</tr>

<tr>
<td class='td' bgcolor=#CCCCFF>Poid Net</td>
<td><input type="number" name="poid_piece"/></td>
</tr>


<tr>
<td class='td' bgcolor=#CCCCFF >information</td>
<td><input type="text" name="information"/></td>
</tr>
<tr>
<td class='td' bgcolor=#CCCCFF>Nombre Modele</td>
<td><input type="number" name="nbr_modele"/></td>
</tr>
<tr>
<td class='td' bgcolor=#CCCCFF>Image</td>
<td><input type="file" name="monfichier"/></td>
</tr><tr>
<td class='td' bgcolor=#CCCCFF>Catégorie</td>
<td ><select name="categorie">
    <option value="soupape">Soupapes:</option>
    <option value="robinettrie">Robinettrie:</option>
    <option value="echangeur">Echangeur de chaleur:</option>
    <option value="instrumentation">instrumentations:</option>
    
    <option value="filtration">Filtration:</option>
  </select> </td>
</tr><tr>
<td class='td' bgcolor=#CCCCFF>Prix</td>
<td><input type="number" name="prix_unt"/></td>
</tr>
<tr><td align="center" colspan="2"> <input type="submit" name="Submit" value="Ajouter" style="color: #993366; background-color: #FFECF1;  border-color: #333366; font-size: large; "/></td></tr>
</table>
  </form> 
    </section>
 
 
    </body>

</html>
