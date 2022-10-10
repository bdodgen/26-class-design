<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

//prep a new (empty) entity
$song = new Song;



//fill the entity with request data
$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;

$id = insert($song);

var_dump($id);
