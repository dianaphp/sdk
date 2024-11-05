<?php

namespace Diana\Contracts;

use Diana\Event\EventInterface;

interface EventManagerContract
{
    public function fire(EventInterface $event): void;

    public function createEventListener(
        string $event,
        array|string $callable,
        array $before = [],
        array $after = []
    ): EventListenerContract;
    public function addEventListener(EventListenerContract $eventListener): void;
    public function addNewEventListener(
        string $event,
        array|string $callable,
        array $before = [],
        array $after = []
    );
    public function addNewSingleEventListener(
        string $event,
        array|string $callable,
        array $before = [],
        array $after = []
    );
    public function addSingleEventListener(EventListenerContract $eventListener): void;
    public function removeEventListener(EventListenerContract $eventListener): void;
}
