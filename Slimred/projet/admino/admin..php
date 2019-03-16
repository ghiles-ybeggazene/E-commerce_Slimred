
<?php session_start (); ?>


<?php 

if(isset($_session['username'])){


}
else{

header('location:index.php');

}
?>
<h1>Bienvenu, <?php echo $_session['username'];?></h1>
<a href="? action=add"

<?php 
   
   
   ?>
