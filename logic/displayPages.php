<?php
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