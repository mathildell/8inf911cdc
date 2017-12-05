<?php
class BooksController extends ApplicationController{

  public function getAll(){
    $data = [];
    return $this->db->get("books", $data);
  }
  public function get($id){
    $data = [":id" => intval($id)];
    return $this->db->get("books", $data);

  }
  public function getCustom($data){
    return $this->db->get("books", $data);

  }
  public function getGenres(){
    $data = [];
    return $this->db->get("genres", $data);
  }


  public function modifyBook($data){
    $id = intval(trim($data["id"]));
    $author = htmlspecialchars(trim($data["bookAuthor"]));
    $title = htmlspecialchars(trim($data["bookTitlee"]));
    $publisher = htmlspecialchars(trim($data["bookPublisher"]));
    $publishedDate = htmlspecialchars(trim($data["bookPublishedDate"]));
    $description = htmlspecialchars(trim($data["bookDescription"]));
    $genres = htmlspecialchars(trim($data["genresIds"]));
    $alaune = intval(trim($data["aLaUne"]));


    $modifyBook = [
      ":title" => $title,
      ":author" => $author,
      ":description" => $description,
      ":publisher" => $publisher,
      ":publishedDate" => $publishedDate,
      ":genres_id" => $genres,
      ":ALaUne" => $alaune,
      ":id" => $id
    ];

    return $this->db->patch("books", $modifyBook);

  }
  public function createBook($data){

    $googleid = htmlspecialchars(trim($data["googleId"]));
    $author = htmlspecialchars(trim($data["bookAuthor"]));
    $title = htmlspecialchars(trim($data["bookTitlee"]));
    $publisher = htmlspecialchars(trim($data["bookPublisher"]));
    $publishedDate = htmlspecialchars(trim($data["bookPublishedDate"]));
    $image = htmlspecialchars(trim($data["bookImagee"]));
    $description = htmlspecialchars(trim($data["bookDescription"]));
    $genresIds = explode(",", htmlspecialchars(trim($data["genresIds"])));
    $genresName = explode(",", htmlspecialchars(trim($data["genresNames"])));
    $alaune = intval(trim($data["aLaUne"]));

    $allGenres = [];

    foreach ($genresName as $key => $newGenre) {
      if(!empty(trim($newGenre))){
        $checkIfGenreExists = SELF::getGenre($newGenre)[0]["id"];
        if(!empty($checkIfGenreExists)){
          array_push($allGenres, $checkIfGenreExists);
        }else{
          SELF::createGenre(["genreName" => $newGenre]);
          array_push($allGenres, SELF::getGenre($newGenre)[0]["id"]);
        }
      }
    }
    if(!empty($genresIds[0])){
      $allGenres = array_merge($genresIds, $allGenres);
    }
    if(is_array($allGenres)){
      $allGenres = implode(",", $allGenres);
    }
    
    $newBook = [
      ":google_id" => $googleid,
      ":title" => $title,
      ":author" => $author,
      ":description" => $description,
      ":publisher" => $publisher,
      ":publishedDate" => $publishedDate,
      ":image" => $image,
      ":genres_id" => $allGenres,
      ":ALaUne" => $alaune,
      ":created" => date('Y-m-d H:m:s') 
    ];

    return $this->db->put("books", $newBook);
    

  }
  public function createGenre($data){
    if(!empty($data)){
      $genreName = [":name" => htmlspecialchars(trim($data["genreName"]))];
      return $this->db->put("genres", $genreName);
    }else{
      return true;
    }
  }
  public function deleteBook($data){
    $delete = [":id" => intval($data["id"])];
    return $this->db->delete("books", $delete);
  }
  public function editGenre($data){
    $genr = [":name" => htmlspecialchars(trim($data["genreName"])), ":id" => intval(trim($data["id"]))];
    return $this->db->patch("genres", $genr);
  }
  public function getGenre($idName){
    return $this->db->get("genres", [":name" => htmlspecialchars(trim($idName))]);
  }
  public function getGenreByID($id){
    return $this->db->get("genres", [":id" => htmlspecialchars(trim($id))]);
  }
  public function getGenresBunks($ids){
    $names = [];
    $ids = explode(",", $ids);
    foreach ($ids as $key => $id) {
      $retrievedGenres = $this->db->get("genres", [":id" => intval($id)])[0];
      array_push($names, $retrievedGenres);
    }
    return $names;
  }

  public function findEmphasedOfGenre($id){
    //SELECT * FROM books WHERE ALaUne = '1' AND genres_id LIKE '%9%'
    $query = "SELECT * FROM books WHERE ALaUne = '1' 
    AND genres_id LIKE '%".$id."%'";
    
    $return = $this->db->custom($query);

    $books = [];
    foreach ($return as $key => $value) {
      if(in_array($id, explode(',', $value["genres_id"]))){
        array_push($books,$value);
      } 
    }

    return $books;
  }
  
  public function getNews(){
    $query = "SELECT title, id, author FROM books ORDER BY id DESC LIMIT 4";
    return $this->db->custom($query);
  }

  public function getByGenre($id){

    $query = "SELECT * FROM books 
              WHERE ALaUne = '0' 
              AND genres_id LIKE '%".$id."%'";
    
    $return = $this->db->custom($query);

    $books = [];
    foreach ($return as $key => $value) {
      if(in_array($id, explode(',', $value["genres_id"]))){
        array_push($books,$value);
      } 
    }

    return $books;

  }

  public function getComments($bookId){
    //$book["comments_id"]

    $query = "SELECT * FROM reviews 
              WHERE books_id = ".$bookId."
              ORDER BY timestamp DESC";
    return $this->db->custom($query);
  }

  public function searchResults($keyword){

    $query = "SELECT * FROM books 
              WHERE title LIKE '%".$keyword."%' 
              OR description LIKE '%".$keyword."%' 
              OR author LIKE '%".$keyword."%'  
              OR publisher LIKE '%".$keyword."%' 
              ORDER BY ALaUne";
    return $this->db->custom($query);

  }
  public function getRecommended($bookid, $array){

    $tags = [];
    foreach ($array as $key => $tgu) {
      array_push($tags, $tgu["id"]);
    }
    //return $array;
    $query = "SELECT *
              FROM books 
              WHERE (genres_id LIKE ";

      foreach ($tags as $key => $tg) {
        if($key !== 0){
          $query .= " OR genres_id LIKE "."'%".$tg."%'";
        }else{
          $query .= "'%".$tg."%'";
        }
      }
      $query .= ") AND id != '".$bookid."'";

    return $this->db->custom($query);

  }

  //var_dump($emphasedTags);die();

//[":ALaUne" => "1", 

}