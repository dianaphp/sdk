<?php

namespace Diana\Contracts\Core;

use Closure;
use Psr\Container\ContainerInterface;

interface Container extends ContainerInterface
{
    public function get(string $abstract): mixed;

    public function has(string $abstract): bool;

    public function make(string $abstract, array $parameters = []): mixed;

    public function call(callable|string $callback, array $parameters = [], $defaultMethod = null): mixed;

    public function instance(string $abstract, mixed $instance): void;

    public function singleton(string $abstract, mixed $concrete = null): void;

    public function addContextualBinding(string $class, string $abstract, Closure|string $concrete): void;

    public function alias(string $abstract, string $alias): void;
}
