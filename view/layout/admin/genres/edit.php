  <?php
    $genre = $Books->getGenreByID($_GET["id"])[0];
  ?>
  <h1>Modifier le genre</h1>
  <form class="form" action="<?= $root; ?>?p=genres&admin=true&action=validateForm&formID=96" method="POST"><br>
    <input type="hidden" name="id" value="<?= $genre["id"]; ?>">
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="genreName">Nom</label>
          <input type="text" class="form-control" id="genreName" name="genreName" value="<?= $genre["name"]; ?>">
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label style="display: block;">&nbsp;</label>
          <button class="btn btn-primary pull-right" type="submit" name="validateForm">Modifier le genre</button>
        </div>
      </div>
    </div>
    
  </form>