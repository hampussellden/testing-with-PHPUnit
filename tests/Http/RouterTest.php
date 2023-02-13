<?php

declare(strict_types=1);

namespace tests\Http;

use App\Http\Router;
use PHPUnit\Framework\TestCase;
use App\Exceptions\NotFoundHttpException;

class RouterTest extends TestCase
{
    public function test_route_request()
    {
        $router = new Router(['/' => 'pokemon']);
        $this->assertSame('pokemon', $router->direct('/'));
    }
    public function test_route_not_found()
    {
        $router = new Router(['/pokemon' => 'pokemon']);
        $router->direct('/kebab');
        $this->expectException(NotFoundHttpException::class);
    }
}
