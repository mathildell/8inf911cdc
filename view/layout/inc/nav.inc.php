<nav>
  <button class="responsive-menu btn btn-primary icon-angle-double-up"></button>
  <ul class="nav-left">
    <li>
      <a href="/home"<?= ($page == 'home') ? 'class="active"' : ''; ?>> Accueil </a>
    </li>
    <li id="discoverLink">
      <a href="/discover"<?= ($page == 'discover') ? 'class="active"' : ''; ?>> Découvrir </a>

      <div id="discoverPanel">
        <div class="row-table">
          <div class="col" id="browseByGenres">
            <h3>Catégories</h3>
            <ul>
              <li><a href="#">ejzj</a></li>
              <li><a href="#">ejzj</a></li>
            </ul>
          </div>
          <div class="col" id="newArrivals">
            <h3>Nouveautées</h3>
            <ul>
              <li><a href="#">ejzj</a></li>
              <li><a href="#">ejzj</a></li>
            </ul>
          </div>
          <div class="col" id="articleUne">
            <h3>À la une</h3>
            <div class="row-table">
              <div class="col">
                <h4><a href="#">Simon vs. the Homo Sapiens Agenda</a> by Becky Albertalli</h4>
                <p>Sixteen-year-old and not-so-openly gay Simon Spier prefers to save his drama for the school musical.</p>
                <br> <br>
                <a class="btn btn-primary">voir plus</a>
              </div>
              <div class="col">
                <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="#" />
              </div>
            </div>
          </div>

        </div>
        
      </div>

    </li>
    <li>
      <a href="/salons"<?= ($page == 'salons') ? 'class="active"' : ''; ?>> Salons </a>
    </li>
  </ul>
  <a href="/home" class="logo">
    <img src="<?= $root; ?>/view/assets/img/logo.png" alt="logo" />
  </a>
  <ul class="nav-right">
    <li>
      <a href="/admin"<?= (isset($_GET["admin"])) ? 'class="active"' : ''; ?>>Admin</a>
    </li>
    <li>
      <a href="/login"<?= ($page == 'login') ? 'class="active"' : ''; ?>> Connexion/Inscription </a>
    </li>
    <li>
      <a href="#" id="searchbar" class="<?= ((isset($page)) && $page === 'search') ? 'icon-x' : 'icon-search'; ?>"></a>
    </li>
  </ul>
  <div id="searchNav"<?= ((isset($page)) && $page === 'search') ? ' class="activated"' : ''; ?>>
    <form class="form-inline" method="POST">
        <input type="text" class="form-control" placeholder="Rechercher un livre, un auteur, un thème..." name="search_query">
    </form>
  </div>
</nav>