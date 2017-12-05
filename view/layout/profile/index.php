<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Page title

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
  
  if($_GET["id"] === $me["id"]){
    $user = $me;
    $myprofile = true;
  }else{
    $userid = intval($_GET["id"]);
    $user = $Users->get($userid)[0];
  }
  
  if(
    isset($_GET["action"]) && $_GET["action"] === "edit" 
    && $_GET["id"] === $me["id"]
  ){
    include 'edit.php';
  }else{
    if(empty($user)){
  ?>
    <script>window.location.replace("<?= $root; ?>/404");</script>
  <?php
    }else{
      include 'display.php';
    }
  }
endblock(); ?>

<?php startblock('customScripts'); ?>


<?php endblock(); ?>
