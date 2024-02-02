<?php

class Movie {

    public $title;
    public $director;
    public $language;
    public $genres;

    public function __construct($title, $director, $language, $genres) {

        $this->title = $title;
        $this->director = $director;
        $this->language = $language;
        $this->genres = $genres;
    }

    // public function getTitle() {

    //     return $this->title;
    // }

    // public function setTitle($title) {

    //     $this->title = $title;
    // }

    public function getGenres() {

        return $this->genres;
    }

    public function setGenres($genres) {

        $this->genres = $genres;
    }
}

$genres1 = ["Crime", "Comedy"];
$genres2 = ["Action", "Drama"];

$movie1 = new Movie("Snatch", "Guy Ritchie", "English", $genres1);
$movie2 = new Movie("RRR", "S. S. Rajamouli", "Telugu", $genres2);

var_dump($movie1);
echo "<br><br>";
var_dump($movie1->title);
echo "<br>";
var_dump($movie1->director);
echo "<br>";
var_dump($movie1->language);
echo "<br>";
var_dump($movie1->getGenres());
echo "<br>-----------------<br>";
var_dump($movie2);
echo "<br><br>";
var_dump($movie2->title);
echo "<br>";
var_dump($movie2->director);
echo "<br>";
var_dump($movie2->language);
echo "<br>";
var_dump($movie2->getGenres());
?>
