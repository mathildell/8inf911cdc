<?php
//require_once 'model/Database.php'; 

class SampleController{
  protected $db;

  public function __construct(){

    if(!$this->db){
      $this->db = new Database();
    }

  }

  public function getStuffFromDb(){
    return $this->db->getAll("myTable");
  }

}