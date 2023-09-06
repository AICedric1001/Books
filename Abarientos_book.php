<?php

//Creating a class and its properties
  class Book {
 private $title ="Harry Potter";
 private $author  ="J.K. Rowling";
 private $pages  = 400;

//Construct
 function __construct($author, $title, $pages) {
    $this->$title = $title;
    $this->$author = $author;
    $this->$pages = $pages;
  }
  

 //Setters 
  public function set_title($title) {
    $this->title = $title;
  }

  public function set_author($author) {
    $this->author = $author;
  }

  public function set_pages($pages) {
    $this->pages = $pages;
  }


//Getters
public function get_title() {
    return $this->title;
  }

 public function get_author() {
    return $this->author;
  }

 public function get_pages() {
    return $this->pages;
  }

  function describe() {
  return $this->title . ' by ' . $this->author . ' has ' . $this->pages . ' pages.';
 }


}

$book = new Book("Harry Potter", "J.K. Rowling", 400);
echo $book->describe();
echo "<br>";
echo "<br>";


//Test Script.....
echo "Test Script: <br>";
$book->set_Title("Harry Potter");
$book->set_Pages(400);
$book->set_Author("J.K. Rowling");

echo $book->describe();


?>