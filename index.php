<?php 
  //debug mode, à supprimer en prod
  error_reporting( E_ALL ); 
  
  //Les sessions sont les cookies en PHP, c'est ce qui gère l'activité des users
  session_start();

  //Autoloader
  require_once 'model/Autoloader.php'; 

  //Si besoin, pour les fichiers à chemin absolus
  $root =  "//" . $_SERVER['SERVER_NAME']; 
  
  //Librairie externe pour un système de templating sans Twig (Symfony) ou Blade (Laravel)
  //http://arshaw.com/phpti/
  require_once 'lib/ti.php';

  //Fichier de config du site
  require_once $_SERVER['DOCUMENT_ROOT'] . '/config/GeneralConfig.php';

  //Initiation des controllers
  $sampleController = new SampleController();

  //Gestion de la validation de formulaire
  require_once 'logic/validateForms.php';

  // Gestion de l'affichage des pages
  require_once 'logic/displayPages.php';