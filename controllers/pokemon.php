<?php

declare(strict_types=1);

use App\Pokemon;

$id = $_GET['id'];

$data = $database->select()->from('pokemon')->where('id', '=', $id)->first();
$monster = new Pokemon($data->id, $data->name);
require view('pokemon');
