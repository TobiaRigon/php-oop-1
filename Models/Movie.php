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

public function getTitle() {

    return $this->title;
}

public function setTitle($title) {

    $this->title = $title;
}

public function getGenres() {

    return $this->genres;
}

public function setGenres($genres) {

    $this->genres = $genres;
}
}