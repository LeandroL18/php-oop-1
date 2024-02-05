<?php
    class Movie {

        public $title;
        public $director;

        public function __construct($title, $director) {

            $this -> title = $title;
            $this -> director = $director;
        }
    }
?>
