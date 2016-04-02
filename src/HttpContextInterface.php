<?php

namespace N1215\Http\Context;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Hold HTTP request, HTTP response, and state.
 */
interface HttpContextInterface
{
    public function getRequest() : ServerRequestInterface;

    public function getResponse() : ResponseInterface;

    public function isTerminated(): bool;

    public function withRequest(ServerRequestInterface $request): HttpContextInterface;

    public function withResponse(ResponseInterface $response): HttpContextInterface;

    public function withIsTerminated(bool $isTerminated): HttpContextInterface;

    public function handledBy(HttpHandlerInterface $handler): HttpContextInterface;

}
