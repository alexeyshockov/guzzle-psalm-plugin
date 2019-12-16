<?php

namespace GuzzleHttp\Handler;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class MockHandler
{
    /**
     * @psalm-variadic
     */
    public function append() {}

    /**
     * @psalm-return PromiseInterface<ResponseInterface>
     */
    public function __invoke(RequestInterface $request, array $options) {}
}
