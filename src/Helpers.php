<?php

declare(strict_types=1);

function view(string $file)
{
    return __DIR__ . "/../views/$file.view.php";
}
