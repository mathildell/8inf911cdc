<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/Autoloader.php';
$Books = new BooksController();
$allbooks = $Books->getGenres();
echo json_encode($allbooks);
?>