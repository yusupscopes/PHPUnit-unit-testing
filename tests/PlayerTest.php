<?php

use PHPUnit\Framework\TestCase;
use App\Models\Player;

class PlayerTest extends TestCase
{
    public $player;

    public function setUp()
    {
        $this->player = new Player('Yusup');
    }

    // test nama player
    public function testCheckPlayerName()
    {
        $this->assertEquals($this->player->getName(), 'Yusup');
    }

    // player defaultnya nggak punya pokemon
    public function testHasNoPokemonAsDefault()
    {
        $this->assertEmpty($this->player->pokemons);
    }

    // player bisa nangkap pokemon
    public function testCanCatchPokemon()
    {
        $this->player->catch('pikachu');
        $this->assertCount(1, $this->player->pokemons);
    }

    // pokemon yang ditangkap ada di daftar
    public function testCatchedPokemonIsInLists()
    {
        $this->player->catch('charmender');
        $this->player->catch('pikachu');
        $this->assertContains('charmender', $this->player->pokemons);
    }

    // pokemon yang nggak di tangkap nggak ada di daftar
    public function testUncatchedPokemonIsNotInLists()
    {
        $this->player->catch('charmender');
        $this->assertNotContains('pikachu', $this->player->pokemons);
    }

}
