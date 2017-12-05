<?php
  if(
    isset($_GET['action']) 
    && $_GET['action'] === "validateForm" 
    && isset($_POST) 
    && isset($_POST["validateForm"])){

    //Récup l'id du form pour savoir lequel a été envoyé 
    $formID = intval(trim($_GET['formID']));

    switch($formID){
      //register form
      case 0:
         $action = $Users->registerForm($_POST);

         if(!empty($action) && $action == true){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::REGISTER_SUCCESS];
         }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
         }

      break;

      //login form
      case 1:
         $action = $Users->login($_POST);
         if(!empty($action)){
          $_SESSION["logged"] = true;
          $_SESSION["id"] = intval($action[0]["id"]);
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::LOGIN_SUCCESS];
         }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
         }
      break;


      //update profile
      case 2:
         $action = $Users->updateProfile($_POST, $_FILES["profileImage"]); 
         if(!empty($action)){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::PROFILE_UPDATED];
         }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
         }

      break;

      //post review
      case 3:
         $action = $Users->postReview($_POST); 
         if(!empty($action)){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::REVIEW_POSTED];
         }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
         }

      break;

      /*
      ADMIN FORMS
      */
     
      //create book
      case 91:
        $action = $Books->createBook($_POST); 
        
        if(!empty($action)){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::BOOK_CREATED];
        }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
        }
      break;
      //modify book
      case 93:
        $action = $Books->modifyBook($_POST); 
        
        if(!empty($action)){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::BOOK_CREATED];
        }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
        }
      break;

      //delete book
      case 94:
      
        $action = $Books->deleteBook($_POST); 
        
        if(!empty($action)){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::DELETE_BOOK];
        }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
        }
      break;
     
      //create genre
      case 92:
        $action = $Books->createGenre($_POST); 
        
        if(!empty($action)){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::GENRE_CREATED];
        }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
        }
      break;

      //edit genre
      case 96:
      
        $action = $Books->editGenre($_POST); 
        
        if(!empty($action)){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::GENRE_CREATED];
        }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
        }
        
      break;

      /*
        USERS CRUD
       */

      //delete user
      case 97:
      
        //$action = $Books->editGenre($_POST); 
        
        if(!empty($action)){
          //$_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::GENRE_CREATED];
        }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
        }
        
      break;

      /*
        SALON
       */

      //delete SALON
      case 99:
      
        $action = $Salons->deleteSalon($_POST); 
        
        if(!empty($action)){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::DELETE_SALON];
        }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
        }
        
      break;

      //create SALON
      case 100:
        $action = $Salons->createSalon($_POST); 
        
        if(!empty($action)){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::CREATE_SALON];
        }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
        }
      break;

      //edit SALON
      case 101:
        $action = $Salons->editSalon($_POST); 
        
        if(!empty($action)){
          $_SESSION["feedback"] = ["type" => "success", "message" => MESSAGES::CREATE_SALON];
        }else{
          $_SESSION["feedback"] = ["type" => "danger", "message" => MESSAGES::ERROR];
        }
      break;

      default: 
        $_SESSION["feedback"] = "The form is not valid";
      break;

    }

  }