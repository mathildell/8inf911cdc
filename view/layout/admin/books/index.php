<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>Livres - Administration<?php endblock(); ?>

<?php 
  startblock('pageContent'); 


?>
  <div id="admin">
    <ul class="breadcrumbs">
      <li><b>Navigation: </b></li>
      <li><a href="<?= $root; ?>/admin">Dashboard</a></li>
      <li><a class="active">Books</a></li>
      <li><a href="<?= $root; ?>/admin/genres">Genres</a></li>
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
<script src="<?= $root; ?>/view/assets/js/vendor/jqueryui/jquery-ui.min.js"></script>
<!--<script src="<?= $root; ?>/view/assets/js/vendor/"></script>-->
<script>
$(function(){
  $('#results > h2').click(function(){
    $('.lookFor.closed').removeClass('closed');
  });

  $('#example').DataTable({
    "order": [[ 0, 'desc' ]]
  });
  $('#tags').delegate('.deleteGenre', 'click', function(){
    var id = $(this).data('id'),name = $(this).data('name');
    $(this).parent().remove();

    $('#genresIds').val($('#genresIds').val().replace(id,'').replace(',,',','));
    $('#genresNames').val($('#genresNames').val().replace(name,'').replace(',,',','));

  });
  /*
  $("#example tbody tr").each(function(index, value){
    var bookid = $(value).attr('id');

    $.ajax({
      url: 'https://www.googleapis.com/books/v1/volumes/'+bookid+'?key=AIzaSyA7xLy_fqc3hG57fYLqd6G7rVKQaU0lF4I',
      success: function(data){
        $('tr#'+bookid+' .title').text(data.volumeInfo.title);
        $('tr#'+bookid+' .author').text(data.volumeInfo.authors[0]);
        //$('tr#'+bookid+' .genre').text(data.volumeInfo.authors[0]);
      }
    });
    //https://books.google.com/ebooks?id=buc0AAAAMAAJ

  });*/
  <?php if(isset($_GET["id"])){?>

  // $.ajax({
  //   url: 'https://www.googleapis.com/books/v1/volumes/<?= $book["google_id"] ?>?key=AIzaSyA7xLy_fqc3hG57fYLqd6G7rVKQaU0lF4I',
  //   success: function(data){
  //     console.log(data);
  //     $('#desc_content').html(data.volumeInfo.description);
  //     $('#bookImage').attr({'src': data.volumeInfo.imageLinks.thumbnail });
  //     $('#bookTitle').text(data.volumeInfo.title);
  //     $('#author').text(data.volumeInfo.authors[0]);
  //     $('#publisher').text(data.volumeInfo.publisher);
  //     $('#publish_date').text(data.volumeInfo.publishedDate);
  //     //tags
  //   }
  // });

  <?php } ?>

  $('#allWorks').delegate('.selectWork', 'click', function(){
    $('.lookFor').addClass('closed');

    $('#desc_content, #bookDescription').html($(this).data('desc'));

    $('#bookImagee').val($(this).data('image'));
    $('#bookImage').attr({'src': $(this).data('image') });

    $('#bookTitlee').val($(this).data('title'));
    $('#bookTitle').text($(this).data('title'));

    $('#author').text($(this).data('author'));
    $('#bookAuthor').val($(this).data('author'));

    $('#bookPublishedDate').val($(this).data('publishdate'));
    $('#publish_date').text($(this).data('publishdate').split('-')[0]);

    $('#bookPublisher').val($(this).data('publisher'));
    $('#publisher').text($(this).data('publisher'));

    $('#googleId').val($(this).data('googleid'));

    $('#tags').html("");
 
//genres
    var tags = $(this).data('tags').split(",");
    $.each(tags, function(i, tag){
      $('#tags').append('<li><a href="#">'+tag+'</a> <a href="#" class="deleteGenre" data-id="'+tag+'" data-name="'+tag+'"> <span class="ion-trash-a"></span></a></li>');
      if(i !== 0){
        $('#genresNames').val($('#genresNames').val()+","+tag);

      }else{
        $('#genresNames').val(tag);
      }
    });

    //

  });

  var autocompleter = [];
  $.getJSON('<?= $root; ?>/logic/exportGenres.php', function(data) {
    $.each(data, function(i, obj){
      autocompleter.push({ "id": obj.id, "label" : obj.name });
    });
    $('#addGenre').autocomplete({
        delay: 0,
        source: autocompleter,
        select: function (event, ui) {
          if($('#genresIds').val().length > 0){
            $('#genresIds').val($('#genresIds').val()+","+ui.item.id);
          }else{
            $('#genresIds').val(ui.item.id);
          }
          $("#addGenre").val("");
          $('#tags').append('<li><a href="admin/genres">'+ui.item.label+'</a> <a data-id="'+ui.item.id+'" data-name="'+ui.item.label+'" href="#" class="deleteGenre"> <span class="ion-trash-a"></span></a></li>');
        }
      });
  });
  /*
  var autocompleter = [];
  $.each(data.items, function(i, dug){
    console.log(i, dug.volumeInfo.title);

    
  });
  */



  $('#bookSearch').change(function(){
    var val = $.trim($('#bookSearch').val());
    if(val.length <= 3){
      $('#allWorks').html("");
      $('#tags').html("");
      $('#results').hide(0);
    }
    if(val.length > 3){
      $('#results').show(0);
      string = val.replace(/ /g, '+').toLowerCase();
      //$('#allWorks').html("");&key=AIzaSyA7xLy_fqc3hG57fYLqd6G7rVKQaU0lF4I
      $.ajax({
        url: 'https://www.googleapis.com/books/v1/volumes?max-results=12&q='+string,
        success: function(data){
          //var json = JSON.parse(data);
          $('#admin h2 span').text(data.totalItems);
         
          var book, id;
          $.each(data.items, function(index, value){
            if(index < 13){
              if(index % 4 === 0){
                $('#allWorks').append('<div class="row"></div>');
              }
              book = value.volumeInfo, id = value.id, tags;
              $.each(book.categories, function(i, tag){
                if(i === 0){
                  tags = tag;
                }else{
                  tags += " "+tag;
                }
              });
              $('#allWorks > .row').last().append('<div class="work col-md-3"><a data-desc="'+book.description+'" data-tags="'+tags+'" data-image="'+book.imageLinks["thumbnail"]+'" data-googleid="'+id+'" data-author="'+book.authors[0]+'" data-title="'+book.title+'" data-publisher="'+book.publisher+'" data-publishdate="'+book.publishedDate+'" class="row selectWork"><div class="col-md-4"> <img src="'+book.imageLinks["thumbnail"]+'" alt="logo" /></div><div class="col-md-8 description"><h2><small>'+book.title+'</small></h2><h3>by '+book.authors[0]+'<br><small>'+book.publishedDate+', '+book.publisher+'</small></h3></div></a></div>');
            }
            
          });
         
          
          /**/

        }
      });
    }
  });

});
</script>
<?php endblock(); ?>
