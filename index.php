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
?>
