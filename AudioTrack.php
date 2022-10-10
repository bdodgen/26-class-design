<?php

class AudioTrack
{
  public int $id; // unique id from the database
  public string $source_url; // URL where the data stream should come from
  public ?string $name = null;
  public ?int $length = null; // in miliseconds // ?float if in seconds
  public ?Author $author = null;
  public ?Album $album = null;
  public ?string $lyrics = null;

  // VVVVVV begins streaming the data
  public function startStream() 
  {

  }

  // VVVVVV stops streaming the data
  public function stopStream() 
  {

  }

  // VVVVVV save info about this object into database
  public function save() : int
  {
    return 123; // returns a unique ID num that was given to us
                // by the database when we inserted the record
  }

  // VVVVVV deletes record from the database
  public function delete() 
  {

  }
  
  // returns length in M:s format
  public function getLengthHumanReadable() : string 
  {
    return floor($this->length / 60) . ":" . $this->length %60;
  }
  
  // returns the name of the author
  public function getAuthorName() : string 
  {
    // if Authro class has name prop
    return $this->author->name;
  }
  
  // adds this track to an album at given position
  public function addToAblum(Album $album, int $position) : string 
  {
    $this->album = $album;
  }
}