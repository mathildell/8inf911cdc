<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Page title

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
?>
  

   <div id="admin">
    <ul class="breadcrumbs">
      <li><b>Navigation: </b></li>
      <li><a class="active">Dashboard</a></li>
      <li><a href="<?= $root; ?>/admin/books">Books</a></li>
      <li><a href="<?= $root; ?>/admin/genres">Genres</a></li>
      <li><a href="<?= $root; ?>/admin/users">Users</a></li>
      <li><a href="<?= $root; ?>/admin/salons">Salons</a></li>
    </ul>
  </div>


<?php endblock(); ?>

<?php startblock('customScripts'); ?>
<script src="<?= $root; ?>/view/assets/js/vendor/datatable/datatable.min.js"></script>
<script>
$(function(){
    $('#example').DataTable();
} );
</script>
<?php endblock(); ?>
