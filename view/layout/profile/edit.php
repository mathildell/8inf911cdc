<div id="profile">
  <form id="aboutUser" class="form" action="<?= $root; ?>?p=profile&id=<?= $me['id']; ?>&action=validateForm&formID=2" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="userid" value="<?= $me['id']; ?>">
    <div class="row">
      <div class="col-md-2">
        <img src="<?= $root.'/'.$user["image"]; ?>" alt="<?= $user["username"]; ?>">
        <label class="btn btn-primary btn-file">
            <span class="ion-upload"></span> Browse <input type="file" name="profileImage" id="profileImage">
        </label>
      </div>
      <div class="col-md-4 profileSummary">
        <div class="form-group">
          <label for="profileUsername">Username</label>
          <input type="text" class="form-control" id="profileUsername" name="profileUsername" placeholder="Username" value="<?= $user["username"]; ?>">
        </div>
        <div class="form-group">
          <label for="profileEmail">Email</label>
          <input type="email" class="form-control" id="profileEmail" name="profileEmail" placeholder="Email" value="<?= $user["email"]; ?>">
        </div>
        <div class="form-group">
          <label for="profilePassword">Password</label>
          <input type="password" class="form-control" id="profilePassword" name="profilePassword" placeholder="Password">
        </div>
      </div>
      <div class="col-md-6 writtenAbout">
        <div class="form-group">
          <label for="profileEmail">About</label>
          <textarea class="form-control" rows="5" id="profileAbout" name="profileAbout"><?= $user["about"]; ?></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary pull-right" name="validateForm">Valider</button>
        </div>
      </div>
    </div>
  </form>

</div>