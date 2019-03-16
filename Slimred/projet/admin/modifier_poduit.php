<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SLIMred modifier produit</title>

<head>
<link rel="stylesheet" media="screen" href="css/entete.css" type="text/css" />
<link rel="stylesheet" media="screen" href="css/style.css" type="text/css" />
  


</head>
 <?php include('deconnecter.php');?> 

<body>
  
  <section>   </br>
  <form  action="modifier_prod.php" method="post" class="tableau"  >

<table>
<legend><b><i><u><h3 style='  text-shadow:2px 3px 10px #FF5959'>Formulaire de modification du produit </h3></u></i></b></legend> <br />
<tr>
<td class='td' bgcolor=#CCCCFF>reference produit</td>
<td><input type="text" name="reference_prod" autofocus required /></td>
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
<td class='td' bgcolor=#CCCCFF>Prix</td>
<td><input type="number" name="prix_unt"/></td>
</tr>   
    
    
    
    
    
    
<tr><td align="center" colspan="2"> <input type="submit" name="Submit" value="modifier produit" style="color: #993366; background-color: #FFECF1;  border-color: #333366; font-size: large; "/></td></tr>
</table>
  </form> 
    </section>
 
    </body>

</html>
   
   
   
  
    