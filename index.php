<?php 
  //debug mode, à supprimer en prod
  error_reporting( E_ALL ); 

  
  //Les sessions sont les cookies en PHP, c'est ce qui gère l'activité des users
  session_start();

  //Autoloader
  require_once 'model/Autoloader.php'; 

  //Si besoin, pour les fichiers à chemins absolus
  $root =  "//" . $_SERVER['SERVER_NAME']; 
  
  //Librairie externe pour un système de templating sans Twig (Symfony) ou Blade (Laravel)
  //http://arshaw.com/phpti/
  require_once 'lib/ti.php';

  //Fichier de config du site
  require_once $_SERVER['DOCUMENT_ROOT'] . '/config/GeneralConfig.php';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/config/messages.php';

  //Initiation des controllers
  $Users = new UsersController();
  $Books = new BooksController();
  $Salons = new SalonsController();


  //Log out logic
  if(isset($_GET["logout"])){
    unset($_SESSION["logged"], $_SESSION["isadmin"], $_SESSION["id"]);
  }

  //Logged in logic
  if(isset($_SESSION["logged"])){
    $logged = true;
    $me = $Users->get($_SESSION["id"])[0];
    $isadmin = (intval($me["isAdmin"]) === 1) ? true : false;
  }
  

  //Gestion de la validation de formulaire
  require_once 'logic/validateForms.php';

  //Gestion des feedbacks
  require_once 'logic/feedbacks.php';

  // Gestion de l'affichage des pages
  require_once 'logic/displayPages.php';