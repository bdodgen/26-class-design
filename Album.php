<!-- An album is a collection of audio tracks.

Decide on a good name for the class.
Create a new file with a proper name and declare the class inside.
Declare properties in the class that could describe an album object.
Write (empty) method declarations for whatever actions an album object can do or that can be done to it.
Optionally declare parameters to the declared methods. Use type declarations wherever it makes sense, especially if the parameters or return values should be objects of other classes from these exercises. -->

<?php

class Album
{
  public ?string $title = null; // album title
  public ?array $tracks = []; // set of AudioTrack objects
  public ?int $album_length = null; // length of album in millisecs
  public ?int $year_published = null; 
  public ?Author $author = null;

  public function setTitle(string $title) 
  {
    $this->title = $title;
  }

  public function getTitle() 
  {
    return $this->title;
  }

  public function addTrackToAlbum(AudioTrack $track) 
  {
    // adds ablum to discography (albums[])
  }

  public function getTracklist() 
  {
    return $tracks;
  }
}