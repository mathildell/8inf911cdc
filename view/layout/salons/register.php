<div id="salons">
<?php
  if($logged){

  $getSalon = $Salons->get($_GET["id"])[0];
  $emphasedTags = $Books->getGenresBunks($getSalon["genres_id"]);
  $usersSalon = $Salons->getParticip($getSalon["users_id"], $getSalon["id"]);
  $isRegistered = false;
  $isPast = (time() > strtotime($getSalon["date"])) ? true : false;

  foreach ($usersSalon as $key => $userSl) {
    if(in_array($me["username"], $userSl)){
      $isRegistered = true;
    }
  }
  if(!$isRegistered){
    $Salons->registerUser($getSalon["id"], $me["id"]);
  }
  if($isPast){
  ?>
  <div class="mainTitle"><h1>Ce salon est fermé!</h1></div>
  <?php
  }else{
  ?>
  <div class="mainTitle"><h1><?= ($isRegistered) ? 'Vous êtes déjà inscrit!' : 'Merci de nous avoir rejoins!' ?></h1></div>

<section class="banner inner">
<div class="content">
  <div class="row">
    <div class="col-md-5">
      <p>Quisque facilisis erat a dui. Nam malesuada ornare dolor. Cras gravida, diam sit amet rhoncus ornare, erat elit consectetuer erat, id egestas pede nibh eget odio. </p> <br><p>Fusce et ipsum et nulla tristique facilisis. Donec eget sem sit amet ligula viverra gravida. Etiam vehicula urna vel turpis.</p>
    </div>
    <div class="col-md-offset-1 col-md-6 date-and-time">
      <h5>Date &amp; time</h5>
      <h6>Le <span><?= date("M j, o", strtotime($getSalon["date"])); ?></span><br> À <span><?= date("h:iA", strtotime($getSalon["date"])); ?></span></h6>
    </div>
  </div>
</div>
</section>
<section id="emphasisWork">
  <div class="row">
    <div class="col-md-8">
      <div class="work" id="emphased">
        <div class="row">
          <div class="col-md-3">
            <a href="<?= $root; ?>/book/<?= $getSalon["books_id"]; ?>">
              <img src="<?= $getSalon["image"]; ?>" alt="logo" />
            </a>
          </div>
          <div class="col-md-9 description">
            <h2><?= $getSalon["title"]; ?></h2>
            <h3>by <?= $getSalon["author"]; ?></h3>
            <p><?= $getSalon["description"]; ?></p>
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
                <a class="btn btn-primary pull-right readMore" href="<?= $root; ?>/book/<?= $getSalon["books_id"]; ?>">
                  voir plus
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <aside class="col-md-3 col-md-offset-1">
      <!--
      <div class="sideCat">
        <h5>Date &amp; time</h5>
        <h6><?= date("d/m/Y", strtotime($getSalon["date"])); ?> <span><?= date("h:iA", strtotime($getSalon["date"])); ?></span></h6>
      </div>
      -->
      <div class="sideCat" style="font-size:0px;">
        <?php
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
}
  }else{
    echo '<script>window.location.replace("'.$root.'/404");</script>';
  }
?>
</div>