<?php

namespace GuzzleHttp\Promise;

/**
 * @template T of mixed
 *
 * @psalm-type rejected_fn = callable(mixed):(PromiseInterface|mixed)
 *
 * @see https://github.com/vimeo/psalm/issues/1283
 */
interface PromiseInterface
{
    /**
     * @template T_fulfilled
     *
     * @psalm-param callable(T):(PromiseInterface<T_fulfilled>|T_fulfilled) $onFulfilled
     * @psalm-param rejected_fn $onRejected
     *
     * @psalm-return PromiseInterface<T_fulfilled>
     */
    public function then(
        callable $onFulfilled = null,
        callable $onRejected = null
    );

    /**
     * @psalm-param rejected_fn $onRejected
     *
     * @return PromiseInterface
     */
    public function otherwise(callable $onRejected);

    /**
     * @return PromiseInterface::PENDING|PromiseInterface::FULFILLED|PromiseInterface::REJECTED
     */
    public function getState();

    /**
     * @psalm-param T $value
     *
     * @return void
     */
    public function resolve($value);

    /**
     * @param mixed $reason
     *
     * @return void
     */
    public function reject($reason);

    /**
     * @return void
     */
    public function cancel();

    /**
     * @param bool $unwrap
     *
     * @psalm-return T
     */
    public function wait($unwrap = true);
}
