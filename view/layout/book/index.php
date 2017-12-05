<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Page title

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 

  $book = $Books->get(intval($_GET["id"]))[0];
  $emphasedTags = $Books->getGenresBunks($book["genres_id"]);
  $recBooks = $Books->getRecommended($book["id"], $emphasedTags);

?> 
  
 <div id="book">
    <section id="emphasisWork">
      <div class="row">
        <div class="col-md-8">
          <div class="work" id="emphased">
            <input type="hidden" name="googleidemphased" id="googleidemphased" value="<?= $book["google_id"]; ?>">
            <div class="row">
              <div class="col-md-3">
                <a href="<?= $root; ?>/book/<?= $book["id"]; ?>">
                  <img id="emphasedImg" src="<?= $book["image"]; ?>" alt="logo" />
                </a>
              </div>
              <div class="col-md-9 description">
                <h2><?= $book["title"]; ?></h2>
                <h3>by <?= $book["author"]; ?>&nbsp;&nbsp;|&nbsp;&nbsp; <?= explode('-', $book["publishedDate"])[0]; ?></h3>
                <div id="emphasedDescription"><?= $book["description"]; ?></div>
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
                </div>
                <div class="morelinks">
                  <a href="#" class="btn btn-primary" id="readExtracts" target="_blank">
                    <i class="ion-ios-book"></i> Lire un extrait
                  </a>
                  <a href="#" target="_blank" class="btn btn-primary" id="buyOnGooglePlay">
                    <i class="ion-ios-download"></i> Acheter sur Google Play 
                    <span></span>
                  </a> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <aside class="col-md-3 col-md-offset-1">
          <?php if(count($recBooks) > 0){?>
          <div class="sideCat">
            <h5>Similar books</h5>
            <?php
              foreach ($recBooks as $key => $rec) {
                if($key < 3){
            ?>
              <div class="work">
                <a class="row" href="<?= $root; ?>/book/<?= $rec["id"]; ?>">
                  <div class="col-md-3">
                    <img src="<?= $rec["image"]; ?>" alt="logo" />
                  </div>
                  <div class="col-md-9 description">
                    <h2><?= $rec["title"]; ?></h2>
                    <h3>by <?= $rec["author"]; ?></h3>
                  </div>
                </a>
              </div>
            <?php

                }
              }
            ?>

          </div>
          <?php
            }
          ?>
        </aside>
      </div>
    </section>
    <section id="bookInfos">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-5">
              <p>
                <b>Date de publication:</b> <span id="publishDate"></span>
              </p>
              <p>
                <b>Maison d'édition:</b> <span id="publisher"></span>
              </p>
              <p>
                <b>Langue:</b> <span id="language"></span>
              </p>
              <p>
                <b>Maturity rating:</b> <span id="maturityRating"></span>
              </p>
            </div>
            <div class="col-md-6 col-md-offset-1">
              <p>
                <b>Code ISBN:</b> <span id="isbn"></span>
              </p>
              <p>
                <b>Note moyenne des reviews (Google Play):</b> <span id="averageRating"></span>
              </p>
              <p>
                <b>(Ebook) Nombre de pages:</b> <span id="pageCountEbook"></span>
              </p>
              <p>
                <b>(Hard cover) Nombre de pages:</b> <span id="pageCountHardCover"></span>
              </p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <?php
        $nextSalon = $Salons->findNextSalon()[0];
        if($nextSalon["books_id"] === $book["id"]){

    ?>
    <section class="banner inner">
    <h4>Sujet du prochain salon</h4>
    <div class="content">
      <div class="row">
        <div class="col-md-4">
          <p>Aliquam et nisl vel ligula consectetuer suscipit. Morbi euismod enim eget neque. Donec sagittis massa.</p>
        </div>
        <div class="col-md-4 date-and-time">
            <h6>Le <span><?= date("d/m/Y", strtotime($nextSalon["date"])); ?></span><br> À <span><?= date("h:iA", strtotime($nextSalon["date"])); ?></span></h6>
        </div>
        <div class="col-md-4">
          <p>Vestibulum quis augue sit amet ipsum laoreet pretium. Nulla facilisi.</p><br>
          <?php if($logged) { ?>
          <a href="<?= $root; ?>/salons/<?= $nextSalon["id"]; ?>" class="btn-primary btn">S'inscrire</a>
          <?php } else { ?>
          <a href="<?= $root; ?>/login" class="btn-primary btn">Nous rejoindre</a>
          <?php } ?>
        </div>
      </div>
    </div>
   </section>
   <?php
      }else{
        echo '<br><br><br>';
      }

      //if(!empty($book["comments_id"])){
        /* get comments */
        $comments = $Books->getComments($book["id"]);
   ?>
    <section id="comments">
      <h4>Comments</h4>
      <h5><?= count($comments); ?> review<?= (count($comments) > 1 || count($comments) == 0) ? 's' : ''; ?></h5>

      <div class="row">
        <aside class="col-md-3 col-md-offset-1 pull-right">
          <?php if(count($comments) > 0){ ?>
          <div class="sideCat">
            <h5>Trier les revues</h5>
            <div class="form-group">
              <select class="selectpicker">
                <option value="0">Récents</option>
                <option value="1">Auteurs: A-Z</option>
                <option value="2">Titres: A-Z</option>
              </select>
            </div>
          </div>
          <div class="sideCat">
            <h5>Chercher parmis les revues</h5>
            <div class="form-group">
              <input type="text" class="form-control" name="#" placeholder="#">
            </div>
          </div>
          <?php } ?>
        </aside>
        <div class="col-md-8">

          <?php 
            if(count($comments) > 0){ 
              foreach ($comments as $key => $com) {
                $getUser = $Users->get($com["users_id"])[0];
          ?>

          <div class="userReview">
            <h6><?= $com["title"]; ?></h6>
            <div class="user">
              <a href="<?= $root; ?>/profile/<?= $getUser["id"]; ?>">
                <img src="<?= $getUser["image"]; ?>">
                <?= $getUser["username"]; ?>
              </a>
              <datetime>
                Published on <?= date("d/m/Y", strtotime($com["timestamp"])); ?>
              </datetime>
            </div>
            <?= $com["content"]; ?>
          </div>
          <?php 
              }
            } ?>

          <form class="form" action="<?= $root; ?>?p=book&id=<?= $book["id"]; ?>&action=validateForm&formID=3" method="POST">
            <?php if(count($comments) > 0){ ?><br><br><hr><br><br><?php } ?>
            <input type="hidden" name="bookId" value="<?= $book['id']; ?>">
            <input type="hidden" name="userId" value="<?= $me['id']; ?>">
            
            <?php if(count($comments) === 0){ ?><h2>Soyez le premier à poster un commentaire!</h2><br><?php }else{ ?> <h2>Envoyer un commentaire</h2><br> <?php } ?>

            <div class="form-group">
              <label for="reviewTitle">Titre de la revue</label>
              <input type="text" class="form-control" id="reviewTitle" name="reviewTitle" required>
            </div>

            <div class="form-group">
              <label for="reviewContent">Contenu</label>
              <textarea rows="5" class="form-control" id="reviewContent" name="reviewContent" required></textarea>
            </div>

            <div class="form-group">
              <button class="btn btn-primary pull-right" type="submit" name="validateForm">Poster</button>
            </div>
          </form>
        </div>

      </div>

    </section>
    <?php
    ?>
      
 </div>


