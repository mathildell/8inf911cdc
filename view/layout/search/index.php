<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>Recherche<?php endblock(); ?>

<?php 
  startblock('pageContent'); 

  if(isset($_POST["search_query"])){
    $query = htmlspecialchars(trim($_POST["search_query"]));
    $search = $Books->searchResults($query);

//search_query
  }else{

  }
?>
  
  
   <div id="searchResults">
    <section id="headResults">
      <h1>Vous avez cherché "<i><?= $query ?></i>"</h1>
      <h2><?= count($search); ?> résultat<?= (count($search) > 1 || count($search) === 0 ) ? 's' : ''; ?> </h2>
    </section>


  <?php if(count($search) >= 1){
    ?>
    <section id="allWorks">
        <?php 
        foreach ($search as $key => $result) {
          if($key % 4 === 0){
            echo '<div class="row">';
          }
        ?>
        <div class="work col-md-3">
          <a class="row" href="<?= $root; ?>/book/<?= $result["id"]; ?>">
            <div class="col-md-4">
              <img src="<?= $result["image"]; ?>" alt="logo" />
            </div>
            <div class="col-md-8 description">
              <h2><?= $result["title"]; ?></h2>
              <h3>by <?= $result["author"]; ?></h3>
            </div>
          </a>
        </div>
        <?php
          if($key % 4 === 3 || $key == count($allbooks)-1){
            echo '</div>';
          }
        }
        ?>
      </div>
    </section>
    <?php
  }?>
   </div>
   <section class="banner">
    <h4>New search</h4>
    <div class="content">
        <h5>Rechercher un livre, un auteur, un thème...</h5>
        <form class="form" action="<?= $root; ?>/search" method="POST">
          <div class="row">
            <div class="col-md-11">
              <input type="text" class="form-control" name="search_query">
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
