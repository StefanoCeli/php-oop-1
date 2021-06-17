<?php

class Movie {
    public $title;
    public $genre;
    public $rating;
    private $user_rating;
    static $movie_count;

    public function __construct($_title){
        $this->title = $_title;
        self::$movie_count++;
    }

    static function getMovieCount(){
        return self::$movie_count;
    }
    private function setUserRating(){
        $this->user_rating = rand(10,100) / 10;
    }
    public function getUserRating(){
        $this->setUserRating();
        return $this->user_rating;
    }
    public function getInfoMovie(){
        return "Titolo : " . $this->title  . ", genere: " . $this->genre  . ", voto stampa : " .  $this->rating  .", voto utenti: " .  $this->getUserRating();
    }
}

