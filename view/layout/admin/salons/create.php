  <?php
    //$allsalons = $Salons->getAll();
  ?>
  <div class="row">
    <div class="col-md-8">
      <form action="<?= $root; ?>?p=salons&admin=true&action=validateForm&formID=100" method="POST">

        <div class="form-group ui-widget">
          <label for="salonsBook">Oeuvre</label>
          <input type="hidden" name="salonsBookId" id="salonsBookId">
          <input type="text" class="form-control" id="salonsBook" name="salonsBook">
        </div>

        <div class="form-group">
          <label for="salonsDate">Date</label>
          <input type="date" class="form-control" id="salonsDate" name="salonsDate" value="<?= date('Y-m-d'); ?>">
        </div>
        <div class="form-group">
          <label for="salonsTime">Time</label>
          <input type="time" class="form-control" id="salonsTime" name="salonsTime" value="22:00">
        </div>

        <div class="form-group">
          <button class="btn btn-primary pull-right" type="submit" name="validateForm">Créer un salon</button>
        </div>
      </form>
    </div>
  </div>