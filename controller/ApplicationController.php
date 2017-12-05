<?php

class ApplicationController{

  public function formatdate($date){

  }

  public function custom($query){
    return $this->db->custom($query);
  }

}