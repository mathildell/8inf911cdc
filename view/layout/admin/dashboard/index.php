<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>Administration<?php endblock(); ?>

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



    <div class="mainTitle"><br>
      <h1>
        Bonjour, <span><?= $me["username"]; ?></span>
      </h1>
      <h2>
        Éditer les textes du site
      </h2>
    </div>
    <section id="websiteEdit">
      <div class="row">
        <div class="col-sm-12">
          <h3>Textes du header</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h4>
            Slide #1:
          </h4>
          <div class="form-group">
            <label for="slide1title">
              Titre
            </label>
            <input type="text" class="form-control" id="slide1title" name="slide1title" value="Online café!">
          </div>
          <div class="form-group">
            <label for="slide1content">
              Contenu
            </label>
            <textarea class="form-control" id="slide1content" name="slide1content" rows="6">Nulla facilisi. In vel sem. Morbi id urna in diam dignissim feugiat. Proin molestie tortor eu velit. Aliquam erat volutpat. Nullam ultrices, diam tempus vulputate egestas, eros pede varius leo, sed imperdiet lectus est ornare odio.</textarea>
          </div>
        </div>
        <div class="col-md-4">
          <h4>
            Slide #2:
          </h4>
          <div class="form-group">
            <label for="slide2title">
              Titre
            </label>
            <input type="text" class="form-control" id="slide2title" name="slide2title" value="Read">
          </div>
          <div class="form-group">
            <label for="slide2content">
              Contenu
            </label>
            <textarea class="form-control" id="slide2content" name="slide2content" rows="6">Aenean tortor mi, imperdiet id, gravida eu, posuere eu, felis. Mauris sollicitudin, turpis in hendrerit sodales, lectus ipsum pellentesque ligula, sit amet scelerisque urna nibh ut arcu. Aliquam in lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla placerat aliquam wisi. Mauris viverra odio. Quisque fermentum pulvinar odio. Proin posuere est vitae ligula. Etiam euismod. Cras a eros.</textarea>
          </div>
        </div>
        <div class="col-md-4">
          <h4>
            Slide #3:
          </h4>
          <div class="form-group">
            <label for="slide3title">
              Titre
            </label>
            <input type="text" class="form-control" id="slide3title" name="slide3title" value="Share">
          </div>
          <div class="form-group">
            <label for="slide3content">
              Contenu
            </label>
            <textarea class="form-control" id="slide3content" name="slide3content" rows="6">Aenean tortor mi, imperdiet id, gravida eu, posuere eu, felis. Mauris sollicitudin, turpis in hendrerit sodales, lectus ipsum pellentesque ligula, sit amet scelerisque urna nibh ut arcu. Aliquam in lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla placerat aliquam wisi. Mauris viverra odio. Quisque fermentum pulvinar odio. Proin posuere est vitae ligula. Etiam euismod. Cras a eros.</textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <br><br><br>
          <h3>À notre propos</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-9">
          <textarea class="form-control" id="aboutusContent" name="aboutusContent" rows="10"></textarea>
        </div>
      </div>
    </section>

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
