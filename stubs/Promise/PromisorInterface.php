<?php
namespace GuzzleHttp\Promise;

/**
 * @template T
 */
interface PromisorInterface
{
    /**
     * @return PromiseInterface<T>
     */
    public function promise();
}
