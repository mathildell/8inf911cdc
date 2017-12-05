<?php
  $allusers = $Users->getAll();
  if(!empty($allusers)){
?>
  <div class="table-responsive">
    <table id="example" class="table user-table data-table">
      <thead>
          <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>Registered</th>
              <th>isAdmin</th>
              <th>Actions</th>
          </tr>
      </thead>
      <tbody>

    <?php
    foreach ($allusers as $key => $user) {
    ?>
      <tr>
          <td width="100px"><?= $user["id"]; ?></td>
          <td><?= $user["username"]; ?></td>
          <td><?= $user["email"]; ?></td>
          <td><?= $user["registered"]; ?></td>
          <td><?= (intval($user["isAdmin"]) === 1) ? "Oui" : "Non"; ?></td>
          <td class="actions">
            <!-- <div><a href="<?= $root; ?>/admin/users/<?= $user["id"]; ?>/edit" class="btn-edit"><span class="ion-edit"></span></a></div> -->
            <form action="<?= $root; ?>?p=books&admin=true&action=validateForm&formID=97" method="POST"><input type="hidden" name="id" value="<?= $user["id"]; ?>"><button type="submit" class="btn-delete" name="validateForm"><span class="ion-trash-a"></span></button></form>
          </td>
      </tr>
    <?php
    }
    ?>
      </tbody>
    </table>
  </div>
<?php
}
?>