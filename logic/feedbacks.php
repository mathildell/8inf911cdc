<?php

if(isset($_SESSION["feedback"])){
  $type = $_SESSION["feedback"]["type"];
  $msg = htmlspecialchars($_SESSION["feedback"]["message"]);
  echo '<div class="alert alert-'.$type.'">'.$msg.'</div>';
  
  unset($_SESSION["feedback"]);
}