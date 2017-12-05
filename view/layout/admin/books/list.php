    <a href="<?= $root; ?>/admin/books/create" class="btn btn-primary">Ajouter un livre</a><br><br>
    <?php
        $allbooks = $Books->getAll();
        if(!empty($allbooks)){
    ?>
    <div class="table-responsive">
      <table id="example" class="table user-table data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Genres</th>
                <th>Salon</th>
                <th>À la une</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    <?php
          foreach ($allbooks as $key => $book) {
            $genres = $Books->getGenresBunks($book["genres_id"]);
    ?>
            <tr id="<?= $book["google_id"]; ?>">
                <td style="width:50px;"><?= $book["id"]; ?></td>
                <td><b><?= $book["title"]; ?></b></td>
                <td><?= $book["author"]; ?></td>
                <td>
                  <?php foreach ($genres as $key => $value) {
                    $htmlGr = '';
                    if(!empty($value)){
                      if($key !== 0){
                        $htmlGr .= ', ';
                      }
                      $htmlGr .= '<a href="'.$root.'/discover/'.$value["id"].'">'.$value["name"].'</a>';
                    }
                    echo $htmlGr;
                  } ?>
                </td>
                <td style="width: 150px;"><?= $book["salons_id"]; ?></td>
                <td style="width:100px;"><?= (intval($book["ALaUne"]) === 1) ? "Yes" : "No"; ?></td>
                <td class="actions">
                  <div><a href="<?= $root; ?>/admin/books/<?= $book["id"]; ?>/edit" class="btn-edit"><span class="ion-edit"></span></a></div>
                  <form action="<?= $root; ?>?p=books&admin=true&action=validateForm&formID=94" method="POST"><input type="hidden" name="id" value="<?= $book["id"]; ?>"><button type="submit" class="btn-delete" name="validateForm"><span class="ion-trash-a"></span></button></form>
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
      <h3>Aucun livre !</h3>
    <?php
      }   
    ?>