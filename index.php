<?php

class Movie
 {
    //proprieta
    public $title;
    public $year_production;
    public $duration;
    public $production_country;

    //costruttore
    public function __construct($title, $year_production, $duration, $production_country)
    {
        $this->title = $title;
        $this->year_production = $year_production;
        $this->duration = $duration;
        $this->production_country = $production_country;
    }

    public function filminfo()
    {
        echo "Il film {$title} e stato prodotto {$year_production}";
    }

}

$movie1 = new Movie ('Rush', 2020, 1.4, 'England');

$movie2 = new Movie ('Creed2', 2021, 1.1, 'America');

var_dump($movie1, $movie2);