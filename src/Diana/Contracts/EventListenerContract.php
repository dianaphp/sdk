<?php

namespace Diana\Contracts;

interface EventListenerContract
{
    public function __construct(string $event, array|string $callable, array $before = [], array $after = []);
    public function getBefore(): array;
    public function getAfter(): array;
    public function setCallable(string|callable $callable): void;
    public function getCallable(): string|callable;
    public function getEvent(): string;
}
