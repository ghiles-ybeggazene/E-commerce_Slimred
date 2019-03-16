<?php
session_start (); 


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>messagerie</title>

    <!-- Bootstrap -->
    <link href="css/entete.css" media="screen"/>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="css/style.css" rel="stylesheet">
    
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
  <body id="ww">
 <?php include('header_client.php');
$pseudocl=$_SESSION['pseudo'];
echo "Today is " . date("d-m-y") . "<br>";

      ?>

</head>
 <div class="container">



<div class="rr col-12 col-m-12 formulaire">
<section><br />
<div style="margin-left:0px;height:400px; ">

<form id="form1" name="form1" method="post" action="penvoi.php" style=" margin-left: 160px;">

  <p>
    Objet:<input type="text" name="objet" size="50"/>
</p><br />
  <p>
    <textarea name="msg" placeholder="tapez votre message" style=" width: 350px; margin-left:45px;height: 100px">
        
        
    </textarea>
</p><br /><br />
  <p><br />
    <input type="submit" name="Submit" value="Envoyer" onClick="envoyer()" style="margin-left:160px;" />
  </p>
</form> 
      
 </section>
 </div>
<section>
<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=slimred', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}

$req="select * from messagerie where pseudoadmin='tahar' and pseudocl='".$pseudocl."' and directioenv=0";
	             $res=$bdd->query($req);
	
	                 while($data=$res->fetch()){
	
	                 $msg=$data['contenu_message'];
					 
					  //$date=$data['date_msgOP'];
					   $objet=$data['objet'];
                  
                        
						
 ?> 
<table  <form>
<tr ><td width="20%">&nbsp;</td>
<td  width="30%"><b>Objet du message: </b> </td>
<td ><?php// echo $objet ;?> </td> </tr>

<tr><td>&nbsp;  </td>
<td><b> Date d'envoie:</b></td>
 
<tr><td colspan="4">
<textarea  style="width:400px;height:200px;margin-left:60px;"name="text"id="text" disabled="fause" ><?php echo $msg;?></textarea>
</td></tr>   </form></table></center>


<?php }
?>
 </section>
 </div>
 <script>
     function envoyer(){
       alert("message envoyé");
     }</script>
 <div class="sally-content">
          
         
                      <H2></H2>  
                    </div>
                     
                     <h2></h2>
                 </div>
             </div>
              
          </div><!--container-->
      </div>  <!--sally-content-->
      
  <?php include('footer.php'); ?>
     
     
     

  </body>
</html>