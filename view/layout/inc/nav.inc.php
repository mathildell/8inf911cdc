<?php
  $allyenres = $Books->getGenres();
  $booksOrderByNew = $Books->getNews();
  $bestOfBest = $Books->custom("SELECT id, title, description, author, image FROM books WHERE ALaUne = '1' ORDER BY RAND() LIMIT 1")[0];

?>
<nav>
  <button class="responsive-menu btn btn-primary ion-android-menu"></button>
  <ul class="nav-left">
    <li>
      <a href="/home"<?= ($page == 'home') ? ' class="active"' : ''; ?>> Accueil </a>
    </li>
    <li id="discoverLink">
      <a href="/discover"<?= ($page == 'discover' || $page == 'book') ? ' class="active"' : ''; ?>> Découvrir </a>

      <div id="discoverPanel">
        <div class="row-table">
          <div class="col" id="browseByGenres">
            <h3>Catégories</h3>
            <ul>
              <?php foreach ($allyenres as $key => $yenre) {
                if($key < 14){
              ?>
                <li><a href="<?= $root; ?>/discover/<?= $yenre["id"]; ?>"><?= $yenre["name"]; ?></a></li>
              <?php
                }
              }
              ?>
            </ul>
          </div>
          <div class="col" id="newArrivals">
            <h3>Nouveautées</h3>
            <ul>
              <?php foreach ($booksOrderByNew as $key => $ordernew) {
              ?>
                <li>
                  <a href="<?= $root; ?>/book/<?= $ordernew["id"]; ?>">
                    <h2><?= $ordernew["title"]; ?></h2>
                    <h3><?= $ordernew["author"]; ?></h3>
                  </a>
                </li>
              <?php
              }
              ?>
            </ul>
          </div>
          <div class="col" id="articleUne">
            <h3>À la une</h3>
            <div class="row-table">
              <div class="col">
                <h4><a href="<?= $root; ?>/book/<?= $bestOfBest["id"]; ?>"><?= $bestOfBest["title"]; ?></a> by <?= $bestOfBest["author"]; ?></h4>
                <p><?= preg_replace('/([^?!.]*.).*/', '\\1', $bestOfBest["description"]); ?></p>
                <br> <br>
                <a class="btn btn-primary" href="<?= $root; ?>/book/<?= $bestOfBest["id"]; ?>">voir plus</a>
              </div>
              <div class="col">
                <img src="<?= $bestOfBest["image"]; ?>" alt="<?= $bestOfBest["title"]; ?>" />
              </div>
            </div>
          </div>

        </div>
        
      </div>

    </li>
    <li>
      <a href="/salons"<?= ($page == 'salons' && !isset($_GET["admin"])) ? ' class="active"' : ''; ?>> Salons </a>
    </li>
  </ul>
  <a href="/home" class="logo">
    <img src="<?= $root; ?>/view/assets/img/logo.png" alt="logo" />
  </a>
  <ul class="nav-right">
    <?php 
      if($isadmin){
    ?>
      <li>
        <a href="/admin"<?= (isset($_GET["admin"])) ? ' class="active"' : ''; ?>>Admin</a>
      </li>
    <?php
      }

      if($logged){
    ?>
      <li>
        <a href="/profile/<?= $me['id']; ?>"<?= ($page == 'profile' && $_GET["id"] === $me["id"]) ? ' class="active"' : ''; ?>><span></span> <?= $me["username"]; ?></a>
      </li>

      <li>
        <a href="<?= $root ?>?p=home&logout=true"> <span class="ion-power"></span> Logout </a>
      </li>
    <?php
      }else{
    ?>
      <li>
        <a href="/login"<?= ($page == 'login') ? ' class="active"' : ''; ?>> Connexion/Inscription </a>
      </li>
    <?php
      }
    ?>
    <li>
      <a href="#" id="searchbar" class="<?= ((isset($page)) && $page === 'search') ? 'ion-android-close' : 'ion-android-search'; ?>"></a>
    </li>
  </ul>
  <div id="searchNav"<?= ((isset($page)) && $page === 'search') ? ' class="activated"' : ''; ?>>
    <form class="form-inline" method="POST" action="<?= $root; ?>/search">
        <input type="text" class="form-control" placeholder="Rechercher un livre, un auteur, un thème..." name="search_query">
    </form>
  </div>
</nav>