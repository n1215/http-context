<?php

namespace N1215\Http\Context;

use N1215\Http\Context\HttpContextInterface;

/**
 * An abstraction of Http middlewares, HTTP applications, or controller actions in typical MVC web frameworks.
 */
interface HttpHandlerInterface
{
    public function __invoke(HttpContextInterface $context) : HttpContextInterface;
}