<?php

namespace Diana\Contracts;

interface ConfigContract
{
    public function get(?string $key = null): mixed;

    public function addDefault(array $default): self;
    public function getDefault(?string $key = null): array;
}
