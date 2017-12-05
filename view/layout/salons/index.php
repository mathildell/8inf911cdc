<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Salons

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
  
  if(isset($_GET["id"]) && !isset($_GET["action"])){
    include 'details.php';
  }else if(isset($_GET["id"]) && isset($_GET["action"])){
    include 'register.php';
  }else{
    include 'list.php';
  }
?>
  

<?php endblock(); ?>

<?php startblock('customScripts'); ?>
<?php endblock(); ?>
