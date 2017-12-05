<div id="profile">
  <section id="aboutUser">
    <div class="row">
      <div class="col-md-2">
        <img src="<?= $root.'/'.$user["image"]; ?>" alt="<?= $user["username"]; ?>">
      </div>
      <div class="col-md-4 profileSummary">
        <h1><?= $user["username"]; ?></h1>
        <p>Member since <span><?= date('M jS, o', strtotime($user["registered"])); ?></span></p>
        <p><span class="ion-android-mail"></span> <code><?= $user["email"]; ?></code></p>
      </div>
      <div class="col-md-6 writtenAbout">
        <h2>About me</h2>
        <p><?= $user["about"]; ?></p>
        <?php 
          if($myprofile){
        ?>
          <br>
          <a href="/profile/<?= $me['id']; ?>/edit" class="btn btn-primary pull-right">Éditer le profil</a>
        <?php
          }
        ?>
      </div>
    </div>
  </section>
  <?php
    if(!empty($me["salons_id"])){
  ?>
  <section id="salonsUser">
    <div class="row">
      <div class="col-sm-12 salonsHead">
        <h3>Ses salons</h3>
      </div>
    </div>
    <div class="row">
      <div class="work col-md-3">
        <a class="row">
          <div class="col-md-4">
            <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
          </div>
          <div class="col-md-8 description">
            <h2>Simon vs. the Homo Sapiens Agenda</h2>
            <h3>by Becky Albertalli</h3>
          </div>
        </a>
      </div>

      <div class="work col-md-offset-1 col-md-3">
        <a class="row">
          <div class="col-md-4">
            <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
          </div>
          <div class="col-md-8 description">
            <h2>Simon vs. the Homo Sapiens Agenda</h2>
            <h3>by Becky Albertalli</h3>
          </div>
        </a>
      </div>

      <div class="work col-md-offset-1 col-md-3">
        <a class="row">
          <div class="col-md-4">
            <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
          </div>
          <div class="col-md-8 description">
            <h2>Simon vs. the Homo Sapiens Agenda</h2>
            <h3>by Becky Albertalli</h3>
          </div>
        </a>
      </div>
    </div>
  </section>
  <?php
    }
  ?>

</div>