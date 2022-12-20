<?php

namespace GuzzleHttp\Handler;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class CurlMultiHandler
{
    /**
     * @param array{handle_factory?:CurlFactoryInterface,select_timeout?:int|float,options?:array} $options
     */
    public function __construct(array $options = []) {}

    /**
     * @psalm-return PromiseInterface<ResponseInterface>
     */
    public function __invoke(RequestInterface $request, array $options) {}
}
