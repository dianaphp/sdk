<?php

namespace Diana\Contracts\Config;

interface Config
{
    public function get(string $key): mixed;

    public function set(string $key, mixed $value): void;

    public function all(): array;

    public function addDefault(array $default): self;

    public function getDefault(string $key): mixed;

    public function getDefaults(): array;
}
