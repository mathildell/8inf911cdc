<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/DatabaseConfig.php';

class Database{

  protected $db;
  protected $sql;

  public function __construct(){

    if(!$this->db){
      $this->db = new PDO('mysql:host='.DB_CONFIG::DB_HOST.';dbname='.DB_CONFIG::DB_NAME.'', DB_CONFIG::DB_UN, DB_CONFIG::DB_PWD);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

  }

  public function getAll($table){
    $this->sql = $this->db->prepare("SELECT * FROM ".$table);
    $this->sql->execute($query);
    return $this->sql->fetchAll(PDO::FETCH_ASSOC);
  }

}