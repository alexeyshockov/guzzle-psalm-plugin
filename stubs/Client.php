<?php

namespace GuzzleHttp;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

/**
 * @psalm-type handler_fn = callable(RequestInterface, array):PromiseInterface<ResponseInterface>
 *
 * @psalm-type guzzle_client_config = array{handler?: handler_fn, base_uri?: string|UriInterface|null, ...}
 */
class Client implements ClientInterface
{
    /**
     * @psalm-param guzzle_client_config $config
     */
    public function __construct(array $config = []) {}

    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return ResponseInterface
     */
    public function get($uri, array $options = []) {}
    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return ResponseInterface
     */
    public function head($uri, array $options = []) {}
    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return ResponseInterface
     */
    public function put($uri, array $options = []) {}
    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return ResponseInterface
     */
    public function post($uri, array $options = []) {}
    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return ResponseInterface
     */
    public function path($uri, array $options = []) {}
    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return ResponseInterface
     */
    public function delete($uri, array $options = []) {}

    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return PromiseInterface<ResponseInterface>
     */
    public function getAsync($uri, array $options = []) {}
    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return PromiseInterface<ResponseInterface>
     */
    public function headAsync($uri, array $options = []) {}
    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return PromiseInterface<ResponseInterface>
     */
    public function putAsync($uri, array $options = []) {}
    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return PromiseInterface<ResponseInterface>
     */
    public function postAsync($uri, array $options = []) {}
    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return PromiseInterface<ResponseInterface>
     */
    public function pathAsync($uri, array $options = []) {}
    /**
     * @param string|UriInterface $uri
     * @param array               $options
     *
     * @return PromiseInterface<ResponseInterface>
     */
    public function deleteAsync($uri, array $options = []) {}
}
