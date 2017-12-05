<?php
class AdminController extends ApplicationController{
  protected $db;

  public function __construct(){
    //instancie la BDD
    if(!$this->db){
      $this->db = new Database();
    }

  }



}