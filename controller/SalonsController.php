<?php
class SalonsController extends ApplicationController{
  protected $db;

  public function __construct(){
    //instancie la BDD
    if(!$this->db){
      $this->db = new Database();
    }

  }

  public function registerUser($salonid, $userid){
    $currentusers = SELF::get($salonid)[0]["users_id"];
    
    if(!empty($currentusers)){
      $register[":users_id"] = $currentusers.','.$userid;
    }else{
      $register[":users_id"] = $userid;
    }
    $register[":id"] = $salonid;

    return $this->db->patch("salons", $register);
  }

  public function getAll(){
    $data = [];
    return $this->db->get("salons", $data);
  }
  public function get($id){
    $query = "SELECT 
                salons.id, salons.books_id, salons.date, salons.users_id,
                books.title, books.author, books.description, books.image, books.genres_id
              FROM salons 
              JOIN books
                ON books.id=salons.books_id
              WHERE salons.id =".$id." 
              LIMIT 1";
    return $this->db->custom($query);
  }

  public function deleteSalon($data){
    return $this->db->delete("salons", [":id" => intval($data["bookId"])]);
  }

  public function editSalon($data){
    $salonId = intval(trim($data["salonId"]));
    $salonsBookId = intval(trim($data["salonsBookId"]));
    $salonsDate = htmlspecialchars(trim($data["salonsDate"]));
    $salonsTime = htmlspecialchars(trim($data["salonsTime"]));
    $salonsDateTime = $salonsDate." ".$salonsTime.":00";
    if(!empty($salonsBookId)){
      $newSalon[":books_id"] = $salonsBookId;
    }
    $newSalon = [
      ":date" => $salonsDateTime,
      ":id" => $salonId
    ];
    return $this->db->patch("salons", $newSalon);

  }
  public function createSalon($data){
    $salonId = intval(trim($data["salonsBookId"]));
    $salonsBookId = intval(trim($data["salonsBookId"]));
    $salonsDate = htmlspecialchars(trim($data["salonsDate"]));
    $salonsTime = htmlspecialchars(trim($data["salonsTime"]));
    $salonsDateTime = $salonsDate." ".$salonsTime.":00";

    $newSalon = [
      ":books_id" => $salonsBookId,
      ":date" => $salonsDateTime
    ];
    return $this->db->put("salons", $newSalon);

  }
  
  public function getParticip($usersid, $salonid){

    $userid = explode(",", $usersid);
    $query = "SELECT salons.users_id, salons.id, users.id, users.username, users.image FROM salons JOIN users ON users.id = ";
      foreach ($userid as $key => $user) {
        if($key < 3){
          if($key !== 0){
            $query .= " OR users.id = ".$user;
          }else{
            $query .= $user;
          }
        }
      }
    $query .= " WHERE salons.id = ".$salonid;

    return $this->db->custom($query);

  }
  public function findNextSalon(){
    $query = "SELECT 
                salons.id, salons.books_id, salons.date, salons.users_id,
                books.title, books.author, books.description, books.image, books.genres_id
              FROM salons 
              JOIN books
                ON books.id=salons.books_id
              WHERE salons.date > NOW() 
              ORDER BY ABS( DATEDIFF( salons.date, NOW() ) ) 
              LIMIT 1";
    return $this->db->custom($query);
  }
  public function getPast(){
    $query = "SELECT 
                salons.id, salons.books_id, salons.date, salons.users_id,
                books.title, books.author, books.description, books.image, books.genres_id
              FROM salons 
              JOIN books
                ON books.id=salons.books_id
              WHERE salons.date < NOW() 
              ORDER BY ABS( DATEDIFF( salons.date, NOW() ) )";
    return $this->db->custom($query);
  }

  // public function getBook(){
    
  // }



}