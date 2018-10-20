<?php

namespace App\Models;

class Player
{
    public $name;
    public $pokemons = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function catch($pokemonsName)
    {
        $this->pokemons[] = $pokemonsName;
    }
}
