<?php
namespace GuzzleHttp;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @param string[] $lines
 *
 * @return array<string, (string|null)[]>
 */
function headers_from_lines($lines) {}

/**
 * @return callable(RequestInterface, array):PromiseInterface<ResponseInterface>
 */
function choose_handler() {}

/**
 * @template TKey of string
 *
 * @param array<TKey, mixed> $headers
 *
 * @return array<string, TKey>
 */
function normalize_header_keys(array $headers) {}
