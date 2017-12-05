  <?php
    $currsalons = $Salons->get(intval($_GET["id"]))[0];
    $attachedBook = $Books->get(intval($currsalons["books_id"]))[0];
    $brokenTime = explode(" ", $currsalons["date"]);
    $brokenTime2 = explode(":", $brokenTime[1]);
  ?>
  <div class="row">
    <div class="col-md-8">
      <form action="<?= $root; ?>?p=salons&admin=true&action=validateForm&formID=101" method="POST">
        <input type="hidden" name="salonId" value="<?= intval($currsalons["id"]); ?>">
        <div class="form-group ui-widget">
          <label for="salonsBook">Oeuvre</label>
          <input type="hidden" name="salonsBookId" id="salonsBookId">
          <input type="text" class="form-control" id="salonsBook" name="salonsBook" value="<?= $attachedBook["title"]; ?>">
        </div>

        <div class="form-group">
          <label for="salonsDate">Date</label>
          <input type="date" class="form-control" id="salonsDate" name="salonsDate" value="<?= $brokenTime[0]; ?>">
        </div>

        <div class="form-group">
          <label for="salonsTime">Time</label>
          <input type="time" class="form-control" id="salonsTime" name="salonsTime" value="<?= $brokenTime2[0].':'.$brokenTime2[1]; ?>">
        </div>

        <div class="form-group">
          <button class="btn btn-primary pull-right" type="submit" name="validateForm">Modifier le salon</button>
        </div>
      </form>
    </div>
  </div>