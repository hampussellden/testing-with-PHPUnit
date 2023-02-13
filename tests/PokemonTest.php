<?php

declare(strict_types=1);

namespace Tests;

use App\Pokemon;
use PHPUnit\Framework\TestCase;

class PokemonTest extends TestCase
{

    public function test_create_pokemon()
    {
        $bulbasaur = new Pokemon(1, 'Bulbasaur');
        $this->assertSame(1, $bulbasaur->id);
        $this->assertSame('Bulbasaur', $bulbasaur->name);
    }
    public function test_get_image_url()
    {
        $monster = new Pokemon(1, 'Charizard');
        $this->assertSame("https://img.pokemondb.net/sprites/bank/normal/charizard.png", $monster->getImageUrl());
    }
}
