<div id="salons">
<?php
  $getSalon = $Salons->get($_GET["id"])[0];
  $emphasedTags = $Books->getGenresBunks($getSalon["genres_id"]);

  $nextSalonid = $Salons->findNextSalon()[0]["id"];

  $usersSalon = $Salons->getParticip($getSalon["users_id"], $getSalon["id"]);
  
  $isPast = (time() > strtotime($getSalon["date"])) ? true : false;
  
  if($logged){
    $isRegistered = false;

    foreach ($usersSalon as $key => $userSl) {
      if(in_array($me["username"], $userSl)){
        $isRegistered = true;
      }
    }
    if(!$isRegistered){
      $isRegistered = $Salons->registerUser($getSalon["id"], $me["id"]);
      array_push($usersSalon, ["id" => $me["id"], "username" => $me["username"], "image" => $me["image"] ]);
    }
  }
  if($isPast){
?>
  <div class="mainTitle">
    <h1>
      Ce salon a eu lieu le 
      <span>
        <?= date("j F Y", strtotime($getSalon["date"])); ?>
      </span>
    </h1>
  </div>
<?php  
  }
  if(!$logged){
?>
<section class="banner inner">
<div class="content">
  <div class="row">
    <div class="col-md-5"><br>
      <p>Il vous faudra un compte d'utilisateur pour vous inscrire et participer à ce salon !</p>
      <br>
      <a class="btn btn-primary" href="<?= $root; ?>/login">Nous rejoindre</a>
    </div>
    <div class="col-md-offset-1 col-md-6 date-and-time">
      <h5>Date &amp; time</h5>
      <h6>Le <span><?= date("M j, o", strtotime($getSalon["date"])); ?></span><br> À <span><?= date("h:iA", strtotime($getSalon["date"])); ?></span></h6>
    </div>
  </div>
</div>
</section>
<?php
  }
  if(($getSalon["open"] == 1 && $logged) || $isPast){
?>
<section id="chatSect">
  <?php

  if($getSalon["open"] == 1){

  ?>
  <div class="mainTitle">
    <div class="row">
      <div class="col-md-8">
        <h1>
          Conversation sur l'oeuvre <span><?= $getSalon["title"]; ?></span>
        </h1>
      </div>
      <aside class="col-md-3 col-md-offset-1">
        <div class="sideCat" style="font-size:0px;">
          <?php
            if(!empty($usersSalon)){
          ?>
          <h5>Participants</h5>
          <ul style="font-size:14px;max-height: 100px;overflow-y: auto;">
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
        </div>
      </aside>
    </div>
  </div>
  <?php

  }

  ?>
  <div id="chatroom">
    <?php
      $allmessages = $Salons->getMessages($getSalon["id"]);
      foreach ($allmessages as $key => $msg) {
      ?>

      <div class="textMessage<?= ($msg["users_id"] === $me["id"]) ? ' me' : ''; ?>">
        <div class="content">
          <?= $msg["message"]; ?>
        </div>  
        <li class="user">
          <?php if($msg["users_id"] !== $me["id"]){ ?>
          <a href="<?= $root; ?>/profile/<?= $msg["users_id"]; ?>">
            <img src="<?= $msg["image"]; ?>" alt="<?= $msg["username"]; ?>">
            <?= $msg["username"]; ?>
          </a>
          <?php } ?>
          <span><?= date('d/m/y h:iA', strtotime($msg["timestamp"])); ?></span>
        </li>
      </div>

      <?php
      }
    ?>

  </div>
<?php 
  if($getSalon["open"] == 1 && $logged){
?>
  <form class="form" id="messageForm">
    <input type="hidden" id="docroot" name="docroot" val="<?= $root; ?>">
    <input type="hidden" id="users_id" name="users_id" value="<?= $me["id"]; ?>">
    <input type="hidden" id="salons_id" name="salons_id" value="<?= $getSalon["id"]; ?>">
    <input type="hidden" id="senderUsername" name="senderUsername" value="<?= $me["username"]; ?>">
    <input type="hidden" id="senderAvatar" name="senderAvatar" value="<?= $me["image"]; ?>">
    <input type="hidden" id="senderTimestamp" name="senderTimestamp" value="<?= date('Y-m-d H:m:s'); ?>">

    <input id="messageContent" class="form-control" type="text" placeHolder="Message" />
  
    <input type="submit" value="Send" class="btn btn-primary pull-right"/>

  </form>
<?php 
  }
?>
</section>
<?php 
}
?>
<section id="emphasisWork">
  <div class="row">
    <div class="<?= ($getSalon["open"] != 1) ? 'col-md-8' : 'col-md-10'; ?>">
      <div class="work" id="emphased">
        <div class="row">
          <div class="col-md-3">
            <a href="<?= $root; ?>/book/<?= $getSalon["books_id"]; ?>">
              <img src="<?= $getSalon["image"]; ?>" alt="logo" <?= ($getSalon["open"] == 1) ? ' style="width:100%;"' : ''; ?> />
            </a>
          </div>
          <div class="<?= ($getSalon["open"] != 1) ? 'col-md-9' : 'col-md-8 col-md-offset-1'; ?> description">
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
                <?php 
                if($nextSalonid === $getSalon["id"] && $getSalon["open"] != 1){
                ?>
                <a class="btn btn-primary pull-right readMore" href="<?= $root; ?>/salons/<?= $getSalon["id"]; ?>/join">
                  S'inscrire!
                </a>
                <?php
                }else{
                ?>
                <a class="btn btn-primary pull-right readMore" href="<?= $root; ?>/book/<?= $getSalon["books_id"]; ?>">
                  voir plus
                </a>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <aside class="col-md-3 col-md-offset-1">
      <?php if($getSalon["open"] != 1){ ?>
      <div class="sideCat">
        <h5>Date &amp; time</h5>
        <h6><?= date("d/m/Y", strtotime($getSalon["date"])); ?> <span><?= date("h:iA", strtotime($getSalon["date"])); ?></span></h6>
      </div>
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
      <?php } ?>
    </aside>
  </div>
</section>
</div>