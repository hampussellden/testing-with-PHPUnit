<?php

declare(strict_types=1);

use App\Pokemon;

$monsters = $database->select()->from('pokemon')->get();
$monsters = array_map(
    function ($monster) {
        return new Pokemon($monster['id'], $monster['name']);
    },
    $monsters
);


require view('pokedex');
