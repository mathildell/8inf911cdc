<?php
  $booksEmphased = $Books->getCustom([":ALaUne" => "1"])[0];
  $emphasedTags =  $Books->getGenresBunks($booksEmphased["genres_id"]);
  $allgenres = $Books->getGenres();
?>
  

   <div id="discover">
    <div class="mainTitle">

          <h1>À la Une</h1>
    </div>
    <div class="row">
      <div class="col-md-8">
        <section id="emphasisWork">
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

          </section>
        <section id="allWorks">
          <?php
            $allbooks = $Books->getAll();
            foreach ($allbooks as $key => $book) {
              if($key < 9){
                if($key % 2 === 0){
                  echo '<div class="row">';
                }
                ?>
                <div id="<?= $book["google_id"]; ?>" class="work col-md-6">
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

                if($key % 2 === 1){
                  echo '</div>';
                }
              }
            }
          ?>

        </section>
          

        </div>

          <aside class="col-md-3 col-md-offset-1 pull-right">
            <div class="sideCat">
              <h5>Other genres</h5>
              <ul>
                <?php 
                foreach ($allgenres as $key => $genre) {
                ?>
                  <li><a href="<?= $root; ?>/discover/<?= $genre["id"]; ?>"><?= $genre["name"]; ?></a></li>
                <?php
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
   </div>
