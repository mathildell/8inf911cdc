<!DOCTYPE html>
<html lang="<?= GN_CONFIG::WEBSITE_LANG ?>">
  <head>
    <title> <?php startblock('pageTitle'); endblock(); ?> | <?= GN_CONFIG::WEBSITE_TITLE; ?> </title>
    <meta name="description" content="<?= GN_CONFIG::WEBSITE_DESC; ?>">
    <meta name="Author" content="<?= GN_CONFIG::WEBSITE_AUTH; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= $root; ?>/view/assets/css/main.css"></script>
  </head>
  <body>
    <?php 

      include 'view/layout/inc/nav.inc.php';  
      
      startblock('pageContent'); endblock(); 

      include 'view/layout/inc/footer.inc.php'; 
    ?>

    <script src="<?= $root; ?>/view/assets/js/vendor/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?= $root; ?>/view/assets/js/vendor/bootstrap/javascripts/bootstrap-select.min.js" type="text/javascript"></script>

    <script src="<?= $root; ?>/view/assets/js/common.js" type="text/javascript"></script>

    <?php
      startblock('customScripts'); endblock(); 
    ?>
  </body>
</html>
