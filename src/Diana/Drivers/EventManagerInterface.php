<?php

namespace Diana\Drivers;

interface EventManagerInterface
{
    public function fire(EventInterface $event, string $action, array $payload = []): void;

    public function registerEventListener(EventListenerInterface $eventListener): void;
}
