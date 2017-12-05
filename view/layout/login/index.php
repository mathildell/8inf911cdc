<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>Accès utilisateurs<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
?>
  

   <div id="login">
    <div class="row">
        <div class="col-md-6">
          <form id="loginAccount" action="<?= $root; ?>?p=login&action=validateForm&formID=1" method="POST">
          <h1>Login</h1>
          <div class="form-group">
            <label for="loginUsername">Username</label>
            <input type="text" class="form-control" id="loginUsername" name="loginUsername" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password">
          </div>
          <div class="row">
            <div class="col-md-6">
              <a class="form-text text-muted" href="#"><i>Forgot your password?</i></a>
            </div>
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary pull-right" name="validateForm">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <form id="joinUs" action="<?= $root; ?>?p=login&action=validateForm&formID=0" method="POST">
          <h2>Sign-up</h2>
          <p>
            Cras dictum. Maecenas ut turpis. In vitae erat ac orci dignissim eleifend. Nunc quis justo. Sed vel ipsum in purus tincidunt pharetra. Sed pulvinar.
          </p>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="registerEmail">Email address</label>
                <input type="email" class="form-control" id="registerEmail" name="registerEmail" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="col-md-6">
                  <label for="registerUsername">Username</label>
                  <input type="text" class="form-control" placeholder="Username" id="registerUsername" name="registerUsername">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="registerPwd1">Password</label>
                <input type="password" class="form-control" id="registerPwd1" name="registerPwd1" placeholder="Password">
              </div>
              <div class="col-md-6">
                  <label for="registerPwd2">Confirm Password</label>
                <input type="password" class="form-control" id="registerPwd2" name="registerPwd2" placeholder="Password">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary pull-right" name="validateForm">Submit</button>
        </div>
      </form>
    </div>
   </div>


<?php endblock(); ?>

<?php startblock('customScripts'); ?>


<?php endblock(); ?>
