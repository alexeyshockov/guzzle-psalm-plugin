<?php
namespace GuzzleHttp;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @psalm-type handler_fn callable(RequestInterface, array):PromiseInterface<ResponseInterface>
 * @psalm-type middleware_fn callable(handler_fn):handler_fn
 */
class HandlerStack
{
    /**
     * @param handler_fn $handler
     *
     * @return HandlerStack
     */
    public static function create(callable $handler = null) {}

    /**
     * @param handler_fn $handler
     */
    public function __construct(callable $handler = null) {}

    /**
     * @param RequestInterface $request
     * @param array            $options
     *
     * @return PromiseInterface<ResponseInterface>
     */
    public function __invoke(RequestInterface $request, array $options) {}

    /**
     * @param handler_fn $handler
     */
    public function setHandler(callable $handler) {}

    /**
     * @param middleware_fn $middleware
     * @param string        $name
     */
    public function unshift(callable $middleware, $name = null) {}

    /**
     * @param middleware_fn $middleware
     * @param string        $name
     */
    public function push(callable $middleware, $name = '') {}

    /**
     * @param string        $findName
     * @param middleware_fn $middleware
     * @param string        $withName
     */
    public function before($findName, callable $middleware, $withName = '') {}

    /**
     * @param string        $findName
     * @param middleware_fn $middleware
     * @param string        $withName
     */
    public function after($findName, callable $middleware, $withName = '') {}

    /**
     * @param middleware_fn|string $remove
     */
    public function remove($remove) {}

    /**
     * @return handler_fn
     */
    public function resolve() {}
}
