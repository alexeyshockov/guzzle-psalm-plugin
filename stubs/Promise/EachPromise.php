<?php
namespace GuzzleHttp\Promise;

/**
 * @template-implements PromisorInterface<void>
 */
class EachPromise implements PromisorInterface
{
    /**
     * @template TKey
     * @template TValue
     *
     * @param iterable<TKey, PromiseInterface<TValue>> $iterable
     * @param array{
     *  concurrency?:int,
     *  fulfilled?:callable(TValue, TKey, PromiseInterface):void,
     *  rejected?:callable(mixed, TKey, PromiseInterface):void
     * } $config
     */
    public function __construct($iterable, array $config = []) {}
}
