<?php

namespace Diana\Drivers;

interface EventInterface
{
    public function fire(string $action, array $payload = []): void;

    public function getClass(): string;
}
