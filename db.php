<?php

$genres1 = ["Crime", "Comedy"];
$genres2 = ["Action", "Drama"];
$genres3 = ["Adventure", "Fantasy"];
$genres4 = ["Sci-Fi", "Thriller"];
$genres5 = ["Animation", "Family"];
$genres6 = ["Romance", "Musical"];
$genres7 = ["Mystery", "Horror"];
$genres8 = ["Documentary", "History"];
$genres9 = ["War", "Biography"];
$genres10 = ["Sport", "Western"];

$movies = [
    new Movie("Snatch", "Guy Ritchie", "English", $genres1),
    new Movie("RRR", "S. S. Rajamouli", "Telugu", $genres2),
    new Movie("Inception", "Christopher Nolan", "English", $genres3),
    new Movie("The Matrix", "Lana Wachowski", "English", $genres4),
    new Movie("Toy Story", "John Lasseter", "English", $genres5),
    new Movie("La La Land", "Damien Chazelle", "English", $genres6),
    new Movie("The Shawshank Redemption", "Frank Darabont", "English", $genres7),
    new Movie("Apollo 13", "Ron Howard", "English", $genres8),
    new Movie("Saving Private Ryan", "Steven Spielberg", "English", $genres9),
    new Movie("The Karate Kid", "John G. Avildsen", "English", $genres10),
];

?>
