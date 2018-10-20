<?php

use PHPUnit\Framework\TestCase;
use App\Models\Pokemon;

class PokemonTest extends TestCase
{
    /** @test */
    public function checkPokemonFirstName()
    {
        $pokemon = new Pokemon;
        $pokemon->setFirstName('Charmender');
        $this->assertEquals($pokemon->getFirstName(), 'Charmender');
    }
}
