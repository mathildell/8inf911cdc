<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   404 Not Found

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
?>
  

   <div id="notFound">
    <h1>Page not found</h1>
    <img src="<?= $root; ?>/view/assets/img/404.jpg" alt="Page Not Found" />
   </div>
   <section class="banner">
    <h4>Essayez une recherche ?</h4>
    <div class="content">
        <h5>Rechercher un livre, un auteur, un thème...</h5>
        <form class="form" method="POST">
          <div class="row">
            <div class="col-md-11">
              <input type="text" class="form-control" name="search_query_banner">
            </div>
            <div class="col-md-1">
              <button type="submit" class="btn btn-primary pull-right">Search</button>
            </div>
          </div>
        </form>
    </div>
   </section>

<?php endblock(); ?>

<?php startblock('customScripts'); ?>


<?php endblock(); ?>
