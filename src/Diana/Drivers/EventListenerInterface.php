<?php

namespace Diana\Drivers;

interface EventListenerInterface
{
    public function getBefore(): array;
    public function getAfter(): array;
    public function getClass(): string;
    public function getAction(): string;
    public function getCallable(): string|callable;
}
