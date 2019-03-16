<?php session_start (); ?>
<?php
 

if (!isset($_SESSION))
  {
    session_start();
  }
$_SESSION['loged']=TRUE;
session_destroy();
header("location:admin.php");
exit();
?>


