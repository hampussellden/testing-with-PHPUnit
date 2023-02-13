<?php

declare(strict_types=1);

namespace App;

class Pokemon
{
    public int $id;
    public string $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getImageUrl(): string
    {
        $name = strtolower($this->name);
        $url = "https://img.pokemondb.net/sprites/bank/normal/$name.png";
        return $url;
    }
}
