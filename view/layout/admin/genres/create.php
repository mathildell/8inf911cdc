  <!--  -->
  <h1>Créer un nouveau genre</h1>
  <form class="form" action="<?= $root; ?>?p=genres&admin=true&action=validateForm&formID=92" method="POST"><br>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="genreName">Nom</label>
          <input type="text" class="form-control" id="genreName" name="genreName" placeholder="Nom du genre">
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label style="display: block;">&nbsp;</label>
          <button class="btn btn-primary pull-right" type="submit" name="validateForm">Ajouter le genre</button>
        </div>
      </div>
    </div>
    
  </form>
  <!--  -->