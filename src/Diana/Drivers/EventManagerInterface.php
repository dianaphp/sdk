<?php

namespace Diana\Drivers;

interface EventManagerInterface
{
    public function fire(EventInterface $event, string $action, array $payload = []): void;

    public function addEventListener(EventListenerInterface $eventListener): void;
    public function removeEventListener(EventListenerInterface $eventListener): void;
}
