<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Page title

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
?>
  

   <div id="discover">
      <section id="emphasisWork">
        <h1>À la Une</h1>
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
              <h5>Other genres</h5>
              <ul>
                <li><a href="#">Genre #1</a></li>
                <li><a href="#">Genre #2</a></li>
                <li><a href="#">Genre #3</a></li>
                <li><a href="#">Genre #4</a></li>
              </ul>
            </div>
            <div class="sideCat">
              <h5>Trier les résultats</h5>
              <div class="form-group">
                <select class="selectpicker">
                  <option value="0">Nouveautées</option>
                  <option value="1">Popularité</option>
                  <option value="2">Auteurs: A-Z</option>
                  <option value="3">Titres: A-Z</option>
                </select>
              </div>
            </div>
          </aside>
        </div>
      </section>

      <section id="allWorks">
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
