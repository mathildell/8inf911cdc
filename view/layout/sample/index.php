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
   </div>

<?php endblock(); ?>