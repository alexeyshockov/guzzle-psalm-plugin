<?php
namespace GuzzleHttp;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * @psalm-type handler_fn = callable(RequestInterface, array):PromiseInterface<ResponseInterface>
 * @psalm-type middleware_fn = callable(handler_fn):handler_fn
 */
final class Middleware
{
    /**
     * @return middleware_fn
     */
    public static function cookies() {}

    /**
     * @return middleware_fn
     */
    public static function httpErrors() {}

    /**
     * @param array|\ArrayAccess $container
     *
     * @return middleware_fn
     */
    public static function history(&$container) {}

    /**
     * @param callable(RequestInterface, array):void                    $before
     * @param callable(RequestInterface, array, ResponseInterface):void $after
     *
     * @return middleware_fn
     */
    public static function tap(callable $before = null, callable $after = null) {}

    /**
     * @return middleware_fn
     */
    public static function redirect() {}

    /**
     * @param callable(int, RequestInterface, ResponseInterface=, mixed=):bool $decider
     * @param callable(int, ResponseInterface|null):int                        $delay
     *
     * @return middleware_fn
     */
    public static function retry(callable $decider, callable $delay = null) {}

    /**
     * @param LoggerInterface  $logger
     * @param MessageFormatter $formatter
     * @param string           $logLevel
     *
     * @return middleware_fn
     */
    public static function log(LoggerInterface $logger, MessageFormatter $formatter, $logLevel = LogLevel::INFO) {}

    /**
     * @return middleware_fn
     */
    public static function prepareBody() {}

    /**
     * @param callable(RequestInterface):RequestInterface $fn
     *
     * @return middleware_fn
     */
    public static function mapRequest(callable $fn) {}

    /**
     * @param callable(ResponseInterface):ResponseInterface $fn
     *
     * @return middleware_fn
     */
    public static function mapResponse(callable $fn) {}
}
