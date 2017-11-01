<?php
//require_once 'model/Database.php'; 

class SampleController{
  protected $db;

  public function __construct(){
    //instancie la BDD
    if(!$this->db){
      $this->db = new Database();
    }

  }

  public function getStuffFromDb(){
    //myTable est le nom de la table dans la BDD
    //On fait la connexion avec la fonction getAll() de la classe Database
    return $this->db->getAll("myTable");
  }

  public function form0Validated($data){
    //Traitement des données du form
    $email = htmlspecialchars(trim($data["exampleInputEmail1"]));
    $mdp = htmlspecialchars(trim($data["exampleInputPassword1"]));

    //Envoyer les données à la BDD
    //return $this->db->insertInto("myTable", $data);
    
    //Pour l'éxemple, disons qu'on retourne un tableau des valeurs qu'on a traité
    return [$email, $mdp];

  }

}