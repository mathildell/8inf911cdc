<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Sample webpage

<?php endblock(); ?>

<?php startblock('pageContent'); ?>

   <div id="sample">
      
      <h1> Page d'exemple </h1>
      <p> Créer un nouveau dossier avec le même nom que l'url de la page, puis remplir le fichier index.php en respectant les codes du template </p>
      <h2>Ceci est extrait de la database :</h2>
      <?php 
        foreach($sampleController->getStuffFromDb() as $stuffFromDb){
          echo '<p> id:'.$stuffFromDb['id'].', data: '.$stuffFromDb['stuff'].'</p>';
        }
      ?>

      <h3>Exemple de formulaire avec Bootstrap</h3>
      <?php
        if(isset($_SESSION["feedback"])){
          echo '<div class="alert alert-info">' . $_SESSION["feedback"] . '</div>';
          unset($_SESSION["feedback"]);
        }
      ?>
      
      <form action="?p=sample&action=validateForm&formID=0" method="POST">
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>

<?php endblock(); ?>