<?php

require_once 'DBBlackbox.php';
require_once 'Song.php';

// find the ID of the record we want to edit in the request
$id = $_GET['id'];
 
// somehow retrieve existing song from some storage
$song = find( $id, 'Song' );

//fill the entity with request data
$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;


//update song in database
