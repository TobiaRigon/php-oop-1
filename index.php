<?php

    class Movie {

        public $title;
        public $directed;
        public $language;

        public function __construct($title, $directed, $language) {

            $this -> title = $title;
            $this -> directed = $directed;
            $this -> language = $language;
        }

        public function getTitle() {

            return $this -> title;
        }
        public function setTitle($title) {

            $this -> title = $title;
        }
    }

    // class User {

    //     public $nome;
    //     public $eta;
    //     public  $address;

    //     function __construct($nome, $eta,  $address) {

    //         $this -> nome = $nome;
    //         $this -> eta = $eta;
    //         $this -> address = $address;
    //     }
    // }

    $movie1 = new Movie("Snatch", "Guy Ritchie", "English");
    $movie2 = new Movie("RRR", "S. S. Rajamouli", "Telugu");

   

    var_dump($movie1);
    echo "<br><br>";
    var_dump($movie1 -> title);
    echo "<br>";
    var_dump($movie1 -> directed);
    echo "<br>";
    var_dump($movie1 -> language);
    echo "<br>-----------------<br>";
    var_dump($movie2);
    echo "<br><br>";
    var_dump($movie2 -> title);
    echo "<br>";
    var_dump($movie2 -> directed);
    echo "<br>";
    var_dump($movie2 -> language);

