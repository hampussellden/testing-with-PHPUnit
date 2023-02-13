<?php

declare(strict_types=1);

namespace App\Http;

use App\Exceptions\NotFoundHttpException;


class Router
{
    protected $routes = [];
    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        throw new NotFoundHttpException();
    }
}
