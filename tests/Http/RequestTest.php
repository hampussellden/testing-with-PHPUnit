<?php

declare(strict_types=1);

namespace tests\Http;

use App\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function test_get_uri()
    {
        $_SERVER['REQUEST_URI'] = 'fake';
        $req = new Request;
        $this->assertSame('fake', $req::uri());
    }
}
