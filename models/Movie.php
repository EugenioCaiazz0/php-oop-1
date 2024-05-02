<?php
class Movie
{
    /* caratteristiche della classe */
    public $name;
    public $year;
    public $genre;
    public $length;
    public $critic_score;

    /* funzione che ci permette di collegare la classe alla variabile d'istanza */
    /* ora le funzioni setter non ci servono perchè nel caso di un film sono info già stabilite */
    public function __construct(string $_name, int $_year, string $_genre, float $_length, float $_critic_score)
    {
        $this->name = $_name;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->length = $_length;
        $this->critic_score = $_critic_score;
    }

    /* funzione che stampa le info richieste */
    public function getFullInfo()
    { /* non funziona il break line? */
        echo "$this->name \n";
        echo "$this->year \n";
        echo "$this->genre \n";
        echo "$this->length minutes \n";
        echo "$this->critic_score stars \n";
    }

    public function getName(){
        return $this->name;
    }

    function getYear(){
        return $this->year;
    }

    function getGenre(){
        return $this->genre;
    }

    function getLength(){
        return $this->length;
    }

    function getCriticScore(){
        return $this->critic_score;
    }
}