<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/DatabaseConfig.local.php';

class Database{

  protected $db;
  protected $sql;

  public function __construct(){

    if(!$this->db){
      //PDO: http://php.net/manual/en/class.pdo.php
      $this->db = new PDO('mysql:host='.DB_CONFIG::DB_HOST.';dbname='.DB_CONFIG::DB_NAME.'', DB_CONFIG::DB_UN, DB_CONFIG::DB_PWD);
     // $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

  }

  public function getPrepStat($action, $table, $data){
    //INSERT INTO :table (:column_1, :column_2, :column_3) VALUES (:value_1, :value_2, :value_3);
    switch($action){
      //PUT
      case 0:
        $query = "INSERT INTO "; 
        $query .= $table . " ("; 
        $i = 0; $count = count($data) - 1;
        for($u = 0; $u < 2; $u++){
          foreach ($data as $columnName => $value) {
            if($i !== 0 && $i !== $count+1){
              $query .= ", ";
            }
            if($u === 1){
              if($i === $count+1){
                $query .= ") VALUES (";
              }
              $query .= $columnName;
              if($i === ($count * 2)+1 ){
                $query .= ")";
              }
            }else{
              $query .= ltrim($columnName, ':');
            }
            $i++;
          }
        }
      break;

      //GET
      case 1:
        $query = "SELECT * FROM " . $table; 
        if(!empty($data)){
          $query .= " WHERE ";
          $i = 0;
          foreach ($data as $columnName => $value) {
            if($i !== 0){
              $query .= " AND ";
            }
            
            $query .= ltrim($columnName, ':')." = ".$columnName;
          

            $i++;
          }
        }

      break;

      //PATCH
      case 2:
        $query = "UPDATE "; 
        $query .= $table . " SET "; 
        $i = 0;
        foreach ($data as $columnName => $value) {
          if($i !== 0 && $i !== count($data) - 1 ){
            $query .= ", ";
          }
          if($i !== count($data) - 1){
            $query .= ltrim($columnName, ':')." = ".$columnName;
          }
          $i++;
        }
        end($data);
        $query .= " WHERE id = ".key($data);
      break;

      //DELETE
      case 3:
        $query = "DELETE FROM ".$table; 
        end($data);
        $query .= " WHERE id = ".key($data);
      break;

      default: return false; break;
    }


    return $this->db->prepare($query);



  }

  //retrieve
  public function get($table, $data){
    //$sql = SELF::getPrepStat(1, $table, $data);
    
    $this->sql = SELF::getPrepStat(1, $table, $data);
    $this->sql->execute($data);
    return $this->sql->fetchAll(PDO::FETCH_ASSOC);


    //$this->sql->fetchAll(PDO::FETCH_ASSOC)return $sql->fetchAll(PDO::FETCH_ASSOC);
  }

  //add
  public function put($table, $data){
    $this->sql = SELF::getPrepStat(0, $table, $data);
    return $this->sql->execute($data);
  }

  //edit
  public function patch($table, $data){
    $this->sql = SELF::getPrepStat(2, $table, $data);
    return $this->sql->execute($data);
  }

  //remove
  public function delete($table, $data){
    $this->sql = SELF::getPrepStat(3, $table, $data);
    return $this->sql->execute($data);
  }

  //remove
  public function custom($query){
    $this->sql = $this->db->prepare($query);
    $this->sql->execute();
    return $this->sql->fetchAll(PDO::FETCH_ASSOC);
  }
    //$this->sql = $this->db->prepare($query);


  // public function getAll($table){
  //   $this->sql = $this->db->prepare("SELECT * FROM ".$table);
  //   $this->sql->execute();
  //   return $this->sql->fetchAll(PDO::FETCH_ASSOC);
  // }

  //On peut ajouter les fonctions d'ajout, d'édition etc ci-après
  //Récuperer une seule column avec un id:
  //  SELECT * FROM :table WHERE id = :id;
  //Ajout: 
  //  INSERT INTO :table (:column_1, :column_2, :column_3) VALUES (:value_1, :value_2, :value_3);
  //Édition: 
  //  UPDATE :table SET :column_1 = :value_1, :column_2 = :value_2, :column_3 = :value_3 WHERE id = :id;

}
