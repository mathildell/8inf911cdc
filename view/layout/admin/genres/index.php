<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>Genres - Administration<?php endblock(); ?>

<?php 
  startblock('pageContent'); 


?>
  <div id="admin">
    <ul class="breadcrumbs">
      <li><b>Navigation: </b></li>
      <li><a href="<?= $root; ?>/admin">Dashboard</a></li>
      <li><a href="<?= $root; ?>/admin/books">Books</a></li>
      <li><a class="active">Genres</a></li>
      <li><a href="<?= $root; ?>/admin/users">Users</a></li>
      <li><a href="<?= $root; ?>/admin/salons">Salons</a></li>
    </ul>
  <?php

    if(
      isset($_GET["action"]) && $_GET["action"] === "create"
    ){
      include 'create.php';
    }else  if(
      isset($_GET["action"]) && $_GET["action"] === "edit"
    ){
      include 'edit.php';
    }else{
      include 'list.php';
    }

  ?>
</div>


<?php endblock(); ?>

<?php startblock('customScripts'); ?>
<script src="<?= $root; ?>/view/assets/js/vendor/datatable/datatable.min.js"></script>
<script>
$(function(){


  $('#example').DataTable({
    "order": [[ 0, 'desc' ]]
  });


});
</script>
<?php endblock(); ?>
