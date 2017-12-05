<?php

class ApplicationController{
  
  protected $db;

  public function __construct(){
    //instancie la BDD
    if(!$this->db){
      $this->db = new Database();
    }

  }

  public function custom($query){
    return $this->db->custom($query);
  }

}