<?php

namespace Diana\Contracts;

use Psr\EventDispatcher\EventDispatcherInterface;

interface EventManagerContract extends EventDispatcherInterface
{
    public function addEventListener(
        string $event,
        callable $eventListener,
        array $before = [],
        array $after = []
    ): callable;
    public function addSingleEventListener(
        string $event,
        callable $eventListener,
        array $before = [],
        array $after = []
    ): callable;
    public function removeEventListener(string $event, callable $eventListener): bool;
}
