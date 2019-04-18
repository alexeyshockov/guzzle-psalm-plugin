<?php

namespace GuzzleHttp;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Promise\PromisorInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @template-implements PromisorInterface<void>
 *
 * @psalm-type pool_config array{
 *  concurrency?:int,
 *  pool_size?:int,
 *  options?:array,
 *  fulfilled?:callable(mixed, mixed, PromiseInterface):void,
 *  rejected?:callable(mixed, mixed, PromiseInterface):void
 * }
 * @psalm-type requests_iterable iterable<RequestInterface>|iterable<callable(array):PromiseInterface<ResponseInterface>>
 */
class Pool implements PromisorInterface
{
    /**
     * @param ClientInterface   $client
     * @param requests_iterable $requests
     * @param pool_config       $config
     */
    public function __construct(
        ClientInterface $client,
        $requests,
        array $config = []
    ) {}

    /**
     * @param ClientInterface   $client
     * @param requests_iterable $requests
     * @param pool_config       $config
     *
     * @return array<ResponseInterface|\Exception|mixed>
     */
    public static function batch(
        ClientInterface $client,
        $requests,
        array $options = []
    ) {}
}
