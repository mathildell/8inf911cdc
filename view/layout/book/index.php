<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Page title

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
?>
  
   <div id="book">
      <section id="emphasisWork">
        <div class="row">
          <div class="col-md-8">
            <div class="work" id="emphased">
              <div class="row">
                <div class="col-md-3">
                  <a href="#">
                    <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
                  </a>
                </div>
                <div class="col-md-9 description">
                  <h2>Simon vs. the Homo Sapiens Agenda</h2>
                  <h3>by Becky Albertalli &nbsp;&nbsp;|&nbsp;&nbsp; 2013</h3>
                  <p>Sixteen-year-old and not-so-openly gay Simon Spier prefers to save his drama for the school musical. But when an email falls into the wrong hands, his secret is at risk of being thrust into the spotlight. Now Simon is actually being blackmailed: if he doesn’t play wingman for class clown Martin, his sexual identity will become everyone’s business. Worse, the privacy of Blue, the pen name of the boy he’s been emailing, will be compromised.</p>
                  <p>With some messy dynamics emerging in his once tight-knit group of friends, and his email correspondence with Blue growing more flirtatious every day, Simon’s junior year has suddenly gotten all kinds of complicated. Now, change-averse Simon has to find a way to step out of his comfort zone before he’s pushed out—without alienating his friends, compromising himself, or fumbling a shot at happiness with the most confusing, adorable guy he’s never met.</p>
                  <div class="row metaData">
                    <div class="col-md-8">
                      <ul class="tags">
                        <li><a href="#">#category 1</a></li>
                        <li><a href="#">#category 2</a></li>
                        <li><a href="#">#category 3</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <aside class="col-md-3 col-md-offset-1">
            <div class="sideCat">
              <h5>Similar books</h5>

              <div class="work">
                <a class="row">
                  <div class="col-md-3">
                    <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
                  </div>
                  <div class="col-md-9 description">
                    <h2>Simon vs. the Homo Sapiens Agenda</h2>
                    <h3>by Becky Albertalli</h3>
                  </div>
                </a>
              </div>
              <div class="work">
                <a class="row">
                  <div class="col-md-3">
                    <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
                  </div>
                  <div class="col-md-9 description">
                    <h2>Simon vs. the Homo Sapiens Agenda</h2>
                    <h3>by Becky Albertalli</h3>
                  </div>
                </a>
              </div>
              <div class="work">
                <a class="row">
                  <div class="col-md-3">
                    <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
                  </div>
                  <div class="col-md-9 description">
                    <h2>Simon vs. the Homo Sapiens Agenda</h2>
                    <h3>by Becky Albertalli</h3>
                  </div>
                </a>
              </div>

            </div>
          </aside>
        </div>
      </section>

      <section class="banner inner">
      <h4>Sujet du prochain salon</h4>
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <p>Aliquam et nisl vel ligula consectetuer suscipit. Morbi euismod enim eget neque. Donec sagittis massa.</p>
          </div>
          <div class="col-md-4 date-and-time">
              <h6>Le <span>20/12/2017</span><br> À <span>8:00PM</span></h6>
          </div>
          <div class="col-md-4">
            <p>Vestibulum quis augue sit amet ipsum laoreet pretium. Nulla facilisi.</p><br>
            <a href="<?= $root; ?>/login" class="btn-primary btn">Nous rejoindre</a>
          </div>
        </div>
      </div>
     </section>

      <section id="comments">
        <h4>Comments</h4>
        <h5>38 reviews</h5>

        <div class="row">
          <aside class="col-md-3 col-md-offset-1 pull-right">
            <div class="sideCat">
              <h5>Trier les revues</h5>
              <div class="form-group">
                <select class="selectpicker">
                  <option value="0">Récents</option>
                  <option value="1">Auteurs: A-Z</option>
                  <option value="2">Titres: A-Z</option>
                </select>
              </div>
            </div>
            <div class="sideCat">
              <h5>Chercher parmis les revues</h5>
              <div class="form-group">
                <input type="text" class="form-control" name="#" placeholder="#">
              </div>
            </div>
          </aside>
          <div class="col-md-8">
            <div class="userReview">
              <h6>Title of the review</h6>
              <div class="user">
                <a href="<?= $root; ?>/profile">
                  <img src="https://randomuser.me/api/portraits/women/49.jpg">
                  TerriChapman08
                </a>
                <datetime>
                  Published on 20/10/2017
                </datetime>
              </div>
              <p>Donec placerat. Nullam nibh dolor, blandit sed, fermentum id, imperdiet sit amet, neque. Nam mollis ultrices justo. Sed tempor. Sed vitae tellus. Etiam sem arcu, eleifend sit amet, gravida eget, porta at, wisi. Nam non lacus vitae ipsum viverra pretium. Phasellus massa. Fusce magna sem, gravida in, feugiat ac, molestie eget, wisi. Fusce consectetuer luctus ipsum. Vestibulum nunc.</p>
              <p>Suspendisse dignissim adipiscing libero. Integer leo. Sed pharetra ligula a dui. Quisque ipsum nibh, ullamcorper eget, pulvinar sed, posuere vitae, nulla. Sed varius nibh ut lacus. Curabitur fringilla. Nunc est ipsum, pretium quis, dapibus sed, varius non, lectus. Proin a quam. Praesent lacinia, eros quis aliquam porttitor, urna lacus volutpat urna, ut fermentum neque mi egestas dolor.</p>
            </div>
        
            <div class="userReview">
              <h6>Title of the review</h6>
              <div class="user">
                <a href="<?= $root; ?>/profile">
                  <img src="https://randomuser.me/api/portraits/women/49.jpg">
                  TerriChapman08
                </a>
                <datetime>
                  Published on 20/10/2017
                </datetime>
              </div>
              <p>Donec placerat. Nullam nibh dolor, blandit sed, fermentum id, imperdiet sit amet, neque. Nam mollis ultrices justo. Sed tempor. Sed vitae tellus. Etiam sem arcu, eleifend sit amet, gravida eget, porta at, wisi. Nam non lacus vitae ipsum viverra pretium. Phasellus massa. Fusce magna sem, gravida in, feugiat ac, molestie eget, wisi. Fusce consectetuer luctus ipsum. Vestibulum nunc.</p>
            </div>
          </div>

        </div>

      </section>
        
   </div>


<?php endblock(); ?>

<?php startblock('customScripts'); ?>


<?php endblock(); ?>
