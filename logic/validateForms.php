<?php
  if(isset($_GET['action']) && $_GET['action'] === "validateForm"){

    //Récup l'id du form pour savoir lequel a été envoyé 
    $formID = intval(trim($_GET['formID']));

    switch($formID){
      case 0:

         //On envoit les données passées par le form au controller qui l'enverra à la BDD
         //Une opération en BDD retourne un boulean 
         $action = $sampleController->form0Validated($_POST);

         //Si elle a eu lieu, c'est un succès:
         //(Pour l'exemple, l'opération ne retourne pas un boolean donc la condition ne fonctionnerait pas)
         if(!empty($action) /*&& $action === true */){
          //Opération réussie
          //On met un "cookie" dans la session de l'utilisateur
          $_SESSION["feedback"] = "Le form a été envoyé avec les données : email = ".$action[0]." et mdp = ".$action[1];

         }else{
          //Opération a planté
          $_SESSION["feedback"] = "Le traitement du form a échoué";
         }

      break;

      default: 
        $_SESSION["feedback"] = "The form is not valid";
      break;

    }

  }