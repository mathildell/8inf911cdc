    <a href="<?= $root; ?>/admin/genres/create" class="btn btn-primary">Ajouter un genre</a><br><br>
    <?php
        $allgenres = $Books->getGenres();
        if(!empty($allgenres)){
    ?>
    <div class="table-responsive">
      <table id="example" class="table user-table data-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
    <?php
          foreach ($allgenres as $key => $genre) {
    ?>
            <tr>
                <td style="width:100px;"><?= $genre["id"]; ?></td>
                <td><a href="<?= $root; ?>/discover/<?= $genre["id"]; ?>"><?= $genre["name"]; ?></a></td>
                <td class="actions" style="width: 100px;">
                  <div><a href="<?= $root; ?>/admin/genres/<?= $genre["id"]; ?>/edit" class="btn-edit"><span class="ion-edit"></span></a></div>
                </td>
            </tr>
    <?php
          }
    ?>
        </tbody>
      </table>
    </div>
    <?php
      }else{
    ?>
      <h3>Aucun genre !</h3>
    <?php
      }   
    ?>