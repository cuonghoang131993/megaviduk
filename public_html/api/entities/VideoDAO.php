<?php
class VideoDAO
{
  public $id;
  public $title;
  public $description;
  public $author;

  public function __construct($id, $title, $description, $author)
  {
    $this->id = $id;
    $this->title = $title;
    $this->description = $description;
    $this->author = $author;
  }
}
