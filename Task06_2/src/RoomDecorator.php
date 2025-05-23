<?php
namespace App;

abstract class RoomDecorator implements RoomInterface
{
    protected $room;

    public function __construct(RoomInterface $room)
    {
        $this->room = $room;
    }

    public function getDescription(): string
    {
        return $this->room->getDescription();
    }

    public function getCost(): float
    {
        return $this->room->getCost();
    }
}