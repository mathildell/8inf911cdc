<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Search results

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
?>
  

   <div id="searchResults">
    <section id="headResults">
      <h1>Vous avez cherché "<i>xxx</i>"</h1>
      <h2>13 résultats</h2>
    </section>



    <section id="allWorks">
      <div class="row">
        <div class="work col-md-3">
          <a class="row">
            <div class="col-md-4">
              <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
            </div>
            <div class="col-md-8 description">
              <h2>Simon vs. the Homo Sapiens Agenda</h2>
              <h3>by Becky Albertalli</h3>
            </div>
          </a>
        </div>

        <div class="work col-md-offset-1 col-md-3">
          <a class="row">
            <div class="col-md-4">
              <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
            </div>
            <div class="col-md-8 description">
              <h2>Simon vs. the Homo Sapiens Agenda</h2>
              <h3>by Becky Albertalli</h3>
            </div>
          </a>
        </div>

        <div class="work col-md-offset-1 col-md-3">
          <a class="row">
            <div class="col-md-4">
              <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
            </div>
            <div class="col-md-8 description">
              <h2>Simon vs. the Homo Sapiens Agenda</h2>
              <h3>by Becky Albertalli</h3>
            </div>
          </a>
        </div>
      </div>
      


    </section>
   </div>
   <section class="banner">
    <h4>New search</h4>
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
