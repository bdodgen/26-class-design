<!-- An author is he who created an audio track, typically some sort of a musician.

Decide on a good name for the class.
Create a new file with a proper name and declare the class inside.
Declare properties in the class that could describe an author object.
Write (empty) method declarations for whatever actions an author object can do or that can be done to it.
Optionally declare parameters to the declared methods. Use type declarations wherever it makes sense, especially if the parameters or return values should be objects of other classes from these exercises. -->

<?php

class Author
{
  public ?string $name = null;
  public ?array $albums = []; // populated with Album class objects
  public ?Album $top_album = null; // most popular Album by this author

  public function setAuthorName(string $name) 
  {
    $this->name = $name;
  }

  public function getAuthorName() 
  {
    return $this->name;
  }

  public function addAlbumToDiscography(Album $album) 
  {
    // adds ablum to discography (albums[])
  }

  public function getDiscography() 
  {
    return $albums;
  }

  public function setTopAlbum(Album $album)
  {
    $this->top_album = $album;
  }

  public function getTopAlbum() 
  {
    return $top_album;
  }
}