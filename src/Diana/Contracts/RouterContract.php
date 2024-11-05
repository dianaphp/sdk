<?php

namespace Diana\Contracts;

interface RouterContract
{
    public function resolve(RequestContract $request): RouteContract;

    public function getErrorRoute(): ?RouteContract;

    public function getErrorCommandRoute(): ?RouteContract;
}
