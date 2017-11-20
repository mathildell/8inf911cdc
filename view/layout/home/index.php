<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Page title

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
  include 'view/layout/inc/header.inc.php';
?>
  

   <div id="home">
      <section id="aboutUs">
        <h1>Abous us</h1>
        <div class="row">
          <div class=" col-md-5">
            <p>Sed enim risus, congue non, tristique in, commodo eu, metus. Aenean tortor mi, imperdiet id, gravida eu, posuere eu, felis. Mauris sollicitudin, turpis in hendrerit sodales, lectus ipsum pellentesque ligula, sit amet scelerisque urna nibh ut arcu. Aliquam in lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla placerat aliquam wisi. Mauris viverra odio. </p>
          </div>
          <div class="col-md-offset-1 col-md-3">
            <div class="img-about">
              <img src="<?= $root; ?>/view/assets/img/book-club-pres.jpg" alt="#">
            </div>
          </div>
          <div class="col-md-3">
            <p>Nulla facilisi. In vel sem. Morbi id urna in diam dignissim feugiat. Proin molestie tortor eu velit. Aliquam erat volutpat. Nullam ultrices, diam tempus vulputate egestas, eros pede varius leo, sed imperdiet lectus est ornare odio. </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <p>Nulla facilisi. In vel sem. Morbi id urna in diam dignissim feugiat. Proin molestie tortor eu velit. Aliquam erat volutpat. Nullam ultrices, diam tempus vulputate egestas, eros pede varius leo, sed imperdiet lectus est ornare odio. </p>
          </div>
          <div class="col-md-offset-1 col-md-5">
            <p>Sed enim risus, congue non, tristique in, commodo eu, metus. Aenean tortor mi, imperdiet id, gravida eu, posuere eu, felis. Mauris sollicitudin, turpis in hendrerit sodales, lectus ipsum pellentesque ligula, sit amet scelerisque urna nibh ut arcu. Aliquam in lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla placerat aliquam wisi. Mauris viverra odio. </p>
          </div>
        </div>


      </section>
      <section class="banner inner">
        <h4>Prochain Salon</h4>
        <div class="content">
          <div class="row">
            <div class="work col-md-6">
              <a class="row">
                <div class="col-md-3">
                  <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
                </div>
                <div class="col-md-9 description">
                  <h2>Simon vs. the Homo Sapiens Agenda</h2>
                  <h3>by Becky Albertalli</h3>
                  <p>Sixteen-year-old and not-so-openly gay Simon Spier prefers to save his drama for the school musical. But when an email falls into the wrong hands, his secret is at risk of being thrust into the spotlight. Now Simon is actually being blackmailed: if he doesn’t play wingman for class clown Martin, his sexual identity will become everyone’s business. </p>
                </div>
              </a>
            </div>
            <div class="col-md-5 col-md-offset-1 date-and-time">
              <h5>Date &amp; time</h5>
              <h6>Le <span>20/12/2017</span><br> À <span>8:00PM</span></h6>
            </div>
          </div>
        </div>
      </section>
      <section id="joinUs">
        <form action="?p=login&action=validateForm&formID=0" method="POST">
          <div class="row">
            <div class="col-sm-12">
                <h3>Join the party</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <p>Like many others blah blah blah</p>
                <p>Donec placerat. Nullam nibh dolor, blandit sed, fermentum id, imperdiet sit amet, neque. Nam mollis ultrices justo. Sed tempor. Sed vitae tellus. Etiam sem arcu, eleifend sit amet, gravida eget, porta at, wisi. Nam non lacus vitae ipsum viverra pretium. Phasellus massa. Fusce magna sem, gravida in, feugiat ac, molestie eget, wisi.</p>
              </div>
            </div>
           <div class="col-md-8 col-md-offset-1">
              <form id="joinUs" action="?p=login&action=validateForm&formID=1" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Username</label>
                  <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
              </div>
            </form>
          </div>
          </div>
        </form>
      </section>
   </div>


<?php endblock(); ?>

<?php startblock('customScripts'); ?>
  <script src="<?= $root; ?>/view/assets/js/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>

  <script>
  $(function(){
    $('.owl-carousel').owlCarousel({
      items: 1,
      responsiveClass: true
    });
  });

  </script>


<?php endblock(); ?>
