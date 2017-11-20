<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Page title

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
?>
 <div id="profile">
    <section id="aboutUser">
      <div class="row">
        <div class="col-md-2">
          <img src="https://randomuser.me/api/portraits/women/49.jpg" alt="#">
        </div>
        <div class="col-md-4 profileSummary">
          <h1>Terri Chapman</h1>
          <p>Member since <span>23/10/2017</span></p>
          <p><span class="icon-mail"></span> <code>terri.chapman79@example.com</code></p>
        </div>
        <div class="col-md-6 writtenAbout">
          <h2>About me</h2>
          <p>Pellentesque vel dui sed orci faucibus iaculis. Suspendisse dictum magna id purus tincidunt rutrum. Nulla congue. Vivamus sit amet lorem posuere dui vulputate ornare. Phasellus mattis sollicitudin ligula. Duis dignissim felis et urna. Integer adipiscing congue metus. Nam pede. Etiam non wisi. Sed accumsan dolor ac augue. Pellentesque eget lectus. Aliquam nec dolor nec tellus ornare venenatis. Nullam blandit placerat sem. Curabitur quis ipsum. Mauris nisl tellus, aliquet eu, suscipit eu, ullamcorper quis, magna. Mauris elementum, pede at sodales vestibulum, nulla tortor congue massa, quis pellentesque odio dui id est. Cras faucibus augue.</p>
        </div>
      </div>
    </section>
    <section id="salonsUser">
      <div class="row">
        <div class="col-sm-12 salonsHead">
          <h3>Ses salons</h3>
        </div>
      </div>

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
