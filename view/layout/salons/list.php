<?php
  $nextSalon = $Salons->findNextSalon()[0];
  $emphasedTags = $Books->getGenresBunks($nextSalon["genres_id"]);
?>
<div id="salons">
<section id="emphasisWork">
  <h1><?= ($nextSalon["open"] == 1) ? ' <span style="padding: 5px 15px;" class="thumb warning">ouvert</span>' : ''; ?> Prochain Salon</h1>
  <div class="row">
    <div class="col-md-8">
      <div class="work" id="emphased">
        <div class="row">
          <div class="col-md-3">
            <a href="<?= $root; ?>/book/<?= $nextSalon["books_id"]; ?>">
              <img src="<?= $nextSalon["image"]; ?>" alt="logo" />
            </a>
          </div>
          <div class="col-md-9 description">
            <h2><?= $nextSalon["title"]; ?></h2>
            <h3>by <?= $nextSalon["author"]; ?></h3>
            <p><?= $nextSalon["description"]; ?></p>
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
              <?php if($logged && $nextSalon["open"] != 1){ ?>
              <div class="col-md-4">
                <a class="btn btn-primary pull-right readMore" href="<?= $root; ?>/salons/<?= $nextSalon["id"]; ?>/join">
                  S'inscrire!
                </a>
              </div>
              <?php }else if($logged && $nextSalon["open"] == 1){ ?>
              <div class="col-md-4">
                <a class="btn btn-primary pull-right readMore" href="<?= $root; ?>/salons/<?= $nextSalon["id"]; ?>">
                  Rejoindre!
                </a>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <aside class="col-md-3 col-md-offset-1">
      <div class="sideCat">
        <h5>Date &amp; time</h5>
        <h6><?= date("d/m/Y", strtotime($nextSalon["date"])); ?> <span><?= date("h:iA", strtotime($nextSalon["date"])); ?></span></h6>
      </div>
      <div class="sideCat" style="font-size:0px;">
        <?= 
          $usersSalon = $Salons->getParticip($nextSalon["users_id"], $nextSalon["id"]);
          if(!empty($usersSalon)){
        ?>
        <h5>Participants</h5>
        <ul style="font-size:14px;">
        <?php
            foreach ($usersSalon as $key => $usr) {
        ?>
          <li>
            <a href="<?= $root;?>/profile/<?= $usr["id"]; ?>" class="user">
              <img src="<?= $usr["image"]; ?>" alt="<?= $usr["username"]; ?>">
              <?= $usr["username"]; ?>
            </a>
          </li>
        <?php
            }
          }
        ?>
        </ul>
        <?php
          if(!empty($usersSalon) && count($usersSalon) > 2){
        ?>
            <i>Et plus..!</i>
        <?php
          }
        ?>
      </div>
    </aside>
  </div>
</section>
  <?php
    if(!$logged){
  ?>

 <section class="banner inner">
  <h4>Pour participer</h4>
  <div class="content">
    <div class="row">
      <div class="col-md-4">
        <p>Aliquam et nisl vel ligula consectetuer suscipit. Morbi euismod enim eget neque. Donec sagittis massa.</p>
      </div>
      <div class="col-md-4">
        <p>Vestibulum quis augue sit amet ipsum laoreet pretium. Nulla facilisi. Duis tincidunt, felis et luctus placerat, ipsum libero vestibulum sem, vitae elementum wisi ipsum a metus.</p>
      </div>
      <div class="col-md-4">
        <p>Vestibulum quis augue sit amet ipsum laoreet pretium. Nulla facilisi.</p><br>
        <a href="<?= $root; ?>/login" class="btn-primary btn">Nous rejoindre</a>
      </div>
    </div>
  </div>
 </section>
 <?php
  }
  ?>
  <section id="allWorks">
    <h2>Salons passés</h2>
    <?php 
    //time() > strtotime($salon["date"]),
    $pastSalons = $Salons->getPast();
      foreach ($pastSalons as $key => $sal) {
        if($key % 3 === 0){
          echo '<div class="row">';
        }
    ?>
      <div class="work col-md-3<?= ($key % 3 !== 0) ? ' col-md-offset-1': '' ?>">
        <a class="row" href="<?= $root; ?>/salons/<?= $sal["id"]; ?>">
          <div class="col-md-4">
            <img src="<?= $sal["image"]; ?>" alt="logo" />
          </div>
          <div class="col-md-8 description">
            <h2><?= $sal["title"]; ?></h2>
            <h3>by <?= $sal["author"]; ?></h3>
          </div>
        </a>
      </div>

    <?php
        if($key % 3 === 2 || $key == count($pastSalons)-1){
          echo '</div>';
        }
        # code...
      }
    ?>
    </div>
  </section>
</div>