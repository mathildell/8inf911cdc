<?php
  $genre = $Books->getGenreByID(intval($_GET["id"]))[0];
  $allgenres = $Books->getGenres();
  $booksEmphased = $Books->findEmphasedOfGenre(intval($_GET["id"]))[0];
  $emphasedTags = $Books->getGenresBunks($booksEmphased["genres_id"]);
?>
  
   <div id="discover">
    <?php
    if($booksEmphased !== NULL){
      ?>
      <section id="emphasisWork" style="margin-bottom: 0px;">
        <h1>À la Une</h1>
        <div class="row">
          <div class="col-md-8">
            <div class="work" id="emphased">
              <input type="hidden" id="googleidemphased" value="<?= $booksEmphased["google_id"]; ?>">
              <div class="row">
                <div class="col-md-3">
                  <a href="<?= $root; ?>/book/<?= $booksEmphased["id"]; ?>">
                    <img src="<?= $booksEmphased["image"]; ?>" id="emphasedImg" alt="logo" />
                  </a>
                </div>
                <div class="col-md-9 description">
                  <h2 id="emphasedTitle"><?= $booksEmphased["title"]; ?></h2>
                  <h3>by <?= $booksEmphased["author"]; ?> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;  <?= $booksEmphased["publisher"]; ?>, <?= explode('-', $booksEmphased["publishedDate"])[0]; ?></h3>
                  <div id="emphasedDesc"><?= $booksEmphased["description"]; ?></div>
                  <div class="row metaData">
                    <div class="col-md-8">
                      <ul class="tags">
                        <?php 
                        foreach ($emphasedTags as $key => $tag) {
                        ?>
                          <li><a href="<?= $root; ?>/discover/<?= $tag["id"]; ?>">#<?= $tag["name"]; ?></a></li>
                        <?php
                        }
                        ?>
                        
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <a href="<?= $root; ?>/book/<?= $booksEmphased["id"]; ?>" class="btn btn-primary pull-right readMore">
                        voir plus
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <aside class="col-md-3 col-md-offset-1">
            <div class="sideCat">
              <h2><?= $genre["name"] ?></h2>
            </div>
            <div class="sideCat">
              <h5>Other genres</h5>
              <ul>
                <?php 
                foreach ($allgenres as $key => $genre) {
                  if($key < 6){
                ?>
                  <li><a href="<?= $root; ?>/discover/<?= $genre["id"]; ?>"><?= $genre["name"]; ?></a></li>
                <?php
                  }
                }
                ?>
              </ul>
            </div>
            <div class="sideCat">
              <h5>Trier les résultats</h5>
              <div class="form-group">
                <select class="selectpicker">
                  <option value="0">Nouveautées</option>
                  <option value="1">Popularité</option>
                  <option value="2">Auteurs: A-Z</option>
                  <option value="3">Titres: A-Z</option>
                </select>
              </div>
            </div>
          </aside>



        </div>
      </section>

      <?php
      }
      ?>
      <section id="allWorks">
        <?php
          if($booksEmphased === NULL){
          ?>
          <div class="row">
            <div class="col-md-8">
          <?php
          }

          $allbooks = $Books->getByGenre(intval($_GET["id"]));
          foreach ($allbooks as $key => $book) {
              //var_dump($key % 2);
            if($key < 9){
              if($booksEmphased === NULL){
                if($key % 2 === 0){
                  echo '<div class="row">';
                }
              }else{
                if($key % 3 === 0){
                  echo '<div class="row">';
                }
              }
              ?>

              <div id="<?= $book["google_id"]; ?>" class="work <?= ($booksEmphased !== NULL) ? 'col-md-3' : 'col-md-5' ?> <?= (($key % 3 !== 0 && $booksEmphased !== NULL) || ($key % 2 !== 0 && $booksEmphased === NULL)) ? ' col-md-offset-1': ''; ?>" <?= ($key < 2 && $booksEmphased === NULL) ? ' style="margin-top:0px;"': ''; ?>>
                <a class="row" href="<?= $root; ?>/book/<?= $book["id"]; ?>">
                  <div class="col-md-4">
                    <img class="bookImg" src="<?= $book["image"]; ?>" alt="logo" />
                  </div>
                  <div class="col-md-8 description">
                    <h2 class="title"><?= $book["title"]; ?></h2>
                    <h3>by <?= $book["author"]; ?></h3>
                  </div>
                </a>
              </div>
              <?php
              if($booksEmphased === NULL){
                if($key % 2 === 1 || $key == count($allbooks)-1){
                  echo '</div>';
                }
              }else{
                if($key % 3 === 2 || $key == count($allbooks)-1){
                  echo '</div>';
                }
              }
            }
          }

          if($booksEmphased === NULL){
          ?>

          </div>
          <aside class="col-md-3 col-md-offset-1">
            <div class="sideCat">
              <h2><?= $genre["name"] ?></h2>
            </div>
            <div class="sideCat">
              <h5>Other genres</h5>
              <ul>
                <?php 
                foreach ($allgenres as $key => $genre) {
                  if($key < 6){
                ?>
                  <li><a href="<?= $root; ?>/discover/<?= $genre["id"]; ?>"><?= $genre["name"]; ?></a></li>
                <?php
                  }
                }
                ?>
              </ul>
            </div>
            <div class="sideCat">
              <h5>Trier les résultats</h5>
              <div class="form-group">
                <select class="selectpicker">
                  <option value="0">Nouveautées</option>
                  <option value="1">Popularité</option>
                  <option value="2">Auteurs: A-Z</option>
                  <option value="3">Titres: A-Z</option>
                </select>
              </div>
            </div>
          </aside>
        </div>
          <?php
          }
        ?>
        


      </section>
        
   </div>
