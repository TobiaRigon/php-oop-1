<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Movies</title>
    <style>
        body {
            font-family: Arial, sans-serif;

        }

        .movie-container {
            margin: 20px auto;
            padding: 10px;
            padding-bottom:30px;
            background-color:#333333;
            border-radius: 5px;
            color:#ccc;
            text-align:center;
            width: 50%;
            min-width:229px
        }

        h2 {
            margin-bottom: 5px;
            color:#ffffff
        }

        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

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

$genres1 = ["Crime", "Comedy"];
$genres2 = ["Action", "Drama"];

$movies = [
    new Movie("Snatch", "Guy Ritchie", "English", $genres1),
    new Movie("RRR", "S. S. Rajamouli", "Telugu", $genres2)
];

foreach ($movies as $movie) {
    ?>

    <div class="movie-container">
        <div class="movie-details">
            <h2><?php echo $movie->getTitle(); ?></h2>
            <p><strong>Director:</strong> <?php echo $movie->director; ?></p>
            <p><strong>Language:</strong> <?php echo $movie->language; ?></p>
            <p><strong>Genres:</strong> <?php echo implode(', ', $movie->getGenres()); ?></p>
        </div>
    </div>

    <?php
}
?>

</body>
</html>
