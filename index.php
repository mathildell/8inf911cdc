<?php 

  error_reporting( E_ALL ); //debug mode

  session_start(); 
  require_once 'model/Autoloader.php';

  $root =  "http://" . $_SERVER['SERVER_NAME'];

  require_once 'lib/ti.php'; //http://arshaw.com/phpti/

  require_once $_SERVER['DOCUMENT_ROOT'] . '/config/GeneralConfig.php';

  $sampleController = new SampleController();

  if(isset($_GET['p'])){

    $page = htmlspecialchars( trim( $_GET['p'] ) ); //eg. http://localhost/?p=home

    if( !empty($page) ){

      $pageFilePath = 'view/layout/' . $page . '/index.php';

      if(file_exists( $pageFilePath )){

        include $pageFilePath;

      }else{

        $page = '404';
        include 'view/layout/404/index.php';

      }

    }else{

      $page = 'home';
      include 'view/layout/home/index.php';

    }

  }else{

  $page = 'home';
  include 'view/layout/home/index.php';

}