<?php endblock(); ?>

<?php startblock('customScripts'); ?>
<script>
$(function(){
  $.getJSON('https://www.googleapis.com/books/v1/volumes/<?= $book["google_id"]; ?>', function(data){
    console.log(data);
    
    if(typeof data.saleInfo.listPrice !== "undefined"){
      $('#buyOnGooglePlay span').text("("+data.saleInfo.listPrice.amount+data.saleInfo.listPrice.currencyCode+")");
    }else{
      $('#buyOnGooglePlay span').remove();
    }
    if(data.saleInfo.saleability !== "NOT_FOR_SALE"){
      $('#buyOnGooglePlay').attr({'href': data.saleInfo.buyLink });
    }else{
      $('#buyOnGooglePlay').remove();
    }

    $('#readExtracts').attr({'href': 'https://books.google.ca/books?id=<?= $book["google_id"]; ?>&printsec=frontcover&source=gbs_atb#v=onepage&q&f=false' });

    if(typeof data.volumeInfo.publishedDate !== "undefined"){
      $('#publishDate').text(data.volumeInfo.publishedDate);
    }else{
      $('#publishDate').remove();
    }
    if(typeof data.volumeInfo.language !== "undefined"){
      $('#language').text(data.volumeInfo.language);
    }else{
      $('#language').remove();
    }
    if(typeof data.volumeInfo.publisher !== "undefined"){
      $('#publisher').text(data.volumeInfo.publisher);
    }else{
      $('#publisher').remove();
    }
    if(typeof data.volumeInfo.maturityRating !== "undefined"){
      $('#maturityRating').text(data.volumeInfo.maturityRating);
    }else{
      $('#maturityRating').remove();
    }
    if(typeof data.volumeInfo.industryIdentifiers[1].identifier !== "undefined"){
      $('#isbn').text("ISBN " + data.volumeInfo.industryIdentifiers[1].identifier);
    }else{
      $('#isbn').remove();
    }
    if(typeof data.volumeInfo.averageRating !== "undefined"){
      $('#averageRating').text(data.volumeInfo.averageRating);
    }else{
      $('#averageRating').remove();
    }
    if(typeof data.volumeInfo.pageCount !== "undefined"){
      $('#pageCountEbook').text(data.volumeInfo.pageCount);
    }else{
      $('#pageCountEbook').remove();
    }
    if(typeof data.volumeInfo.printedPageCount !== "undefined"){
      $('#pageCountHardCover').text(data.volumeInfo.printedPageCount);
    }else{
      $('#pageCountHardCover').remove();
    }
  });
  //?key=AIzaSyA7xLy_fqc3hG57fYLqd6G7rVKQaU0lF4I
});
</script>
<?php endblock(); ?>
