<?php

namespace GuzzleHttp;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

interface ClientInterface
{
    /**
     * @param RequestInterface $request
     * @param array            $options
     *
     * @return PromiseInterface<ResponseInterface>
     */
    public function sendAsync(RequestInterface $request, array $options = []);

    /**
     * @param string              $method
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return PromiseInterface<ResponseInterface>
     */
    public function requestAsync($method, $uri, array $options = []);
}
