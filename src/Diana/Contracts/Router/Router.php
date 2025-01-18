<?php

namespace Diana\Contracts\Router;

use Diana\Contracts\RequestContract;

interface Router
{
    public function resolve(RequestContract $request): Route;

    public function getErrorRoute(): ?Route;

    public function getErrorCommandRoute(): ?Route;
}
