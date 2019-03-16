<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=slimred;charset=utf8', 'root', '', 
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());

}
if(isset($_POST['rech']))
 
   {
    if(isset($_POST['motcle']))
    {
   $mc= htmlspecialchars($_POST['motcle']);
	$recherche=$bdd->prepare('SELECT*FROM produit WHERE nom_piece like ?  ');
	
	$recherche->execute(array('%'.$mc.'%'));


	//	echo '<ul>';

			while ($donnees = $recherche->fetch())

				{ ?>
                    
                <div class="col-xs-4 " >
    <div class="thumbnail"style="height:480px;">
      <img  class="img img-thumbnail im" src = "<?php echo $donnees['img']; ?>"style="height:100px" />
      <div class="caption">
        <h2 style="color:blue;">Informations</h2>
      <p><?php 
    echo '<pre><h4 >'.$donnees['information'].'</h4></pre>';
    echo '<h2 style="font-weight:bold;">Prix:'.number_format( $donnees['prix_unt'],'2') .' DA</h2> </br>';
echo'quantite:<input type="number" name="quantite" required  /></br></br>
<input type="submit" value="ajout au panier" />
</p>';
    ?>
     </p>
        
      </div>
    </div>
  </div>
<?php
				/*	echo '<li>' . $donnees['id_categorie'] . '</li>';
					echo '<li>' . $donnees['information'] . '</li>';
					echo '<li>' . $donnees['prix'] . '</li>';	
					echo '<li>' . $donnees['image'] . '</li>';
					echo '<li>' . $donnees['promotion'] . '</li>';
					echo '<li>' . $donnees['quantite_produit'] . '</li>' */
					
					
				}

	//	echo '</ul>';


	$recherche->closeCursor();
}
}
?>
