<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Salons

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
?>
  

   <div id="salons">
    <section id="emphasisWork">
      <h1>Prochain Salon</h1>
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
                  <h3>by Becky Albertalli</h3>
                  <p>Sixteen-year-old and not-so-openly gay Simon Spier prefers to save his drama for the school musical. But when an email falls into the wrong hands, his secret is at risk of being thrust into the spotlight. Now Simon is actually being blackmailed: if he doesn’t play wingman for class clown Martin, his sexual identity will become everyone’s business. Worse, the privacy of Blue, the pen name of the boy he’s been emailing, will be compromised.</p>
                  <div class="row metaData">
                    <div class="col-md-8">
                      <ul class="tags">
                        <li><a href="#">#category 1</a></li>
                        <li><a href="#">#category 2</a></li>
                        <li><a href="#">#category 3</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <a class="btn btn-primary pull-right readMore">
                        voir plus
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <aside class="col-md-3 col-md-offset-1">
            <div class="sideCat">
              <h5>Date &amp; time</h5>
              <h6>20/12/2017 <span>8:00PM</span></h6>
            </div>
            <div class="sideCat">
              <h5>Participants</h5>
              <ul>
                <li>
                  <a href="<?= $root;?>/profile" class="user">
                    <img src="https://randomuser.me/api/portraits/men/78.jpg" alt="#">
                    GenePerez
                  </a>
                </li>
                <li>
                  <a href="<?= $root;?>/profile" class="user">
                    <img src="https://randomuser.me/api/portraits/women/94.jpg" alt="#">
                    Chughes83
                  </a>
                </li>
                <li>
                  <a href="<?= $root;?>/profile" class="user">
                    <img src="https://randomuser.me/api/portraits/women/16.jpg" alt="#">
                    tefields
                  </a>
                </li>
              </ul>
              <i>Et plus..!</i>
            </div>
          </aside>
        </div>
      </section>
     <section class="banner inner">
      <h4>Pour participer</h4>
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <p>Aliquam et nisl vel ligula consectetuer suscipit. Morbi euismod enim eget neque. Donec sagittis massa.</p>
          </div>
          <div class="col-md-4">
            <p>Vestibulum quis augue sit amet ipsum laoreet pretium. Nulla facilisi. Duis tincidunt, felis et luctus placerat, ipsum libero vestibulum sem, vitae elementum wisi ipsum a metus.</p>
          </div>
          <div class="col-md-4">
            <p>Vestibulum quis augue sit amet ipsum laoreet pretium. Nulla facilisi.</p><br>
            <a href="<?= $root; ?>/login" class="btn-primary btn">Nous rejoindre</a>
          </div>
        </div>
      </div>
     </section>
      <section id="allWorks">
        <h2>Salons passés</h2>
        <div class="row">
          <div class="work col-md-3">
            <a class="row">
              <div class="col-md-4">
                <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
              </div>
              <div class="col-md-8 description">
                <h2>Simon vs. the Homo Sapiens Agenda</h2>
                <h3>by Becky Albertalli</h3>
              </div>
            </a>
          </div>

          <div class="work col-md-offset-1 col-md-3">
            <a class="row">
              <div class="col-md-4">
                <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
              </div>
              <div class="col-md-8 description">
                <h2>Simon vs. the Homo Sapiens Agenda</h2>
                <h3>by Becky Albertalli</h3>
              </div>
            </a>
          </div>

          <div class="work col-md-offset-1 col-md-3">
            <a class="row">
              <div class="col-md-4">
                <img src="<?= $root; ?>/view/assets/img/works/simon.jpg" alt="logo" />
              </div>
              <div class="col-md-8 description">
                <h2>Simon vs. the Homo Sapiens Agenda</h2>
                <h3>by Becky Albertalli</h3>
              </div>
            </a>
          </div>
        </div>
      </section>
   </div>
<?php endblock(); ?>

<?php startblock('customScripts'); ?>


<?php endblock(); ?>
