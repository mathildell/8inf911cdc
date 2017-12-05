  <?php
    $currsalons = $Salons->get(intval($_GET["id"]))[0];
    $attachedBook = $Books->get(intval($currsalons["books_id"]))[0];
    $brokenTime = explode(" ", $currsalons["date"]);
    $brokenTime2 = explode(":", $brokenTime[1]);
    
    $isPast = (time() > strtotime($currsalons["date"])) ? true : false;
  ?>
  <div class="row">
    <div class="col-md-8">
      <form action="<?= $root; ?>?p=salons&admin=true&action=validateForm&formID=101" method="POST">
        <input type="hidden" name="salonId" value="<?= intval($currsalons["id"]); ?>">
        <div class="form-group ui-widget">
          <label for="salonsBook">Oeuvre</label>
          <input type="hidden" name="salonsBookId" id="salonsBookId">
          <input type="text" class="form-control" id="salonsBook" name="salonsBook" value="<?= $attachedBook["title"]; ?>" <?= ($isPast) ? 'readonly' : ''; ?>>
        </div>

        <div class="form-group">
          <label for="salonsDate">Date</label>
          <input type="date" class="form-control<?= (!$isPast) ? ' datepicker' : ''; ?>" id="salonsDate" name="salonsDate" value="<?= $brokenTime[0]; ?>" <?= ($isPast) ? 'readonly' : ''; ?>>
        </div>

        <div class="form-group">
          <label for="salonsTime">Time</label>
          <input type="time" class="form-control" id="salonsTime" name="salonsTime" value="<?= $brokenTime2[0].':'.$brokenTime2[1]; ?>" <?= ($isPast) ? 'readonly' : ''; ?>>
        </div>
        <?php if(!$isPast){ ?>
        <div class="form-group">
          <label for="salonsOpen">Salon ouvert:</label>
          <select class="form-control" id="salonsOpen" name="salonsOpen">
            <option value="0"<?= ($currsalons["open"] == 0) ? ' selected' : ''?>>Fermé</option>
            <option value="1"<?= ($currsalons["open"] == 1) ? ' selected' : ''?>>Ouvert</option>
          </select>
        </div>
        
        <div class="form-group">
          <button class="btn btn-primary pull-right" type="submit" name="validateForm">Modifier le salon</button>
        </div>
        <?php } ?>
      </form>
    </div>
  </div>