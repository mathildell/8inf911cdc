  <?php

    $book = $Books->get($_GET["id"])[0];
    //var_dump($book);

  ?>
  <form class="form" action="<?= $root; ?>?p=books&admin=true&action=validateForm&formID=93" method="POST">
    <input type="hidden" name="googleId" id="googleId" value="<?= $book['google_id']; ?>">
    <input type="hidden" name="id" id="id" value="<?= $book['id']; ?>">
    <input type="hidden" id="bookImagee" name="bookImagee" value="<?= $book['image']; ?>">
    <section id="emphasisWork">
        <div class="row">
          <div class="col-md-8">
            <div class="work" id="emphased">
              <div class="row">
                <div class="col-md-3">
                    <img src="<?= $book['image']; ?>" id="bookImage"/>
                </div>
                <div class="col-md-9 description">
                  <div class="form-group"><label for="bookTitlee">Title</label><input type="text" class="form-control" id="bookTitlee" name="bookTitlee" value="<?= $book["title"]; ?>"></div>
                  <div class="form-group"><label for="bookAuthor">Auteur</label><input type="text" class="form-control" id="bookAuthor" name="bookAuthor" value="<?= $book["author"]; ?>"> </div>
                  <div class="form-group"><label for="bookPublisher">Maison d'édition</label><input type="text" class="form-control" id="bookPublisher" name="bookPublisher" value="<?= $book["publisher"]; ?>"></div>
                  <div class="form-group"><label for="bookPublishedDate">Date de publication</label><input type="text" class="form-control" id="bookPublishedDate" name="bookPublishedDate" value="<?= $book["publishedDate"]; ?>"> </div>
                  <label for="desc_content">Résumé</label><textarea rows="5" class="form-control" id="desc_content" name="bookDescription"><?= $book["description"]; ?></textarea>
                </div>

              </div>
            </div><br>
            <button class="btn btn-primary pull-right" type="submit" name="validateForm">Modifier le livre</button>
          </div>

          <aside class="col-md-3 col-md-offset-1">
            <div class="sideCat">
              <div class="form-group">
                <h3>À la une</h3>
                <label class="form-radio"><input type="radio" class="form-control" name="aLaUne" value="0" <?= (intval($book["ALaUne"]) === 0) ? 'checked' : '' ?>> No</label>
                <label class="form-radio"><input type="radio" class="form-control" name="aLaUne" value="1" <?= (intval($book["ALaUne"]) === 1) ? 'checked' : '' ?>> Yes</label>
              </div>

            </div>
            <div class="sideCat">
              <h3>Genres</h3>
              <ul id="tags">
              <?php 
                $genresID = $Books->getGenresBunks($book['genres_id']);
                foreach ($genresID as $key => $genre) {
                  if(!empty($genre)){
                    echo '<li><a href="'.$root.'/admin/genres/'.$genre["id"].'/edit">'.$genre["name"].'</a> <a href="#" data-id="'.$genre["id"].'" class="deleteGenre"> <span class="ion-trash-a"></span></a></li>';
                  }
                }
              ?>
              </ul>
              <input type="hidden" id="genres" name="genres" value="<?= $book['genres_id'] ?>">
              <input type="hidden" id="addedGenres" name="addedGenres">
              <div class="form-group ui-widget"><br>
                <small><label for="addGenre">Ajouter un genre</label></small>
                <input type="text" class="form-control" id="addGenre" name="addGenre" placeholder="Genre">
              </div>
            </div>
          </aside>

        </div>
      </section>

  </form>
  <!--  -->