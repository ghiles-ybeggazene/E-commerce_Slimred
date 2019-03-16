<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=slimred', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}


$req="select * from messagerie where pseudoadmin='tahar' and pseudocl='tahar'and directioenv=1";
	             $res=$bdd->query($req);
	
	                 while($data=$res->fetch()){
	
	                 $msg=$data['contenu_message'];
					 
					  //$date=$data['date_msgOP'];
					   $odjet=$data['objet'];
                  
                        }
						
?>

<table style="margin:40px;"> <form>
<tr ><td width="20%">&nbsp;</td>
<td  width="30%"><b>Objet du message: </b> </td>
<td ><?php echo $odjet;?> </td> </tr>
<tr><td>&nbsp;  </td>
<td><b> Date d'envoie:</b></td>
 <?php include('deconnecter.php');?> 
<tr><td colspan="4">

<textarea  style="width:400px;height:200px;margin-left:60px;"name="text"id="text" disabled="fause" ><?php echo $msg;?></textarea>
</td></tr>   </form></table></center>
<br /></br></br></br></br></br></br></br></br></br></br>


 </section>
 <script>
     function envoyer(){
       alert("message envoyé");
     }</script>
