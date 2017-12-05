  <a href="<?= $root; ?>/admin/salons/create" class="btn btn-primary">Créer un salon</a><br><br>
  <?php
    $allsalons = $Salons->getAll();
    $nextSalon = $Salons->findNextSalon()[0];
  ?>
  <div class="table-responsive">
      <table id="example" class="table user-table data-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Lien du salon</th>
            <th>Titre de l'oeuvre</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
    <?php
          foreach ($allsalons as $key => $salon) {
            $relatedBook = $Books->get($salon["books_id"])[0];
    ?>
            <tr>
              <td style="width:100px;"><?= $salon["id"]; ?></td>
              <td><a href="<?= $root; ?>/salons/<?= $salon["id"]; ?>">Salon</a></td>
              <td><a href="<?= $root; ?>/book/<?= $relatedBook["id"]; ?>"><?= $relatedBook["title"]; ?></a></td>
              <td><div style="display: none;"><?= strtotime($salon["date"]); ?></div> 

                <?php 
                if($nextSalon["id"] == $salon["id"] && $salon["open"] == 0){
                  echo '<span class="thumb">next</span>';
                }else if($nextSalon["id"] == $salon["id"] && $salon["open"] == 1){
                  echo '<span class="thumb warning">ouvert</span>';
                }else if(time() > strtotime($salon["date"])){
                  echo '<span class="thumb disabled">archive</span>';
                }
                ?>
                <?= date('M jS, o \a\t g:sa', strtotime($salon["date"])); ?></td>
              <td class="actions" style="width: 100px;">
                <div><a href="<?= $root; ?>/admin/salons/<?= $salon["id"]; ?>/edit" class="btn-edit"><span class="ion-edit"></span></a></div>
                <form action="<?= $root; ?>?p=salons&admin=true&action=validateForm&formID=99" method="POST"><input type="hidden" name="bookId" value="<?= $salon["id"]; ?>"><button type="submit" class="btn-delete" name="validateForm"><span class="ion-trash-a"></span></button></form>
              </td>
            </tr>
    <?php
          }
    ?>
      </tbody>
    </table>
  </div>