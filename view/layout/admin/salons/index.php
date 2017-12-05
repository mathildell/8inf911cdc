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
      <li><a href="<?= $root; ?>/admin">Dashboard</a></li>
      <li><a href="<?= $root; ?>/admin/books">Books</a></li>
      <li><a href="<?= $root; ?>/admin/genres">Genres</a></li>
      <li><a href="<?= $root; ?>/admin/users">Users</a></li>
      <li><a class="active">Salons</a></li>
    </ul>
  <?php
    if(
      isset($_GET["action"]) && $_GET["action"] === "edit"
    ){
      include 'edit.php';
    }else if(
      isset($_GET["action"]) && $_GET["action"] === "create"
    ){
      include 'create.php';
    }else{
      include 'list.php';
    }
  ?>
</div>


<?php endblock(); ?>

<?php startblock('customScripts'); ?>
<script src="<?= $root; ?>/view/assets/js/vendor/datatable/datatable.min.js"></script>
<script src="<?= $root; ?>/view/assets/js/vendor/jqueryui/jquery-ui.min.js"></script>
<script>
$(function(){


  // $( '.datepicker').datepicker({
  //   'dateFormat': 'yyyy-mm-dd',
  //   'showAnim': 'fadeIn'
  // });

  $('#example').DataTable({
    "order": [[ 3, 'desc' ]]
  });

  var autocompleter = [];
  $.getJSON('<?= $root; ?>/logic/exportBooks.php', function(data) {
    $.each(data, function(i, obj){
      autocompleter.push({ "id": obj.id, "label" : obj.title });
    });
    console.log(autocompleter);
    $('#salonsBook').autocomplete({
        delay: 0,
        source: autocompleter,
        select: function (event, ui) {
          $('#salonsBookId').val(ui.item.id);
        }
      });
  });

});
</script>
<?php endblock(); ?>
