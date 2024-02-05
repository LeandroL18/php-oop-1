<?php
    class Movie {

        public $title;
        public $director;

        public function __construct($title, $director) {

            $this -> title = $title;
            $this -> director = $director;
        }

        public function getInfo() {

            return $this -> title . " - " . $this -> director ;
        
        }
    }

    $movie1 = new Movie("My title 1", "My director 1");

    $movie2 = new Movie("My title 2", "My director 2");

    var_dump($movie1);
    echo "<br><br>";

    var_dump($movie2);
    echo "<br><br>";

    echo "Movie1: " . $movie1 -> getInfo() . "<br><br>";

    echo "Movie2: " . $movie2 -> getInfo();
?>
