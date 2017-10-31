<!DOCTYPE html>
<html lang="<?= GN_CONFIG::WEBSITE_LANG ?>">
  <head>
    <title> <?php startblock('pageTitle'); endblock(); ?> | <?= GN_CONFIG::WEBSITE_TITLE; ?> </title>
    <meta name="description" content="<?= GN_CONFIG::WEBSITE_DESC; ?>">
    <meta name="Author" content="<?= GN_CONFIG::WEBSITE_AUTH; ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="view/assets/css/main.css"></script>
  </head>
  <body>
    <?php 

      include 'view/layout/inc/header.inc.php'; 

      include 'view/layout/inc/nav.inc.php'; 
      
      startblock('pageContent'); endblock(); 

      include 'view/layout/inc/footer.inc.php'; 
    ?>
  </body>
</html>
