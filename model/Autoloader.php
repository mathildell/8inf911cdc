<?php
spl_autoload_register(function ($class) {
  if(file_exists( $_SERVER['DOCUMENT_ROOT'] . '/model/' . $class . '.php')){
      return require( $_SERVER['DOCUMENT_ROOT'] . '/model/' . $class . '.php'); 
  }else if(file_exists( $_SERVER['DOCUMENT_ROOT'] . '/controller/' . $class . '.php')){
      return require( $_SERVER['DOCUMENT_ROOT'] . '/controller/' . $class . '.php'); 
  }
});