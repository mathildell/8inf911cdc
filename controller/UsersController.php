<?php
//require_once 'model/Database.php'; 

class UsersController extends ApplicationController{
  public function getStuffFromDb(){
    //return $this->db->getAll("myTable");
  }

  public function get($id){
    //return $this->db->getAll("myTable");
    return $this->db->get("users", [":id" => $id]);
  }
  public function getAll(){
    $data = [];
    return $this->db->get("users", $data);
  }

  public function login($data){
    $username = htmlspecialchars(trim($data["loginUsername"]));
    $mdp = htmlspecialchars(trim($data["loginPassword"]));

    $userReturn = $this->db->get("users", [":username" => $username]);
    if(!empty($userReturn)){
      if(password_verify($mdp, $userReturn[0]["password"])){
        return $userReturn;
      }else{
        return false;
      }
    }else{
      return false;
    }

  }
  public function postReview($data){
    $bookId = intval(trim($data["bookId"]));
    $userId = intval(trim($data["userId"]));
    $reviewTitle = htmlspecialchars(trim($data["reviewTitle"]));
    $reviewContent = htmlspecialchars(trim($data["reviewContent"]));

    $newReview = [
      ":books_id" => $bookId,
      ":users_id" => $userId,
      ":title" => $reviewTitle,
      ":content" => $reviewContent,
      ":timestamp" => date('Y-m-d H:m:s') 
    ];

    return $this->db->put("reviews", $newReview);

  }
  public function registerForm($data){
    //Traitement des données du form
    $email = htmlspecialchars(trim($data["registerEmail"]));
    $username = htmlspecialchars(trim($data["registerUsername"]));
    $mdp = htmlspecialchars(trim($data["registerPwd1"]));
    $mdp2 = htmlspecialchars(trim($data["registerPwd2"]));
    
    if($mdp === $mdp2){
      $newUser = [
        ":username" => $username,
        ":email" => $email,
        ":password" => password_hash($mdp, PASSWORD_BCRYPT),
        ":registered" => date('Y-m-d H:m:s') 
      ];

    $emailExists = $this->db->get("users", [":email" => $email]);
    $usernameExists = $this->db->get("users", [":username" => $username]);
    
    if(!empty($emailExists) || !empty($usernameExists)){
      return false;
    }else{
      return $this->db->put("users", $newUser);
    }

    }else{
      return false;
    }

  }

  public function updateProfile($data, $img){
    $userid = intval(trim($data["userid"]));
    $username = htmlspecialchars(trim($data["profileUsername"]));
    $email = htmlspecialchars(trim($data["profileEmail"]));
    $mdp = htmlspecialchars(trim($data["profilePassword"]));
    $abt = htmlspecialchars(trim($data["profileAbout"]));
    
    $newUserInfo = [
      ":username" => $username,
      ":email" => $email,
      ":about" => $abt
    ];


    if(!empty($data["profilePassword"])){
      $newUserInfo[":password"] = password_hash($mdp, PASSWORD_BCRYPT);
    }

    if(!empty($img)){

      if($img['size'] > 0){
        $file = $img;
        $imageFileType = pathinfo(basename($file["name"]),PATHINFO_EXTENSION);
        if($file["size"] > 500000 && ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") ){
          return false;
        }else{
          $uniqid = uniqid();
          $path = '/view/assets/img/users/' .$username.'_'.$uniqid.'.'.$imageFileType;
          $target_file = $_SERVER['DOCUMENT_ROOT'] . $path;
          $uploadOk = move_uploaded_file($file["tmp_name"], $target_file);

          $newUserInfo[":image"] = $path;
        }
      }

    }

    $newUserInfo[":id"] = $userid;
    
    return $this->db->patch("users", $newUserInfo);

  }





}