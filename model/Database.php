<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/DatabaseConfig.php';

class Database{

  protected $db;

  public function __construct(){

    if(!$this->db){
      //PDO: http://php.net/manual/en/class.pdo.php
      $this->db = new PDO('mysql:host='.DB_CONFIG::DB_HOST.';dbname='.DB_CONFIG::DB_NAME.'', DB_CONFIG::DB_UN, DB_CONFIG::DB_PWD);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

  }

  public function getAll($table){
    $this->sql = $this->db->prepare("SELECT * FROM ".$table);
    $this->sql->execute($query);
    return $this->sql->fetchAll(PDO::FETCH_ASSOC);
  }

  //On peut ajouter les fonctions d'ajout, d'édition etc ci-après
  //Récuperer une seule column avec un id:
  //  SELECT * FROM :table WHERE id = :id;
  //Ajout: 
  //  INSERT INTO :table (:column_1, :column_2, :column_3) VALUES (:value_1, :value_2, :value_3);
  //Édition: 
  //  UPDATE :table SET :column_1 = :value_1, :column_2 = :value_2, :column_3 = :value_3 WHERE id = :id;

}
