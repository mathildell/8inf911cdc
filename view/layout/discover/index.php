<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>Genres<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
    if(!isset($_GET["id"])){
      include 'main.php';
    }else{
      include 'genre.php';
    }
  endblock(); ?>

<?php 

startblock('customScripts'); 
?>
<script>
$(function(){
/*
  var emphasedBook = $('#googleidemphased').val();

  $.ajax({
    url: 'https://www.googleapis.com/books/v1/volumes/'+emphasedBook+'',
    success: function(data){
      $('#emphasedTitle').text(data.volumeInfo.title);
      $('#emphasedImg').attr({'src' : data.volumeInfo.imageLinks.thumbnail });
      $('#emphasedAuthor').text(data.volumeInfo.authors[0]);
      $('#emphasedDesc').html(data.volumeInfo.description);
    }
  });
  //?key=AIzaSyA7xLy_fqc3hG57fYLqd6G7rVKQaU0lF4I
  $('#allWorks .work').each(function(){
    var bookid = $(this).attr('id');
    $.ajax({
      url: 'https://www.googleapis.com/books/v1/volumes/'+bookid+'',
      success: function(data){
        $('#'+bookid+' .title').text(data.volumeInfo.title);
        $('#'+bookid+' .bookImg').attr({'src' : data.volumeInfo.imageLinks.thumbnail });
        $('#'+bookid+' .author').text(data.volumeInfo.authors[0]);
      }
    });
  });
*/
});
</script>
<?php
endblock(); ?>
