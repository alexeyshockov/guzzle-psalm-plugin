<?php

namespace GuzzleHttp\Promise;

/**
 * @template T
 *
 * @template-implements PromiseInterface<T>
 */
class FulfilledPromise implements PromiseInterface
{
    /**
     * @psalm-param T $value
     */
    public function __construct($value) {}
}
