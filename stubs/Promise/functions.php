<?php

namespace GuzzleHttp\Promise;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Promise\PromisorInterface;

/**
 * @template T
 *
 * @param callable():T $task
 *
 * @return PromiseInterface<T>
 */
function task(callable $task) {}

/**
 * @template T
 *
 * @param PromiseInterface<T>|T $value
 *
 * @return PromiseInterface<T>
 */
function promise_for($value) {}

/**
 * @template T
 *
 * @param PromiseInterface<T>|T $reason
 *
 * @return PromiseInterface<T>
 */
function rejection_for($reason) {}

/**
 * @template T
 *
 * @param iterable<T>|T $value
 *
 * @return \Iterator<T>
 */
function iter_for($value) {}

/**
 * @template T
 *
 * @param PromiseInterface<T> $promise
 *
 * @return array{state: string, value?: T|\Exception|mixed, reason?: string}
 */
function inspect(PromiseInterface $promise) {}

/**
 * @template T
 *
 * @param iterable<PromiseInterface<T>> $promises
 *
 * @return array<array{state:string, value?:T|\Exception|mixed, reason?:string}>
 */
function inspect_all($promises) {}

/**
 * @template TKey of array-key
 * @template TValue
 *
 * @param iterable<TKey, PromiseInterface<TValue>> $promises
 *
 * @return array<TKey, TValue>
 */
function unwrap($promises) {}

/**
 * @template T
 *
 * @param iterable<PromiseInterface<T>> $promises
 *
 * @return PromiseInterface<iterable<T>>
 */
function all($promises) {}

/**
 * @template T
 *
 * @param int                          $count
 * @param iterable<PromiseInterface<T>> $promises
 *
 * @return PromiseInterface<iterable<T>>
 */
function some($count, $promises) {}

/**
 * @template T
 *
 * @param iterable<PromiseInterface<T>> $promises
 *
 * @return PromiseInterface<iterable<T>>
 */
function any($promises) {}

/**
 * Returns a promise that is fulfilled when all of the provided promises have
 * been fulfilled or rejected.
 *
 * The returned promise is fulfilled with an array of inspection state arrays.
 *
 * @template TKey
 * @template TValue
 *
 * @param iterable<TKey, PromiseInterface<TValue>> $promises
 *
 * @return PromiseInterface<array<TKey, array{state:string, value?:TValue|\Exception|mixed, reason?:string}>>
 */
function settle($promises)
{
    $results = [];

    return each(
        $promises,
        function ($value, $idx) use (&$results) {
            $results[$idx] = ['state' => PromiseInterface::FULFILLED, 'value' => $value];
        },
        function ($reason, $idx) use (&$results) {
            $results[$idx] = ['state' => PromiseInterface::REJECTED, 'reason' => $reason];
        }
    )->then(function () use (&$results) {
        ksort($results);
        return $results;
    });
}

/**
 * @template TKey
 * @template TValue
 *
 * @param iterable<TKey, PromiseInterface<TValue>>      $iterable
 * @param callable(TValue, TKey, PromiseInterface):void $onFulfilled
 * @param callable(mixed, TKey, PromiseInterface):void  $onRejected
 *
 * @return PromiseInterface<void>
 */
function each(
    $iterable,
    callable $onFulfilled = null,
    callable $onRejected = null
) {}

/**
 * @template TKey
 * @template TValue
 *
 * @param iterable<TKey, PromiseInterface<TValue>>      $iterable
 * @param int                                           $concurrency
 * @param callable(TValue, TKey, PromiseInterface):void $onFulfilled
 * @param callable(mixed, TKey, PromiseInterface):void  $onRejected
 *
 * @return PromiseInterface<void>
 */
function each_limit(
    $iterable,
    $concurrency,
    callable $onFulfilled = null,
    callable $onRejected = null
) {}

/**
 * @template TKey
 * @template TValue
 *
 * @param iterable<TKey, PromiseInterface<TValue>>      $iterable
 * @param int                                           $concurrency
 * @param callable(TValue, TKey, PromiseInterface):void $onFulfilled
 *
 * @return PromiseInterface<void>
 */
function each_limit_all(
    $iterable,
    $concurrency,
    callable $onFulfilled = null
) {}
