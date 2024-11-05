<?php

namespace Diana\Contracts;

interface RendererContract
{
    public function render(string $input, array $data = []): string;
}
